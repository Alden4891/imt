<?php

// Include classes
include_once('tbs_class.php'); // Load the TinyButStrong template engine
include_once('tbs_plugin_opentbs.php'); // Load the OpenTBS plugin

// prevent from a PHP configuration problem when using mktime() and date()
if (version_compare(PHP_VERSION,'5.1.0')>=0) {
    if (ini_get('date.timezone')=='') {
        date_default_timezone_set('UTC');
    }
}

// Initialize the TBS instance
$TBS = new clsTinyButStrong; // new instance of TBS
$TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); // load the OpenTBS plugin

// ------------------------------
// Prepare some data for the demo
// ------------------------------

$sql = "

SELECT
    `interventions`.`interv_id`
    , `swdi`.`HOUSEHOLD_ID`
    , `swdi`.`LASTNAME` AS LAST_NAME
    , `swdi`.`FIRSTNAME` AS FIRST_NAME
    , `swdi`.`MIDDLENAME` AS MID_NAME
    , `swdi`.`EXT` AS EXT_NAME
    , `swdi`.`psgc_region`
    , `swdi`.`psgc_province` AS PROVINCE
    , `swdi`.`psgc_city` AS MUNICIPALITY
    , `swdi`.`psgc_brgy` AS BARANGAY
    , `swdi`.`LOWB`
    , `swdi`.`SWDI_SCORE`
    , `interventions`.`subject`
    , `interventions`.`details`
    , `interventions`.`date_conducted`
    , `interventions`.`encoded_by`
    , `lib_comp`.`comp_desc`
    , `lib_subcomp`.`subcomp`
    , `lib_programs`.`program`
    , `users`.`fullname` AS `casemanamer_name`
    , `interventions`.`date_encoded`
    , `users_1`.`fullname` AS `Last_modified_by`
    , `interventions`.`date_modified`
    , `interventions`.`yds_child_count` as YDS
FROM
    `db_imt`.`interventions`
    INNER JOIN `db_imt`.`swdi`
        ON (`interventions`.`HOUSEHOLD_ID` = `swdi`.`HOUSEHOLD_ID`)
    INNER JOIN `db_imt`.`lib_programs`
        ON (`lib_programs`.`program_id` = `interventions`.`program_id`)
    INNER JOIN `db_imt`.`lib_subcomp`
        ON (`lib_subcomp`.`subcomp_id` = `lib_programs`.`subcomp_id`)
    INNER JOIN `db_imt`.`lib_comp`
        ON (`lib_comp`.`comp_id` = `lib_subcomp`.`comp_id`)
    INNER JOIN `db_imt`.`users`
        ON (`users`.`user_id` = `interventions`.`encoded_by`)
    LEFT JOIN `db_imt`.`users` AS `users_1`
        ON (`users_1`.`user_id` = `interventions`.`modified_by`)
WHERE ($filter)
 ;
";
//echo "$sql";
include '../dbconnect.php';

// prepare data to display
$res_data = mysqli_query($con,$sql) or die(mysqli_error());
$data = mysqli_fetch_all($res_data, MYSQLI_ASSOC);
include '../dbclose.php';

// -----------------
// Load the template
// -----------------

$template = './templates/imt_masterlist.xlsx';
$TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8); // Also merge some [onload] automatic fields (depends of the type of document).

// ----------------------
// Debug mode of the demo
// ----------------------
if (isset($_POST['debug']) && ($_POST['debug']=='current')) $TBS->Plugin(OPENTBS_DEBUG_XML_CURRENT, true); // Display the intented XML of the current sub-file, and exit.
if (isset($_POST['debug']) && ($_POST['debug']=='info'))    $TBS->Plugin(OPENTBS_DEBUG_INFO, true); // Display information about the document, and exit.
if (isset($_POST['debug']) && ($_POST['debug']=='show'))    $TBS->Plugin(OPENTBS_DEBUG_XML_SHOW); // Tells TBS to display information when the document is merged. No exit.

// --------------------------------------------
// Merging and other operations on the template
// --------------------------------------------

$TBS->PlugIn(OPENTBS_SELECT_SHEET, "R_A1");

// Merge data in the first sheet
$TBS->MergeBlock('a,b', $data);


// $TBS->PlugIn(OPENTBS_CHART_DELETE_CATEGORY, 'chart_members_by_category', '*'); // delete all categories used in the template => no need with Ms Office since categories with no data are hidden.
// Merge pictures of the current sheet
//$x_picture = 'pic_1523d.gif';
$TBS->PlugIn(OPENTBS_MERGE_SPECIAL_ITEMS);

// -----------------
// Output the result
// -----------------

// Define the name of the output file
//$save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
$output_file_name = 'IMT_MASTERLIST_'.date('Y-m-d').'.xlsx';
$TBS->Show(OPENTBS_DOWNLOAD, $output_file_name);

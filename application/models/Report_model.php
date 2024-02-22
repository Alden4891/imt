<?php
class Report_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    private function get_imt_es_data($filter){
        $sql = "

        SELECT
            `tbl_swdi`.`REGION_NICK` AS `REGION`
            , `tbl_swdi`.`PROV_NAME` AS `PROVINCE`
            , `tbl_swdi`.`CITY_NAME` AS `MUNICIPALITY`
            , `tbl_swdi`.`BRGY_NAME` AS `BARANGAY`
            , `tbl_swdi`.`HOUSEHOLD_ID`
            , `tbl_swdi`.`LASTNAME` AS `LAST_NAME`
            , `tbl_swdi`.`FIRSTNAME` AS `FIRST_NAME`
            , `tbl_swdi`.`MIDDLENAME` AS `MID_NAME`
            , '' AS `EXT_NAME`
            , `tbl_swdi`.`LOWB`
            , SUM(`interventions`.`yds_child_count`) AS `YDS`,

          CASE WHEN (`interventions`.`program_id`=1) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col1',
          CASE WHEN (`interventions`.`program_id`=2) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col2',
          CASE WHEN (`interventions`.`program_id`=3) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col3',
          CASE WHEN (`interventions`.`program_id`=4) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col4',
          CASE WHEN (`interventions`.`program_id`=5) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col5',
          CASE WHEN (`interventions`.`program_id`=6) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col6',
          CASE WHEN (`interventions`.`program_id`=7) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col7',
          CASE WHEN (`interventions`.`program_id`=8) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col8',
          CASE WHEN (`interventions`.`program_id`=9) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col9',
          CASE WHEN (`interventions`.`program_id`=40) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col10'

          , COUNT(`interventions`.`interv_id`) AS `TOTAL`
        FROM
            `db_imt`.`interventions`
            INNER JOIN `db_imt`.`tbl_swdi`
                ON (`interventions`.`HOUSEHOLD_ID` = `tbl_swdi`.`HOUSEHOLD_ID`)
            INNER JOIN `db_imt`.`lib_programs`
                ON (`lib_programs`.`program_id` = `interventions`.`program_id`)
            INNER JOIN `db_imt`.`lib_subcomp`
                ON (`lib_subcomp`.`subcomp_id` = `lib_programs`.`subcomp_id`)
        WHERE (`lib_subcomp`.`comp_id` = 1 AND $filter)
        GROUP BY `REGION`, `PROVINCE`, `MUNICIPALITY`, `BARANGAY`, `tbl_swdi`.`HOUSEHOLD_ID`, `LAST_NAME`, `FIRST_NAME`, `MID_NAME`, `EXT_NAME`

        ORDER BY 1,2;

        ";
        return $this->db->query($sql)->result_array();
    }

    private function get_imt_sa_data($filter){
        $sql = "
        SELECT
            `tbl_swdi`.`REGION_NICK` AS `REGION`
            , `tbl_swdi`.`PROV_NAME` AS `PROVINCE`
            , `tbl_swdi`.`CITY_NAME` AS `MUNICIPALITY`
            , `tbl_swdi`.`BRGY_NAME` AS `BARANGAY`
            , `tbl_swdi`.`HOUSEHOLD_ID`
            , `tbl_swdi`.`LASTNAME` AS `LAST_NAME`
            , `tbl_swdi`.`FIRSTNAME` AS `FIRST_NAME`
            , `tbl_swdi`.`MIDDLENAME` AS `MID_NAME`
            , '' AS `EXT_NAME`
            , `tbl_swdi`.`LOWB`
            , SUM(`interventions`.`yds_child_count`) AS `YDS`,

          CASE WHEN (`interventions`.`program_id`=10) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col1',
          CASE WHEN (`interventions`.`program_id`=11) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col2',
          CASE WHEN (`interventions`.`program_id`=12) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col3',
          CASE WHEN (`interventions`.`program_id`=13) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col4',
          CASE WHEN (`interventions`.`program_id`=14) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col5',
          CASE WHEN (`interventions`.`program_id`=41) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col6'
          , COUNT(`interventions`.`interv_id`) AS `TOTAL`
        FROM
            `db_imt`.`interventions`
            INNER JOIN `db_imt`.`tbl_swdi`
                ON (`interventions`.`HOUSEHOLD_ID` = `tbl_swdi`.`HOUSEHOLD_ID`)
            INNER JOIN `db_imt`.`lib_programs`
                ON (`lib_programs`.`program_id` = `interventions`.`program_id`)
            INNER JOIN `db_imt`.`lib_subcomp`
                ON (`lib_subcomp`.`subcomp_id` = `lib_programs`.`subcomp_id`)
        WHERE (`lib_subcomp`.`comp_id` = 2 AND $filter)
        GROUP BY `REGION`, `PROVINCE`, `MUNICIPALITY`, `BARANGAY`, `tbl_swdi`.`HOUSEHOLD_ID`, `LAST_NAME`, `FIRST_NAME`, `MID_NAME`, `EXT_NAME`

        ORDER BY 1,2;
        ";
        
        return $this->db->query($sql)->result_array();        
    }

    private function get_imt_int_data($filter){
        $sql = "
        SELECT
            `tbl_swdi`.`REGION_NICK` AS `REGION`
            , `tbl_swdi`.`PROV_NAME` AS `PROVINCE`
            , `tbl_swdi`.`CITY_NAME` AS `MUNICIPALITY`
            , `tbl_swdi`.`BRGY_NAME` AS `BARANGAY`
            , `tbl_swdi`.`HOUSEHOLD_ID`
            , `tbl_swdi`.`LASTNAME` AS `LAST_NAME`
            , `tbl_swdi`.`FIRSTNAME` AS `FIRST_NAME`
            , `tbl_swdi`.`MIDDLENAME` AS `MID_NAME`
            , '' AS `EXT_NAME`
            , `tbl_swdi`.`LOWB`
            , SUM(`interventions`.`yds_child_count`) AS `YDS`,

          CASE WHEN (`interventions`.`program_id`=15) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col1',
          CASE WHEN (`interventions`.`program_id`=16) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col2',
          CASE WHEN (`interventions`.`program_id`=42) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col3'
          , COUNT(`interventions`.`interv_id`) AS `TOTAL`
        FROM
            `db_imt`.`interventions`
            INNER JOIN `db_imt`.`tbl_swdi`
                ON (`interventions`.`HOUSEHOLD_ID` = `tbl_swdi`.`HOUSEHOLD_ID`)
            INNER JOIN `db_imt`.`lib_programs`
                ON (`lib_programs`.`program_id` = `interventions`.`program_id`)
            INNER JOIN `db_imt`.`lib_subcomp`
                ON (`lib_subcomp`.`subcomp_id` = `lib_programs`.`subcomp_id`)
        WHERE (`lib_subcomp`.`comp_id` = 3 AND $filter)
        GROUP BY `REGION`, `PROVINCE`, `MUNICIPALITY`, `BARANGAY`, `tbl_swdi`.`HOUSEHOLD_ID`, `LAST_NAME`, `FIRST_NAME`, `MID_NAME`, `EXT_NAME`

        ORDER BY 1,2;

        ";
        
        return $this->db->query($sql)->result_array();        
    }

    private function get_imt_ext_data1($filter){
        $sql = "

        SELECT
            `tbl_swdi`.`REGION_NICK` AS `REGION`
            , `tbl_swdi`.`PROV_NAME` AS `PROVINCE`
            , `tbl_swdi`.`CITY_NAME` AS `MUNICIPALITY`
            , `tbl_swdi`.`BRGY_NAME` AS `BARANGAY`
            , `tbl_swdi`.`HOUSEHOLD_ID`
            , `tbl_swdi`.`LASTNAME` AS `LAST_NAME`
            , `tbl_swdi`.`FIRSTNAME` AS `FIRST_NAME`
            , `tbl_swdi`.`MIDDLENAME` AS `MID_NAME`
            , '' AS `EXT_NAME`
            , `tbl_swdi`.`LOWB`
            , SUM(`interventions`.`yds_child_count`) AS `YDS`,

      -- da
          CASE WHEN (`interventions`.`program_id`=18) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'da1', 
          CASE WHEN (`interventions`.`program_id`=45) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'da2', 
          CASE WHEN (`interventions`.`program_id`=46) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'da3', 
          CASE WHEN (`interventions`.`program_id`=47) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'da4', 
          CASE WHEN (`interventions`.`program_id`=48) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'da5', 
          CASE WHEN (`interventions`.`program_id`=49) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'da6', 

      -- dole
          CASE WHEN (`interventions`.`program_id`=58) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'dole1', 
          CASE WHEN (`interventions`.`program_id`=59) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'dole2', 
          CASE WHEN (`interventions`.`program_id`=60) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'dole3', 
          CASE WHEN (`interventions`.`program_id`=61) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'dole4', 

      -- dti
          CASE WHEN (`interventions`.`program_id`=54) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'dti1', 
          CASE WHEN (`interventions`.`program_id`=52) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'dti2', 
          CASE WHEN (`interventions`.`program_id`=51) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'dti3', 
          CASE WHEN (`interventions`.`program_id`=50) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'dti4', 
          CASE WHEN (`interventions`.`program_id`=53) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'dti5', 
          CASE WHEN (`interventions`.`program_id`=17) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'dti6', 
          
          -- neda
          CASE WHEN (`interventions`.`program_id`=56) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'neda1',  
          CASE WHEN (`interventions`.`program_id`=55) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'neda2',  
          CASE WHEN (`interventions`.`program_id`=57) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'neda3',  

      -- others
          CASE WHEN (`interventions`.`program_id`=1044) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'other',  -- 'others

          COUNT(`interventions`.`interv_id`) AS `TOTAL`
        FROM
            `db_imt`.`interventions`
            INNER JOIN `db_imt`.`tbl_swdi`
                ON (`interventions`.`HOUSEHOLD_ID` = `tbl_swdi`.`HOUSEHOLD_ID`)
            INNER JOIN `db_imt`.`lib_programs`
                ON (`lib_programs`.`program_id` = `interventions`.`program_id`)
            INNER JOIN `db_imt`.`lib_subcomp`
                ON (`lib_subcomp`.`subcomp_id` = `lib_programs`.`subcomp_id`)
        WHERE (`lib_subcomp`.`comp_id` = 4 AND $filter)
        GROUP BY `REGION`, `PROVINCE`, `MUNICIPALITY`, `BARANGAY`, `tbl_swdi`.`HOUSEHOLD_ID`, `LAST_NAME`, `FIRST_NAME`, `MID_NAME`, `EXT_NAME`
        ORDER BY 1,2;

        ";
        
        return $this->db->query($sql)->result_array();     

    }

    private function get_imt_ext_data2($filter){
        $sql = "
        SELECT
            `tbl_swdi`.`REGION_NICK` AS `REGION`
            , `tbl_swdi`.`PROV_NAME` AS `PROVINCE`
            , `tbl_swdi`.`CITY_NAME` AS `MUNICIPALITY`
            , `tbl_swdi`.`BRGY_NAME` AS `BARANGAY`
            , `tbl_swdi`.`HOUSEHOLD_ID`
            , `tbl_swdi`.`LASTNAME` AS `LAST_NAME`
            , `tbl_swdi`.`FIRSTNAME` AS `FIRST_NAME`
            , `tbl_swdi`.`MIDDLENAME` AS `MID_NAME`
            , '' AS `EXT_NAME`
            , `tbl_swdi`.`LOWB`
            , SUM(`interventions`.`yds_child_count`) AS `YDS`,

          CASE WHEN (`interventions`.`program_id`=19) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col1',
          CASE WHEN (`interventions`.`program_id`=22) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col2',
          CASE WHEN (`interventions`.`program_id`=23) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col3',
          CASE WHEN (`interventions`.`program_id`=24) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col4',
          CASE WHEN (`interventions`.`program_id`=25) THEN COUNT(`interventions`.`program_id`) ELSE 0 END AS 'col5'
          , COUNT(`interventions`.`interv_id`) AS `TOTAL`
        FROM
            `db_imt`.`interventions`
            INNER JOIN `db_imt`.`tbl_swdi`
                ON (`interventions`.`HOUSEHOLD_ID` = `tbl_swdi`.`HOUSEHOLD_ID`)
            INNER JOIN `db_imt`.`lib_programs`
                ON (`lib_programs`.`program_id` = `interventions`.`program_id`)
            INNER JOIN `db_imt`.`lib_subcomp`
                ON (`lib_subcomp`.`subcomp_id` = `lib_programs`.`subcomp_id`)
        WHERE (`lib_subcomp`.`comp_id` =5 AND $filter)
        GROUP BY `REGION`, `PROVINCE`, `MUNICIPALITY`, `BARANGAY`, `tbl_swdi`.`HOUSEHOLD_ID`, `LAST_NAME`, `FIRST_NAME`, `MID_NAME`, `EXT_NAME`

        ORDER BY 1,2;

        ";
        return $this->db->query($sql)->result_array();        
    }

    private function get_imt_masterlist_data($filter){
        $sql = "
        SELECT
            `interventions`.`interv_id`
            , `tbl_swdi`.`HOUSEHOLD_ID`
            , `tbl_swdi`.`LASTNAME` AS LAST_NAME
            , `tbl_swdi`.`FIRSTNAME` AS FIRST_NAME
            , `tbl_swdi`.`MIDDLENAME` AS MID_NAME
            , '' AS EXT_NAME
            , `tbl_swdi`.`REGION_NICK` as psgc_region
            , `tbl_swdi`.`PROV_NAME` AS PROVINCE
            , `tbl_swdi`.`CITY_NAME` AS MUNICIPALITY
            , `tbl_swdi`.`BRGY_NAME` AS BARANGAY
            , `tbl_swdi`.`LOWB`
            , `tbl_swdi`.`SWDI_SCORE`
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
            INNER JOIN `db_imt`.`tbl_swdi`
                ON (`interventions`.`HOUSEHOLD_ID` = `tbl_swdi`.`HOUSEHOLD_ID`)
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
        ";
        return $this->db->query($sql)->result_array();        
    }

    private function get__data($filter){
        $sql = "

        ";
        return $this->db->query($sql)->result_array();        
    }

    
    public function generate($template,$filter,$a_coverage = ""){

        require_once(APPPATH . 'libraries/tbs/tbs_class.php');
        require_once(APPPATH . 'libraries/tbs/tbs_plugin_opentbs.php');

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
        // Prepare some data 
        // ------------------------------

        $data = [];

        switch ($template) {
            case "imt_es":
                $data = $this->get_imt_es_data($filter);
                break;
            case "imt_sa":
                $template = "imt_sa";
                $data = $this->get_imt_sa_data($filter);
                break;
            case "imt_internal":
                $template = "imt_int";
                $data = $this->get_imt_int_data($filter);
                break;
            case "imt_ext1":
                $template = "imt_ext1";
                $data = $this->get_imt_ext_data1($filter);
                break;
            case "imt_ext2":
                $template = "imt_ext2";
                $data = $this->get_imt_ext_data2($filter);
                break;
            case "imt_masterlist":
                $template = "imt_masterlist";
                $data = $this->get_imt_masterlist_data($filter);
                break;
            // case "imt_sa_ml":
            //     $template = "imt_sa_ml";
            //     break;
            // case "imt_internal_ml":
            //     $template = "imt_int_ml";
            //     break;
            // case "imt_external1_ml":
            //     $template = "imt_ext1_ml";
            //     break;
            // case "imt_external2_ml":
            //     $template = "imt_ext2_ml";
            //     break;
        }

        // $data = $this->get_imt_es_data($filter);
        
        // print_r($res_data);

        // print('<br>');
        // $data = array();
        // $data[] = array('rank'=> 'A', 'firstname'=>'Sandra' , 'name'=>'Hill'      , 'number'=>'1523d', 'score'=>200, 'visits'=>15, 'email_1'=>'sh@tbs.com',  'email_2'=>'sandra@tbs.com',  'email_3'=>'s.hill@tbs.com');
        // $data[] = array('rank'=> 'A', 'firstname'=>'Roger'  , 'name'=>'Smith'     , 'number'=>'1234f', 'score'=>800, 'visits'=>33, 'email_1'=>'rs@tbs.com',  'email_2'=>'robert@tbs.com',  'email_3'=>'r.smith@tbs.com' );
        // $data[] = array('rank'=> 'B', 'firstname'=>'William', 'name'=>'Mac Dowell', 'number'=>'5491y', 'score'=>130, 'visits'=>16, 'email_1'=>'wmc@tbs.com', 'email_2'=>'william@tbs.com', 'email_3'=>'w.m.dowell@tbs.com' );

        // print_r($data);

        // return;

        /* ## OLD STYLE
        include '../dbconnect.php';
        $res_data = mysqli_query($con,$sql) or die(mysqli_error());
        $data = mysqli_fetch_all($res_data, MYSQLI_ASSOC);
        include '../dbclose.php';
        */

        /*
        // A recordset for merging tables
        $data = array();
        $data[] = array('rank'=> 'A', 'firstname'=>'Sandra' , 'name'=>'Hill'      , 'number'=>'1523d', 'score'=>200, 'visits'=>15, 'email_1'=>'sh@tbs.com',  'email_2'=>'sandra@tbs.com',  'email_3'=>'s.hill@tbs.com');
        $data[] = array('rank'=> 'A', 'firstname'=>'Roger'  , 'name'=>'Smith'     , 'number'=>'1234f', 'score'=>800, 'visits'=>33, 'email_1'=>'rs@tbs.com',  'email_2'=>'robert@tbs.com',  'email_3'=>'r.smith@tbs.com' );
        $data[] = array('rank'=> 'B', 'firstname'=>'William', 'name'=>'Mac Dowell', 'number'=>'5491y', 'score'=>130, 'visits'=>16, 'email_1'=>'wmc@tbs.com', 'email_2'=>'william@tbs.com', 'email_3'=>'w.m.dowell@tbs.com' );
        */


        // -----------------
        // Load the template
        // -----------------

        // $template = FCPATH."tbs/templates/$template.xlsx";
        $TBS->LoadTemplate(FCPATH."tbs/templates/$template.xlsx", OPENTBS_ALREADY_UTF8); // Also merge some [onload] automatic fields (depends of the type of document).

        // ----------------------
        // Debug mode of the demo
        // ----------------------
        if (isset($_POST['debug']) && ($_POST['debug']=='current')) $TBS->Plugin(OPENTBS_DEBUG_XML_CURRENT, true); // Display the intented XML of the current sub-file, and exit.
        if (isset($_POST['debug']) && ($_POST['debug']=='info'))    $TBS->Plugin(OPENTBS_DEBUG_INFO, true); // Display information about the document, and exit.
        if (isset($_POST['debug']) && ($_POST['debug']=='show'))    $TBS->Plugin(OPENTBS_DEBUG_XML_SHOW); // Tells TBS to display information when the document is merged. No exit.

        // --------------------------------------------
        // Merging and other operations on the template
        // --------------------------------------------
        
        if ($template == 'imt_ext2') {
            $TBS->PlugIn(OPENTBS_SELECT_SHEET, "OTHER_INTERV");
            $TBS->MergeBlock('dc1,dc2', 'num', 3);
            $TBS->MergeBlock('b2', $data);
            $TBS->MergeField('onshow.a_coverage', $a_coverage);
        }else{
            $TBS->PlugIn(OPENTBS_SELECT_SHEET, "R_A1");
            // Merge data in the first sheet
            // $a_coverage = "aaa";
            $TBS->MergeField('onshow.a_coverage', $a_coverage);
            $TBS->MergeBlock('a,b', $data);
        }





        // $TBS->PlugIn(OPENTBS_CHART_DELETE_CATEGORY, 'chart_members_by_category', '*'); // delete all categories used in the template => no need with Ms Office since categories with no data are hidden.



        // Merge pictures of the current sheet
        //$x_picture = 'pic_1523d.gif';
        $TBS->PlugIn(OPENTBS_MERGE_SPECIAL_ITEMS);


        

        // -----------------
        // Output the result
        // -----------------

        // Define the name of the output file
        //$save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
        $output_file_name = strtoupper($template).'_'.date('Y-m-d').'.xlsx';
        $TBS->Show(OPENTBS_DOWNLOAD, $output_file_name);


        /*
        if ($save_as==='') {
            // Output the result as a downloadable file (only streaming, no data saved in the server)
            $TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); // Also merges all [onshow] automatic fields.
            // Be sure that no more output is done, otherwise the download file is corrupted with extra data.
            exit();
        } else {
            // Output the result as a file on the server.
            $TBS->Show(OPENTBS_FILE, $output_file_name); // Also merges all [onshow] automatic fields.
            // The script can continue.
            exit("File [$output_file_name] has been created.");
        }
        */



    }
    
}
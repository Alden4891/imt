<?php

    $list_filter = " and 1=2 ";  //prevent roster from loading automatically
    $search_province = "";
    $search_municipality  = "";
    $search_barangay  = "";
    $search_lowb  = "";
    $filter_municipality = "";
    $filter_province  = "";
    $filter_barangay  = "";
    $filter_lowb  = "";
    $search_lowb  = "";
    $search_keyword  = "";
    $search_criteria  = "";


    if (isset($_REQUEST['apply_filter'])){

      $search_province = isset($_REQUEST['filter_province'])? $_REQUEST["filter_province"] :'';
      $search_municipality =  isset($_REQUEST['filter_municipality'])? $_REQUEST["filter_municipality"] :'';
      $search_barangay =  isset($_REQUEST['filter_barangay'])? $_REQUEST["filter_barangay"] :'';
      $search_lowb = isset($_REQUEST['filter_lowb'])? $_REQUEST["filter_lowb"] :'';

      // $search_municipality = addslashes($search_municipality);

      $filter_province = $search_province == ''?'':" AND `swdi`.`psgc_province` = '$search_province'";
      $filter_municipality = $search_municipality == ''?'':" AND `swdi`.`psgc_city` = '$search_municipality'";
      $filter_barangay = $search_barangay == ''?'':" AND `swdi`.`psgc_brgy` = '$search_barangay'";
      $filter_lowb = $search_lowb == ''?'':" AND `swdi`.`LOWB` = '$search_lowb'";



      $search_lowb = isset($_REQUEST['filter_lowb'])? $_REQUEST["filter_lowb"] :'';
      $search_keyword = isset($_REQUEST['filter_criteria'])? $_REQUEST["filter_criteria"] :'';

      //AND (TRIM(UPPER(CONCAT(r.FIRST_NAME,' ', r.MID_NAME, ' ', r.LAST_NAME, ' ', r.EXT_NAME))) LIKE '%ba%' OR r.HOUSEHOLD_ID = 'ba')
      $search_criteria =  isset($_REQUEST['filter_criteria'])? " AND (TRIM(UPPER(CONCAT(swdi.FIRSTNAME,' ', swdi.MIDDLENAME, ' ', swdi.LASTNAME))) LIKE '%".$_REQUEST['filter_criteria']."%' OR swdi.HOUSEHOLD_ID = '".$_REQUEST['filter_criteria']."') " :'';
      $list_filter = "$filter_province $filter_municipality $filter_barangay $filter_lowb $search_criteria";
  }

?>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Interventions <small>...</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="x_title">
            <form class="" action="" method="post" novalidate="" id="filter_form">
                  <span class="section">Filter</span>
                  <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Region</label>
                      <div class="col-md-6 col-sm-6">
                        <select class="form-control" name=filter_region id=filter_region>
                          <option value="" selected>SELECT</option>
                          <option value="XII">Region XII</option>

                        </select>
                      </div>
                  </div>
                  <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Province</label>
                      <div class="col-md-6 col-sm-6">
                        <select class="form-control" id="filter_province" name="filter_province">

                            <?php
                                // if ($search_province == "COTABATO (NORTH COTABATO)") echo "<option value=\"COTABATO (NORTH COTABATO)\" selected>COTABATO (NORTH COTABATO)</option>"; else echo "<option value=\"COTABATO (NORTH COTABATO)\">COTABATO (NORTH COTABATO)</option>";
                                // if ($search_province == "COTABATO CITY") echo "<option value=\"COTABATO CITY\" selected>COTABATO CITY</option>"; else echo "<option value=\"COTABATO CITY\">COTABATO CITY</option>";
                                // if ($search_province == "SARANGANI") echo "<option value=\"SARANGANI\" selected>SARANGANI</option>"; else echo "<option value=\"SARANGANI\">SARANGANI</option>";
                                // if ($search_province == "SOUTH COTABATO") echo "<option value=\"SOUTH COTABATO\" selected>SOUTH COTABATO</option>"; else echo "<option value=\"SOUTH COTABATO\">SOUTH COTABATO</option>";
                                // if ($search_province == "SULTAN KUDARAT") echo "<option value=\"SULTAN KUDARAT\" selected>SULTAN KUDARAT</option>"; else echo "<option value=\"SULTAN KUDARAT\">SULTAN KUDARAT</option>";
                             ?>

                        </select></div>
                  </div>
                  <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Municipality</label>
                      <div class="col-md-6 col-sm-6">
                        <select class="form-control" id="filter_municipality" name="filter_municipality" required>

                        </select></div>
                  </div>
                  <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Barangay</label>
                      <div class="col-md-6 col-sm-6">
                        <select class="form-control" id="filter_barangay" name="filter_barangay">

                        </select></div>
                  </div>
                  <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">LOWB</label>
                      <div class="col-md-6 col-sm-6">
                        <select class="form-control" id="filter_lowb" name="filter_lowb">
                          <option value="" selected>All</option>
                          <option value="1" >Survival (Level 1)</option>
                          <option value="2" >Subsistence (Level 2)</option>
                          <option value="3" >Self-Sufficient (Level 3)</option>

                        </select></div>
                  </div>

                  <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">SEARCH CRITERIA</label>
                      <div class="col-md-6 col-sm-6">
                        <input type="text" id="filter_criteria" name="filter_criteria" class="form-control ">
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-md-6 offset-md-3">
                          <button type="submit" class="btn btn-primary" name=apply_filter value="1">Apply Fitler</button>
                          <button type="button" class="btn btn-success" id="reset_filter">Reset</button>
                      </div>
                  </div>

              </form>
            <div class="clearfix"></div>
        </div>


        <div class="x_content">


            <?php
            $scope_FILTER = "";
            if ($SCOPE_TAG==0 AND $SCOPE <> '' AND addslashes($SCOPE) <> $search_municipality AND isset($_REQUEST['apply_filter'])) {
                $scope_FILTER = " AND `swdi`.`psgc_city`='".addslashes($SCOPE)."'";

                echo "
                  $SCOPE_TAG $SCOPE $search_municipality
                <div class=\"alert alert-danger\" role=\"alert\">
                      Ops! you are not allowed to access records of Municipalities other than $SCOPE
                </div>
                ";

            }else{
              echo "
                  <p class=\"text-muted font-13 m-b-30\">
                      Below are the list of Pantawid Pamilyang Pilipino Program beneficiaire with 2019 SWDI Scores and level of Well Being (LOWB).
                  </p>
              ";
            }

            ?>




            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Household No.</th>
                        <th>Name</th>
                        <th>Province</th>
                        <th>Municipality</th>
                        <th>Barangay</th>
                        <th>SWDI Score</th>
                        <th>LOWB</th>
                        <th>No. of intv.</th>
                        <th>Options</th>
                    </tr>
                </thead>

                <tbody id=clientlist>
                    <?php




                            $cnt=0;
                            $sql1 = "
                            SELECT
                                `swdi`.`HOUSEHOLD_ID`
                                , CONCAT(`swdi`.`FIRSTNAME`,' ', `swdi`.`LASTNAME`, ' ', `swdi`.`MIDDLENAME`) AS FULLNAME
                                , `swdi`.`psgc_province`
                                , `swdi`.`psgc_city`
                                , `swdi`.`psgc_brgy`
                                , `swdi`.`SWDI_SCORE`
                                , `swdi`.`LOWB`
                                , COUNT(`intervensions`.`interv_id`) AS INTERV_COUNT
                            FROM
                                `db_imt`.`swdi`
                                LEFT JOIN `db_imt`.`intervensions`
                                    ON (`swdi`.`HOUSEHOLD_ID` = `intervensions`.`HOUSEHOLD_ID`)
                            WHERE 1 = 1
                              $list_filter
                              $scope_FILTER
                            GROUP BY `swdi`.`LASTNAME`, `swdi`.`FIRSTNAME`, `swdi`.`MIDDLENAME`, `swdi`.`psgc_province`, `swdi`.`psgc_city`, `swdi`.`psgc_brgy`, `swdi`.`SWDI_SCORE`, `swdi`.`LOWB`, `swdi`.`psgc_city`, `swdi`.`psgc_brgy`
                            ORDER BY COUNT(`intervensions`.`interv_id`) DESC, `swdi`.`FIRSTNAME` ASC;


                            ";
                            // echo "<pre>$sql1</pre>";
                            $res_intvlist = mysqli_query($con, $sql1) or die(mysqli_error());
                            while ($r=mysqli_fetch_array($res_intvlist,MYSQLI_ASSOC)) {

                                $cnt++;
                                $HOUSEHOLD_ID = $r['HOUSEHOLD_ID'];
                                $FULLNAME = strtoupper($r['FULLNAME']);
                                $PROVINCE = $r['psgc_province'];
                                $MUNICIPALITY = $r['psgc_city'];
                                $BARANGAY = $r['psgc_brgy'];
                                $SWDI_SCORE = $r['SWDI_SCORE'];
                                $LOWB = $r['LOWB'];
                                $INTERV_COUNT =  $r['INTERV_COUNT'];

                                $btn_detail_class = "";

                                echo "
                                    <tr class=\"\">
                                        <td class=\"even gradeC\"> $HOUSEHOLD_ID</td>
                                        <td>$FULLNAME</td>
                                        <td>$PROVINCE</td>
                                        <td>$MUNICIPALITY</td>
                                        <td>$BARANGAY</td>
                                        <td>$SWDI_SCORE</td>
                                        <td>$LOWB</td>
                                        <td>$INTERV_COUNT</td>
                                        <td>

                                            <button type=\"button\" class=\"btn btn-info\" aria-label=\"Left Align\"  data-toggle=\"modal\" data-target=\"#interv_list_modal\" hhid=\"$HOUSEHOLD_ID\" id=\"btnIntervlistShowModal\">
                                              <span class=\"glyphicon glyphicon-list\" aria-hidden=\"true\"></span>
                                            </button>
                                        </td>
                                </tr>

                                ";

                            }
                            mysqli_free_result($res_intvlist);

                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    //submit interv editor
    $(document).on('click', "#btnSubmitIntv", function(e) {
        e.preventDefault();
        if (confirm('You are about to save the changes you made. Do you want to continue?')) {

            var hidden_interv_id = $('#hidden_interv_id').val();
            var hidden_hhid = $('#hidden_hhid').val().replace(/[\s\r\n]+$/, '');
            var cmbProgram = $('#cmbProgram').val();
            var numYDS = $('#numYDS').val();
            var dtDateConducted = $('#dtDateConducted').val();
            var txtTitle = $('#txtTitle').val();
            var txtIntervDescription = $('#txtIntervDescription').val();
            //var txtIntervDescription = $('#editor-one').html();

            var has_error = false;
            if (cmbProgram < 0) {
                notification_show('The following fields are required! <br> <ul><li>Compoents</li><li>Classification</li><li>Program/Service</li></ul>');
                // $('#cmbProgram').closest('div').addClass('has-error');
                // $('#cmbClassification').closest('div').addClass('has-error');
                // $('#cmbComponents').closest('div').addClass('has-error');
                has_error = true;
            // } else if (numYDS <= 0) {
            //     notification_show('YDS field is required!');
            //     has_error = true;
            } else if (txtTitle == "") {
                notification_show('Title field is required!');
                $('#txtTitle').closest('div').addClass('has-error');
                has_error = true;
            } else if (txtIntervDescription == "" > 0) {
                notification_show('Intervention field is required!');
                //$('#txtIntervDescription').closest('div').addClass('has-error');
                has_error = true;
            } else {
                //save data
                $.ajax({
                    type: 'POST',
                    url: 'proc/intervention_save.php',
                    data: {
                        subject: txtTitle,
                        details: txtIntervDescription,
                        date_conducted: dtDateConducted,
                        yds_child_count: numYDS,
                        program_id: cmbProgram,
                        HOUSEHOLD_ID: hidden_hhid,
                        interv_id: hidden_interv_id,
                        user_id: "<?=$user_id?>"
                    },
                    success: function(response) {
                        //console.log(response);
                        $('#intev_tablebody_container').html(response);
                        $('#interv_list_editor_modal').modal('hide');

                    }
                });

            }

        }

    });

    //show modal on btnIntervlistShowModal clicked
    $(document).on('click', "#btnIntervlistShowModal", function(e) {
        e.preventDefault();
        var hhid = $(this).attr('hhid');

        //load modal list;
        $('#household_id1').html(hhid);
        $('#btn_interv_list_editor_open').attr('hhid', hhid);

        //get header data
        $.ajax({
            type: 'POST',
            url: 'proc/getHouseholdInfo.php',
            data: {
                hhid: hhid
            },
            success: function(response) {
              //console.log(response)
                var r = response.split('|');
                /*
                r[0]=household_id
                r[1]=grantee
                r[2]=sex
                r[3]=birthday
                r[4]=age
                r[5]=region
                r[6]=province
                r[7]=municipality
                r[8]=barangay
                r[9]=client_status
                r[10]=ip_affiliation
                r[11]=set
                */

                $('#ih_grantee').html(r[1]);
                $('#ih_sex').html(r[2]);
                $('#ih_birthdate').html(r[3]);
                $('#ih_age').html(r[4]);
                $('#ih_region').html(r[5]);
                $('#ih_province').html(r[6]);
                $('#ih_municipality').html(r[7]);
                $('#ih_barangay').html(r[8]);
                $('#ih_hhstatus').html(r[9]);
                $('#ih_ipaffil').html(r[10]);
                $('#ih_setgroup').html(r[11]);

                //economic Sufficiency
                $('#swdi_ES1').html(r[12]);
                $('#swdi_ES2').html(r[13]);
                $('#swdi_ES3').html(r[14]);
                $('#swdi_ES4').html(r[15]);

                //health
                $('#swdi_HCS1').html(r[16]);
                $('#swdi_HCS2').html(r[17]);
                $('#swdi_NC1').html(r[18]);
                $('#swdi_NC2').html(r[19]);
                $('#swdi_WSC1').html(r[20]);
                $('#swdi_WSC2').html(r[21]);
                $('#swdi_WSC3').html(r[22]);

                //housing
                $('#swdi_HC1').html(r[23]);
                $('#swdi_HC2').html(r[24]);
                $('#swdi_HC3').html(r[25]);
                $('#swdi_HC4').html(r[26]);

                //EDUC
                $('#swdi_EC1').html(r[27]);
                $('#swdi_EC2').html(r[28]);

                //ROLE
                $('#swdi_RP1').html(r[29]);
                $('#swdi_RP2').html(r[30]);
                $('#swdi_RP3').html(r[31]);

                //FAM AWARENESS
                $('#swdi_FA1').html(r[32]);
                $('#swdi_FA2').html(r[33]);
                $('#swdi_FA3').html(r[34]);

                //SWDI RESULTS
                $('#swdi_SocAdeq').html(r[35]);
                $('#swdi_EconSuff').html(r[36]);
                $('#swdi_SWDI_SCORE').html(r[37]);
                $('#swdi_LOWB').html(r[38]);
                $('#swdi_LOWB_DESC').html(r[39]);
            }

        });

        //get table data
        $.ajax({
            type: 'POST',
            url: 'proc/get_intervention_list.php',
            data: {
                hhid: hhid
            },
            success: function(response) {
                $('#intev_tablebody_container').html(response);

            }
        });
    });

    //delete intervention
    $(document).on('click', '#btn_delete_intervention', function(e) {
        alert('Delete intervention is currently disabled! Please contact aaquinones.fo12@dswd.gov.ph for deletion requests.');
        return ;
        e.preventDefault();
        if (confirm('You are about to delete this intervention. Do you want to continue?')) {
            var tr = $(this).closest('tr');
            $.ajax({
                type: 'POST',
                url: 'proc/intervention_delete.php',
                data: {
                    interv_id: $(this).attr('interv_id')
                },
                success: function(response) {

                    if (response.indexOf("**success**") > -1) {

                        tr.fadeOut(500, function() {
                            alert(response);
                            parent.remove();
                        });
                    }

                }
            });

        }
    });

    function  notification_show(msg){
        $('#editors-notification').removeAttr('hidden');
        $('#editors-notification-container').html(msg);
    }

    //open intervention editor
    $(document).on('click', "#btn_interv_list_editor_open", function(e) {
        e.preventDefault();

        var hhid = $(this).attr('hhid');
        var inv_id = $(this).attr('interv_id');
        if (inv_id > 0) {
            //* LOAD DATA ENTRY FOR EDIT INTERVENTION
            var ctrlno = $(this).attr('ctrlno');
            var comp_id = parseInt(ctrlno.substring(0, 2));
            var subcomp_id = parseInt(ctrlno.substring(2, 4));
            var program_id = parseInt(ctrlno.substring(4, 6));
            var seq_id = parseInt(ctrlno.substring(6, 8));

            //var date_conducted = new Date($(this).closest('tr').find('td:eq(4)').text());
            var date_conducted = $(this).closest('tr').find('td:eq(4)').text();

            $('#interv_list_editor_modal_label').html('Intervention CTRL No.:' + ctrlno + ' HHID:' + hhid);

            $.ajax({
                type: 'GET',
                url: './proc/getComboData.php',
                data: {
                    tableName: "lib_comp",
                    valueMember: "comp_id",
                    displayMember: "comp_desc",
                    condition: "comp_id > 0",
                    selected: comp_id,
                },
                success: function(response) {

                    $('#cmbComponents').html(response);
                }
            });
            $.ajax({
                type: 'GET',
                url: './proc/getComboData.php',
                data: {
                    tableName: "lib_subcomp",
                    valueMember: "subcomp_id",
                    displayMember: "subcomp",
                    condition: "comp_id = " + comp_id,
                    selected: subcomp_id,
                },
                success: function(response) {

                    $('#cmbClassification').html(response);
                }
            });
            $.ajax({
                type: 'GET',
                url: './proc/getComboData.php',
                data: {
                    tableName: "lib_programs",
                    valueMember: "program_id",
                    displayMember: "program",
                    condition: "subcomp_id = " + subcomp_id,
                    selected: program_id,
                },
                success: function(response) {

                    $('#cmbProgram').html(response);
                }
            });

            //get intervention details
            $.ajax({
                type: 'GET',
                url: './proc/getInterventionDetails.php',
                data: {
                    interv_id: inv_id,
                },
                success: function(response) {
                    var arr = response.split('|');
                    /*
                    RESULTS:
                    arr[0] = subject
                    arr[1] = details
                    arr[2] = date_conducted
                    arr[3] = yds_child_count
                    arr[4] = program_id
                    arr[5] = HOUSEHOLD_ID
                    */

                    $('#numYDS').val(arr[3]);
                    $('#dtDateConducted').val(arr[2]);
                    $('#txtTitle').val(arr[0]);
                    $('#hidden_interv_id').val(inv_id);
                    $('#hidden_hhid').val(arr[5]);

                    $('#txtIntervDescription').val(arr[1]);
                    //$('#editor-one').html(arr[1]);

                }
            });

            //$("#dtDateConducted").val(date_conducted);
            //get title
            //get intervention details

        } else {
            //* LOAD DATA ENTRY FOR NEW INTERVENTION
            $('#interv_list_editor_modal_label').html('New intervention for HH#' + hhid);

            //RESET INTV INPUTS
            $('#txtIntervDescription').val('');


            //get interv component values
            $.ajax({
                type: 'GET',
                url: './proc/getComboData.php',
                data: {
                    tableName: "lib_comp",
                    valueMember: "comp_id",
                    displayMember: "comp_desc",
                    condition: "comp_id > 0",
                    selected: "-1"
                },
                success: function(response) {

                    $('#cmbComponents').html(response);
                  //  console.log(response);

                    //reset
                    $('#cmbClassification').html('<option value="-1">Select</option>;');
                    $('#cmbProgram').html('<option value="-1">Select</option>;');
                    $('#txtTitle').val('');
                    // $('#txtIntervDescription').val('');
                    $('#editor-one').html('');
                    $('#dtDateConducted').val(getCurrentDate());
                    $('#numYDS').val(0);
                    $('#hidden_interv_id').val(0);
                    $('#hidden_hhid').val(hhid);
                }
            });
        }

        //if edit mode then
        //load date entry for cmbClassification, cmbProgram
        //select the values for each drop-down objects

    });

    function getCurrentDate() {
        var d = new Date();
        var month = d.getMonth() + 1;
        var day = d.getDate();
        return d.getFullYear() + '-' + (month < 10 ? '0' : '') + month + '-' + (day < 10 ? '0' : '') + day;
    }

    //on change #cmbComponents
    $(document).on('change', "#cmbComponents", function(e) {
        e.preventDefault();
        var value = $(this).children("option:selected").val()

        //get interv component values
        $.ajax({
            type: 'GET',
            url: './proc/getComboData.php',
            data: {
                tableName: "lib_subcomp",
                valueMember: "subcomp_id",
                displayMember: "subcomp",
                condition: "comp_id = " + value,
            },
            success: function(response) {

                $('#cmbClassification').html(response);
                $('#cmbProgram').html('<option value="-1">Select</option>;');
            }
        });
    });

    //on change #cmbclassification
    $(document).on('change', "#cmbClassification", function(e) {
        e.preventDefault();
        var value = $(this).children("option:selected").val()
        $.ajax({
            type: 'GET',
            url: './proc/getComboData.php',
            data: {
                tableName: "lib_programs",
                valueMember: "program_id",
                displayMember: "program",
                condition: "subcomp_id = " + value,
                defaultValue: '',
            },
            success: function(response) {

                $('#cmbProgram').html(response);
            }
        });
    });




$( document ).ready(function() {
    //ON LOAD FILTERS
    $('#filter_lowb option[value="<?=$search_lowb?>"]').prop('selected', true);
    $('#filter_criteria').val("<?=$search_keyword ?>");
    $('#filter_region option[value="XII"]').prop('selected', true);

    $.ajax({
        type: 'GET',
        url: './proc/getComboData.php',
        data: {
            tableName: "lib_address",
            valueMember: "DISTINCT PROVINCE",
            displayMember: "PROVINCE",
            condition: "REGION = 'XII'",
            defaultValue: '',
            selected: "<?=$search_province?>"
        },
        success: function(response) {

            $('#filter_province').html(response);
        }
    });

    $.ajax({
        type: 'GET',
        url: './proc/getComboData.php',
        data: {
            tableName: "lib_address",
            valueMember: "DISTINCT MUNICIPALITY",
            displayMember: "MUNICIPALITY",
            condition: "PROVINCE = '<?=$search_province?>'",
            defaultValue: '',
            selected: "<?=$search_municipality?>"
        },
        success: function(response) {

            $('#filter_municipality').html(response);
        }
    });

    $.ajax({
        type: 'GET',
        url: './proc/getComboData.php',
        data: {
            tableName: "lib_address",
            valueMember: "DISTINCT BARANGAY",
            displayMember: "BARANGAY",
            condition: "MUNICIPALITY = '<?=$search_municipality?>'",
            defaultValue: '',
            selected: "<?=$search_barangay?>"
        },
        success: function(response) {

            $('#filter_barangay').html(response);
        }
    });


});

    //on filter submit
    $(document).on('submit','#filter_form',function(){
        var mun = $('#filter_municipality').val();
        var brgy = $('#filter_barangay').val();

        if  (!$.trim(brgy)){
            alert("Municipality and barangay are required!");
            return false;
        }
    });

    //on reset filter
    $(document).on('click','#reset_filter',function(e){
      e.preventDefault();
      $('#filter_region option[value=""]').prop('selected', true);
      $('#filter_province').html('');
      $('#filter_municipality').html('');
      $('#filter_barangay').html('');
      $('#filter_lowb option[value=""]').prop('selected', true);
      $('#filter_criteria').val('');

    });



    //on change #filter_region
    $(document).on('change', "#filter_region", function(e) {
        e.preventDefault();
        var value = $(this).children("option:selected").val()

        $.ajax({
            type: 'GET',
            url: './proc/getComboData.php',
            data: {
                tableName: "lib_address",
                valueMember: "DISTINCT PROVINCE",
                displayMember: "PROVINCE",
                condition: "REGION = '"+value+"'",
                defaultValue: '',
            },
            success: function(response) {

                $('#filter_province').html(response);
                $('#filter_municipality').html('');
                $('#filter_barangay').html('');
            }
        });
    });

    //on change #filter_province
    $(document).on('change', "#filter_province", function(e) {
        e.preventDefault();
        var value = $(this).children("option:selected").val()

        $.ajax({
            type: 'GET',
            url: './proc/getComboData.php',
            data: {
                tableName: "lib_address",
                valueMember: "DISTINCT MUNICIPALITY",
                displayMember: "MUNICIPALITY",
                condition: "PROVINCE = '"+value+"'",
                defaultValue: '',
            },
            success: function(response) {

                $('#filter_municipality').html(response);
                $('#filter_barangay').html('');
            }
        });
    });

    //on change #filter_barangay
    $(document).on('change', "#filter_municipality", function(e) {
        e.preventDefault();
        var value = $(this).children("option:selected").val()
        //value = value.replace("'","\\'")
        $.ajax({
            type: 'GET',
            url: './proc/getComboData.php',
            data: {
                tableName: "lib_address",
                valueMember: "BARANGAY",
                displayMember: "BARANGAY",
                condition: "MUNICIPALITY = '"+value+"'",
                defaultValue: '',
            },
            success: function(response) {

                $('#filter_barangay').html(response);
            }
        });
    });


</script>

<div class="modal fade interv_list_modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id=interv_list_modal>
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body" id="interv_list_modal_body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>List of Interventions</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    <li><a class="close" data-dismiss="modal"><i class="fa fa-close"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">

                                <section class="content invoice">
                                    <!-- title row -->
                                    <!--div class="row"-->

                                        <div class="  invoice-header">
                                            <h2>
                                                 <div class="row">
                                                    <div class="col-9"> <i class="glyphicon glyphicon-folder-open"></i>&nbsp;<span id=household_id1></span></div>
                                                    <div class="col-3">
                                                        <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#interv_list_editor_modal" id=btn_interv_list_editor_open hhid="" interv_id="0">
                                                          <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span> New Intervention
                                                        </button>
                                                    </div>
                                                 </div>
                                              </h2>
                                        </div>
                                        <!-- /.col -->
                                    <!--/div-->
                                    <!-- info row -->
                                    <div class="row invoice-info">
                                        <div class="col-sm-3 invoice-col">
                                            HOUSEHOLD INFORMATION
                                            <hr>
                                            <address>
                                                  <strong>Grantee: </strong> <span id="ih_grantee"></span>
                                                  <br><b>Sex: </b> <span id="ih_sex"></span>
                                                  <br><b>Date of Birth: </b> <span id="ih_birthdate"></span>
                                                  <br><b>Age: </b> <span id="ih_age"></span>
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 invoice-col">
                                            <br>
                                            <hr>
                                            <address>
                                                  <strong>Address</strong>
                                                  <br><span id="ih_barangay"></span>,
                                                  <br><span id="ih_municipality"></span>
                                                  <br><span id="ih_province"></span>

                                              </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 invoice-col">
                                            <br>
                                            <hr>
                                            <b>Household Status:</b> <span id="ih_hhstatus"></span>
                                            <br><b>IP Affiliation:</b> <span id="ih_ipaffil"></span>
                                            <br><b>Set-Group:</b> <span id="ih_setgroup"></span>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 invoice-col">
                                            <br>
                                            <hr>
                                            <b>Level of Well-being:</b>
                                            <br>Economic Sufficiency: <span id="swdi_EconSuff"></span>
                                            <br>Social Adequacy: <span id="swdi_SocAdeq"></span>
                                            <br>Total Score: <span id="swdi_SWDI_SCORE"></span>
                                            <br>LOWB: <span id="swdi_LOWB"></span>
                                            <br>Description: <span id="swdi_LOWB_DESC"></span>

                                        </div>
                                        <!-- /.col -->

                                    </div>
                                    <!-- /.row -->
                                    <!-- ========================================================================= -->
                                    <!-- info row -->

                                    <div class="row invoice-info">
                                        <div class="col-sm-3 invoice-col">
                                            SWDI SCORE DETAILS
                                            <hr>
                                            <address>
                                                  <strong>Economic Sufficiency (ES) </strong>
                                                  <br>Employable Skills (ES1): <span id="swdi_ES1"></span>
                                                  <br>Employment (ES2): <span id="swdi_ES2"></span>
                                                  <br>Income (ES3): <span id="swdi_ES3"></span>
                                                  <br>Social Security (ES4): <span id="swdi_ES4"></span>

                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 invoice-col">
                                            <br>
                                            <hr>
                                            <address>
                                              <strong>HEALTH (SA1):</strong>
                                              <br>Health Services (HCS1): <span id="swdi_HCS1"></span>
                                              <br>Health Condition (HCS2): <span id="swdi_HCS2"></span>
                                              <br>Meals (NC1): <span id="swdi_NC1"></span>
                                              <br>Nutritional Status (NC2): <span id="swdi_NC2"></span>
                                              <br>Drinking Water (WS1): <span id="swdi_WSC1"></span>
                                              <br>Toilet (WS2): <span id="swdi_WSC2"></span>
                                              <br>Garbage (WS3): <span id="swdi_WSC3"></span>
                                              </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 invoice-col">
                                          <br>
                                          <hr>
                                          <address>
                                            <strong>HOUSING (SA2):</strong>
                                            <br>Roof (HC1):<span id="swdi_HC1"></span>
                                            <br>Outer Walls (HC2):<span id="swdi_HC2"></span>
                                            <br>Tenure Status (HC3):<span id="swdi_HC3"></span>
                                            <br>Lightning (HC4):<span id="swdi_HC4"></span>
                                            <br><br>
                                            <strong>EDUCATION (SA3):</strong>
                                            <br>Literacy (EC1):<span id="swdi_EC1"></span>
                                            <br>Enrolment (EC2):<span id="swdi_EC2"></span>
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 invoice-col">
                                          <br>
                                          <hr>
                                          <address>
                                            <strong>ROLE PERFORMANCE (SA4):</strong>
                                            <br>Family Activities (RP1) :<span id="swdi_RP1"></span>
                                            <br>Problems (RP2):<span id="swdi_RP2"></span>
                                            <br>Organizations (RP3):<span id="swdi_RP3"></span>

                                            <br><br>

                                            <strong>FAMILY AWARENESS (SA5)</strong>
                                            <br>Children (FA1):<span id="swdi_FA1"></span>
                                            <br>Gender (FA2):<span id="swdi_FA2"></span>
                                            <br>Disaster (FA3):<span id="swdi_FA3"></span>

                                          </address>
                                        </div>
                                        <!-- /.col -->


                                    </div>
                                    <!-- /.row -->
                                    <!-- ======================================================================== -->


                                    <!-- Table row -->
                                    <div class="row">
                                        <div class="  table">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>CTRL No.</th>
                                                        <th>Program</th>
                                                        <th>Componet</th>
                                                        <th style="width: 39%">Description</th>
                                                        <th>Date Conducted</th>
                                                        <th style="width: 150px">Options</th>
                                                    </tr>
                                                </thead>
                                                <tbody id=intev_tablebody_container>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <!-- this row will not appear when printing -->
                                    <div class="row no-print">
                                        <div class=" ">
                                            <!--button class="btn btn-default" id="inv_print"><i class="fa fa-print"></i> Print</button-->
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div> <!-- /.x_panel -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /row -->
            </div> <!-- /.modal-body -->
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog modal-xl -->
</div> <!-- /.interv_list_modal -->

<!-- INTERVENTION EDITOR Modal  -->
<div class="modal fade bd-example-modal-lg" id="interv_list_editor_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="interv_list_editor_modal_label"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="alert alert-warning alert-dismissible fade show " role="alert" id="editors-notification" hidden>
                      <font color="black">
                        <strong>Notice!</strong> <span id="editors-notification-container"></span>
                      </font>
                      <!--button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button-->
                    </div>
                    <form>
                        <div class="form-group">
                            <input type="hidden" name="hidden_interv_id" id="hidden_interv_id" value="0">
                            <input type="hidden" name="hidden_hhid" id="hidden_hhid" value="">
                            <label for="cmbComponents" class="control-label has-error">COMPONENTS</label>
                            <select id="cmbComponents" name="cmbComponents" required="required" class="select form-control">
                                <option value="-1">Select</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cmbClassification" class="control-label">CLASSIFICATION</label>
                            <select id="cmbClassification" name="cmbClassification" class="select form-control" required="required">
                                <option value="-1">Select</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cmbProgram" class="control-label">PROGRAM / SERVICE</label>
                            <select id="cmbProgram" name="cmbProgram" class="select form-control" required="required">
                                <option value="-1">Select</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="numYDS" class="control-label">YOUTH DEVELOPMENT SESSION (No. of children attended)</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <input id="numYDS" name="numYDS" type="number" class="form-control" value="0">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dtDateConducted" class="control-label">Date Conducted</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input id="dtDateConducted" name="dtDateConducted" type="date" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtTitle" class="control-label">Title</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-amazon"></i>
                                </div>
                                <input id="txtTitle" name="txtTitle" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtIntervDescription" class="control-label">Intervention Details</label>
                            <textarea id="txtIntervDescription" name="txtIntervDescription" cols="40" rows="5" class="form-control" aria-describedby="txtIntervDescriptionHelpBlock" required="required"></textarea>
                            <span id="txtIntervDescriptionHelpBlock" class="help-block">State the comprehensive intervention</span>
                        </div>

                        <!--div class="form-group">
                            <label for="txtIntervDescription" class="control-label">Intervention Details</label>

                            <div class="x_content">
                              <div id="alerts"></div>
                              <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                                <div class="btn-group">
                                  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                  </ul>
                                </div>

                                <div class="btn-group">
                                  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                    <li>
                                      <a data-edit="fontSize 5">
                                        <p style="font-size:17px">Huge</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a data-edit="fontSize 3">
                                        <p style="font-size:14px">Normal</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a data-edit="fontSize 1">
                                        <p style="font-size:11px">Small</p>
                                      </a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="btn-group">
                                  <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                  <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                  <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                  <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                </div>

                                <div class="btn-group">
                                  <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                  <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                  <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                  <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                </div>

                                <div class="btn-group">
                                  <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                  <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                  <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                  <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                                </div>

                                <div class="btn-group">
                                  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                                  <div class="dropdown-menu input-append">
                                    <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                    <button class="btn" type="button">Add</button>
                                  </div>
                                  <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                                </div>

                                <div class="btn-group">
                                  <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                  <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                </div>

                                <div class="btn-group">
                                  <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                  <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                </div>
                              </div>
                              <div id="editor-one" class="editor-wrapper"></div>
                              <textarea name="descr" id="descr" style="display:none;"></textarea>
                              <br />
                              <div class="ln_solid"></div>
                            </div>


                        </div -->

                        <div class="form-group">
                            <button name="submit" type="submit" class="btn btn-primary" id=btnSubmitIntv name=btnSubmitIntv>Save</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- /INTERVENTION EDITOR Modal  -->

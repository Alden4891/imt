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
    // $search_criteria  = "";


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
            <form class="" action="<?=site_url('interventions')?>" method="post" novalidate="" id="filter_form" name="filter_form">
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
            // $scope_FILTER = "";
            // if ($SCOPE_TAG==0 AND addslashes($SCOPE) <> 'XII' AND addslashes($SCOPE) <> $search_municipality AND isset($_REQUEST['apply_filter'])) {
            //     $scope_FILTER = " AND `swdi`.`psgc_city`='".addslashes($SCOPE)."'";

            //     echo "
            //     <div class=\"alert alert-danger\" role=\"alert\">
            //           Ops! you are not allowed to access records of Municipalities other than $SCOPE
            //     </div>
            //     ";
            // }elseif ($SCOPE_TAG==1 AND addslashes($SCOPE) <> 'XII' AND addslashes($SCOPE) <> $search_province AND isset($_REQUEST['apply_filter'])) {

            //   $scope_FILTER = " AND `swdi`.`psgc_province`='".addslashes($SCOPE)."'";
            //   echo "
            //   <div class=\"alert alert-danger\" role=\"alert\">
            //         Ops! you are not allowed to access records of Province other than $SCOPE
            //   </div>
            //   ";

            // }else{
            //   echo "
            //       <p class=\"text-muted font-13 m-b-30\">
            //           Below are the list of Pantawid Pamilyang Pilipino Program beneficiaire with 2019 SWDI Scores and level of Well Being (LOWB).
            //       </p>
            //   ";
            // }

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

                            foreach($interventions as $intervention) {

                                echo "
                                    <tr class=\"\">
                                        <td class=\"even gradeC\"> $intervention->HOUSEHOLD_ID</td>
                                        <td>$intervention->FIRST_NAME $intervention->MID_NAME $intervention->LAST_NAME </td>
                                        <td>$intervention->PROVINCE</td>
                                        <td>$intervention->MUNICIPALITY</td>
                                        <td>$intervention->BARANGAY</td>
                                        <td>$intervention->SWDI_Score</td>
                                        <td>$intervention->LOWB</td>
                                        <td>$intervention->INTERV_COUNT</td>
                                        <td>

                                            <button type=\"button\" class=\"btn btn-info\" aria-label=\"Left Align\"  data-toggle=\"modal\" data-target=\"#interv_list_modal\" hhid=\"$intervention->HOUSEHOLD_ID\" id=\"btnIntervlistShowModal\">
                                              <span class=\"glyphicon glyphicon-list\" aria-hidden=\"true\"></span>
                                            </button>
                                        </td>
                                </tr>

                                ";

                            }

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
                    url: "<?=site_url('interventions/intervention_save')?>",
                    data: {
                        subject: txtTitle,
                        details: txtIntervDescription,
                        date_conducted: dtDateConducted,
                        yds_child_count: numYDS,
                        program_id: cmbProgram,
                        HOUSEHOLD_ID: hidden_hhid,
                        interv_id: hidden_interv_id,
                        user_id: "<?=$this->session->userdata('user_id')?>"
                    },
                    success: function(response) {
                        // alert(response);
                        console.log(response);
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
            url: '<?=site_url('interventions/getHouseholdInfo')?>',
            data: {
                hhid: hhid
            },
            success: function(response) {
              var obj = JSON.parse(response);
              //console.log(obj);

                $('#ih_grantee').html(obj.GRANTEE);
                $('#ih_sex').html(obj.SEX);
                $('#ih_birthdate').html(obj.BIRTHDAY);
                $('#ih_age').html(obj.AGE);
                $('#ih_region').html(obj.REGION);
                $('#ih_province').html(obj.PROVINCE);
                $('#ih_municipality').html(obj.MUNICIPALITY);
                $('#ih_barangay').html(obj.BARANGAY);
                $('#ih_hhstatus').html(obj.CLIENT_STATUS);
                $('#ih_ipaffil').html(obj.IP_AFFILIATION);
                $('#ih_setgroup').html(obj.SET);

                //economic Sufficiency
                $('#swdi_ES1').html(obj.ES1);
                $('#swdi_ES2').html(obj.ES2);
                $('#swdi_ES3').html(obj.ES3);
                $('#swdi_ES4').html(obj.ES4);

                //health
                $('#swdi_HCS1').html(obj.HCS1);
                $('#swdi_HCS2').html(obj.HCS2);
                $('#swdi_NC1').html(obj.NC1);
                $('#swdi_NC2').html(obj.NC2);
                $('#swdi_WSC1').html(obj.WSC1);
                $('#swdi_WSC2').html(obj.WSC2);
                $('#swdi_WSC3').html(obj.WSC3);

                //housing
                $('#swdi_HC1').html(obj.HC1);
                $('#swdi_HC2').html(obj.HC2);
                $('#swdi_HC3').html(obj.HC3);
                $('#swdi_HC4').html(obj.HC4);

                //EDUC
                $('#swdi_EC1').html(obj.EC1);
                $('#swdi_EC2').html(obj.EC2);

                //ROLE
                $('#swdi_RP1').html(obj.RP1);
                $('#swdi_RP2').html(obj.RP2);
                $('#swdi_RP3').html(obj.RP3);

                //FAM AWARENESS
                $('#swdi_FA1').html(obj.FA1);
                $('#swdi_FA2').html(obj.FA2);
                $('#swdi_FA3').html(obj.FA3);

                //SWDI RESULTS
                $('#swdi_SocAdeq').html(obj.SocAdeq);
                $('#swdi_EconSuff').html(obj.EconSuff);
                $('#swdi_SWDI_SCORE').html(obj.SWDI_Score);
                $('#swdi_LOWB').html(obj.LOWB);
                $('#swdi_LOWB_DESC').html('');
            }

        });

        
        $.ajax({
            type: 'POST',
            url: '<?=site_url('interventions/get_intervention_list')?>',
            data: {
                hhid: hhid
            },
            success: function(response) {
                // console.log(response);
                $('#intev_tablebody_container').html(response);

            }
        });
    });

    //delete intervention
    $(document).on('click', '#btn_delete_intervention', function(e) {
        e.preventDefault();
        if (confirm('You are about to delete this intervention. Do you want to continue?')) {
            var tr = $(this).closest('tr');
            $.ajax({
                type: 'POST',
                url: '<?=site_url('interventions/intervention_delete')?>',
                data: {
                    interv_id: $(this).attr('interv_id'),
                    user_id: '<?=$this->session->userdata('user_id')?>'
                },
                success: function(response) {
                    var obj = JSON.parse(response);
                    if (obj.result == 1) {
                        tr.fadeOut(500, function() {
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
                type: 'POST',
                url: 'metadata/get_dropdown_options',
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
                type: 'POST',
                url: 'metadata/get_dropdown_options',
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
                type: 'POST',
                url: 'metadata/get_dropdown_options',
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
                type: 'POST',
                url: '<?=site_url('interventions/getInterventionDetails')?>',
                data: {
                    interv_id: inv_id,
                },
                success: function(response) {
                    // console.log(response);
                    var obj = JSON.parse(response);
                    // var arr = response.split('|');
                    /*
                    RESULTS:
                    arr[0] = subject
                    arr[1] = details
                    arr[2] = date_conducted
                    arr[3] = yds_child_count
                    arr[4] = program_id
                    arr[5] = HOUSEHOLD_ID
                    */

                    $('#numYDS').val(obj.yds_child_count);
                    $('#dtDateConducted').val(obj.date_conducted);
                    $('#txtTitle').val(obj.subject);
                    $('#hidden_interv_id').val(inv_id);
                    $('#hidden_hhid').val(obj.HOUSEHOLD_ID);
                    $('#txtIntervDescription').val(obj.details);

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
                type: 'POST',
                url: 'metadata/get_dropdown_options',
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
            type: 'POST',
            url: 'metadata/get_dropdown_options',
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
            type: 'POST',
            url: 'metadata/get_dropdown_options',
            data: {
                tableName: "lib_programs",
                valueMember: "program_id",
                displayMember: "program",
                condition: "subcomp_id = " + value,
               // defaultValue: '',
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
        type: 'POST',
        url: '<?=site_url('metadata/get_dropdown_options')?>',
        data: {
            tableName: "lib_address",
            valueMember: "DISTINCT PROVINCE",
            displayMember: "PROVINCE",
            condition: "REGION = 'XII'",
            defaultValue: '',
            selected: "<?=$search_province?>"
        },
        success: function(response) {
            // console.log(response);
            // prompt(response,response);

            $('#filter_province').html(response);
        }
    });

    $.ajax({
        type: 'POST',
        url: '<?=site_url('metadata/get_dropdown_options')?>',
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
        type: 'POST',
        url: '<?=site_url('metadata/get_dropdown_options')?>',
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
            type: 'POST',
            url: '<?=site_url('metadata/get_dropdown_options')?>',
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
            type: 'POST',
            url: 'metadata/get_dropdown_options',
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
            type: 'POST',
            url: 'metadata/get_dropdown_options',
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
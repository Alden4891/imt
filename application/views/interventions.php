
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
                  <span class="section">Filter <input type="button" class="btn btn-success btn-sm pull-right" value="New Intervention" id="new_interv"> </span> 
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
                            <?=(isset($filtered_province_option_data)?$filtered_province_option_data:"")?>
                        </select></div>
                  </div>
                  <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Municipality</label>
                      <div class="col-md-6 col-sm-6">
                        <select class="form-control" id="filter_municipality" name="filter_municipality" required>
                            <?=(isset($filtered_municipality_option_data)?$filtered_municipality_option_data:"")?>

                        </select></div>
                  </div>
                  <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Barangay</label>
                      <div class="col-md-6 col-sm-6">
                        <select class="form-control" id="filter_barangay" name="filter_barangay">
                            <?=(isset($filtered_barangay_option_data)?$filtered_barangay_option_data:"")?>

                        </select></div>
                  </div>
                  <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">LOWB</label>
                      <div class="col-md-6 col-sm-6">
                        <select class="form-control" id="filter_lowb" name="filter_lowb">
                          <option value="">All</option>
                          <option value="1" <?=$filtered_lowb_option_data==1?"selected":"";?>    >Survival (Level 1)</option>
                          <option value="2" <?=$filtered_lowb_option_data==2?"selected":"";?>    >Subsistence (Level 2)</option>
                          <option value="3" <?=$filtered_lowb_option_data==3?"selected":"";?>    >Self-Sufficient (Level 3)</option>
                        </select></div>
                  </div>



                  <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">SEARCH CRITERIA</label>
                      <div class="col-md-6 col-sm-6">
                        <input type="text" id="filter_criteria" name="filter_criteria" class="form-control " value="<?=@$filtered_criteria_option_data;?>" >
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

$( document ).ready(function() {
        $(document).on('click','#new_interv',function(e){
        e.preventDefault();

        Swal.fire({
          title: "Household ID",
          input: "text",
          inputAttributes: {
            autocapitalize: "off"
          },
          showCancelButton: true,
          confirmButtonText: "Look up",
          // showLoaderOnConfirm: true,
          allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
          if (result.isConfirmed) {

                $.ajax({
                    type: 'POST',
                    url: "pantawid/is_exists",
                    data: {
                        hhid: `${result.value}`,
                    },
                    success: function(response) {
                        var jsonObj = JSON.parse(response);
                        if (jsonObj.is_exists) {
                            // alert(jsonObj.is_exists);
                            $('#interv_list_modal').modal('show');
                            show_interventions(jsonObj.get_current_hhid);
                        }else{
                            Swal.fire({
                              icon: "error",
                              title: "Oops...",
                              text: "Household does not exists!",
                            });                        }
                    }
                });




            // Swal.fire({
            //   title: `weeeeeeeee`,
            //   imageUrl: './'
            // });
          }
        });
    });

    $(document).on('change','#cmbProgram',function(e){
        e.preventDefault();
        if ($(this).val() == 1046) { //YDS
            $('.yds-from-group').stop().slideDown();
        } else {
            $('.yds-from-group').stop().slideUp();
        }
    });
    //submit interv editor
    $(document).on('click', "#btnSubmitIntv", function(e) {
        e.preventDefault();

        Swal.fire({
          title: "Are you sure?",
          text: "You are about to save the changes you made. Do you want to continue?",
          icon: "question",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes"
        }).then((result) => {
          if (result.isConfirmed) {

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
                Swal.fire({icon: "info",title: "The following field(s) are required!",html: '<div style="text-align: left;"> <ul><li>Compoents</li><li>Classification</li><li>Program/Service</li></ul></div>'});
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
                        // console.log(response);
            
                        Swal.fire({
                          title: "Saved!",
                          text: "Saved successfully?",
                          icon: "success"
                        });

                        $('#intev_tablebody_container').html(response);
                        $('#interv_list_editor_modal').modal('hide');
                        $('#interv_list_modal').focus();


                    }
                });

            }


          }
        });


        // if (confirm('You are about to save the changes you made. Do you want to continue?')) {
        // } //CONFIM

    });

    function set_inv_list_swdi_values(key,value){
        
        if (key == "#swdi_NC2" && value == 0) {
             $(key).html('N/A');
            return;
        }

        if (value <= 1.82 && value > 0) {
            $(key).parent().addClass('survival');
        }else if (value >= 2.83) {
            $(key).parent().addClass('self-sufficient');
        }else if (value >= 1.83) {
            $(key).parent().addClass('subsistence');
        }
        $(key).html(value);
    }

    function show_interventions(hhid) {

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
              // console.log(obj);

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
                set_inv_list_swdi_values('#swdi_ES1',obj.ES1);
                set_inv_list_swdi_values('#swdi_ES2',obj.ES2);
                set_inv_list_swdi_values('#swdi_ES3',obj.ES3);
                set_inv_list_swdi_values('#swdi_ES4',obj.ES4);

                //health
                set_inv_list_swdi_values('#swdi_HCS1',obj.HCS1);
                set_inv_list_swdi_values('#swdi_HCS2',obj.HCS2);
                set_inv_list_swdi_values('#swdi_NC1',obj.NC1);
                set_inv_list_swdi_values('#swdi_NC2',obj.NC2);

                set_inv_list_swdi_values('#swdi_WSC1',obj.WCS1);
                set_inv_list_swdi_values('#swdi_WSC2',obj.WCS2);
                set_inv_list_swdi_values('#swdi_WSC3',obj.WCS3);

                //housing
                set_inv_list_swdi_values('#swdi_HC1',obj.HC1);
                set_inv_list_swdi_values('#swdi_HC2',obj.HC2);
                set_inv_list_swdi_values('#swdi_HC3',obj.HC3);
                set_inv_list_swdi_values('#swdi_HC4',obj.HC4);

                //EDUC
                set_inv_list_swdi_values('#swdi_EC1',obj.EC1);
                set_inv_list_swdi_values('#swdi_EC2',obj.EC2);

                //ROLE Performance Component
                set_inv_list_swdi_values('#swdi_RP1',obj.RP1);
                set_inv_list_swdi_values('#swdi_RP2',obj.RP2);
                set_inv_list_swdi_values('#swdi_RP3',obj.RP3);

                //FAM AWARENESS
                set_inv_list_swdi_values('#swdi_FA1',obj.FA1);
                set_inv_list_swdi_values('#swdi_FA2',obj.FA2);
                set_inv_list_swdi_values('#swdi_FA3',obj.FA3);

                //SWDI RESULTS
                set_inv_list_swdi_values('#swdi_SocAdeq',obj.SocAdeq);
                set_inv_list_swdi_values('#swdi_EconSuff',obj.EconSuff);
                set_inv_list_swdi_values('#swdi_SWDI_SCORE',obj.SWDI_Score);
                set_inv_list_swdi_values('#swdi_LOWB',obj.LOWB);

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

    }

    //show modal on btnIntervlistShowModal clicked
    $(document).on('click', "#btnIntervlistShowModal", function(e) {
        e.preventDefault();
        var hhid = $(this).attr('hhid');
        show_interventions(hhid);

    });

    //delete intervention
    $(document).on('click', '#btn_delete_intervention', function(e) {
        e.preventDefault();
        var tr = $(this).closest('tr');
        Swal.fire({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, delete it!"
        }).then((result) => {
          if (result.isConfirmed) {

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
    });

    function  notification_show(msg){
        // $('#editors-notification').removeAttr('hidden');
        // $('#editors-notification-container').html(msg);

        Swal.fire({icon: "info",title: "Incomplete input!",text: msg});


    }

    //on-open intervention editor
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
                url: 'metadata/get_options_components/'+comp_id,
                success: function(response) {
                    $('#cmbComponents').html(response);
                }
            });
            $.ajax({
                type: 'POST',
                url: 'metadata/get_options_subcomponents/'+comp_id+'/'+subcomp_id,
                success: function(response) {
                    $('#cmbClassification').html(response);
                }
            });
            $.ajax({
                type: 'POST',
                url: 'metadata/get_options_programs/'+subcomp_id+'/'+program_id,
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
                url: 'metadata/get_options_components/',
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
        var comp_id = $(this).children("option:selected").val()

        //get interv component values
        $.ajax({
            type: 'POST',
            url: 'metadata/get_options_subcomponents/'+comp_id,
            success: function(response) {

                $('#cmbClassification').html(response);
                $('#cmbProgram').html('<option value="-1">Select</option>;');
            }
        });
    });

    //on change #cmbclassification
    $(document).on('change', "#cmbClassification", function(e) {
        e.preventDefault();
        var subcomp_id = $(this).children("option:selected").val()
        $.ajax({
            type: 'POST',
            url: 'metadata/get_options_programs/'+subcomp_id,
            success: function(response) {

                $('#cmbProgram').html(response);
            }
        });
    });

    //ON LOAD FILTERS
    $('#filter_region option[value="XII"]').prop('selected', true);

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

    function filter_load_provinces(value = ''){

        $.ajax({
            type: 'POST',
            url: '<?=site_url('metadata/get_options_provinces/')?>'+value,
            success: function(response) {
                $('#filter_province').html(response);
                $('#filter_municipality').html('');
                $('#filter_barangay').html('');
            }
        });
    }
    if ("<?=$filtered?>" == "0") {
        filter_load_provinces();
    }

    //on change #filter_region
    $(document).on('change', "#filter_region", function(e) {
        e.preventDefault();
        var value = $(this).children("option:selected").val()
        filter_load_provinces(value);

    });

    function customEncodeURIComponent(str) {
        return encodeURIComponent(str).replace(/[!'()*]/g, function(c) {
            return '%' + c.charCodeAt(0).toString(16);
        });
    }

    //on change #filter_province
    $(document).on('change', "#filter_province", function(e) {
        e.preventDefault();
        var value = customEncodeURIComponent($(this).children("option:selected").val());

        $.ajax({
            type: 'POST',
            url: 'metadata/get_options_municipalities/'+value+'/',
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
            url: 'metadata/get_options_barangay/'+value,
            success: function(response) {
                $('#filter_barangay').html(response);
            }
        });
    });


    //--------------------------------------------------------------------------------
    // Prevent scrolling on the main page when the first modal is open
    $('#interv_list_modal').on('show.bs.modal', function (e) {
        $('body').css('overflow', 'hidden');
        // Disable scrolling on the modal itself
        $('#interv_list_modal').css('overflow-y', 'auto');
    });

    // Re-enable scrolling on the main page when the first modal is closed
    $('#interv_list_modal').on('hidden.bs.modal', function (e) {
        $('body').css('overflow', 'auto');
    });

    // Re-enable scrolling on the #interv_list_modal when the second modal is closed
    $('#interv_list_editor_modal').on('hidden.bs.modal', function (e) {
        // $('#interv_list_modal').css('overflow-y', 'auto');
        $('#interv_list_modal').focus();
    });
    //---------------------------------------------------------------------------

}); //on document ready



</script>

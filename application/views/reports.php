
<div class="row">


              <div class="col-md-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>REPORTS <small></small></h2>
                    <!--ul class="nav navbar-right panel_toolbox">
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
                    </ul-->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form class="form-horizontal form-label-left" target="_blank" method="post" action="reports/download">
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">REGION</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select class="select2_single form-control" tabindex="-1" id=optionRegion name="optionRegion">
                            <!-- <option value='-1'>Select</option> -->
                            <option value="XII" selected>XII</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">PROVINCE</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select class="select2_single form-control" tabindex="-1" id=optionProvince name="optionProvince">
                            <option value='-1' selected>Select</option>
							<option value='COTABATO (NORTH COTABATO)'>COTABATO (NORTH COTABATO)</option>
							<option value='SOUTH COTABATO'>SOUTH COTABATO</option>
							<option value='SULTAN KUDARAT'>SULTAN KUDARAT</option>
							<option value='SARANGANI'>SARANGANI</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">MUNICIPALITY</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select class="select2_single form-control" tabindex="-1" id=optionMunicipality name="optionMunicipality">
                            <option value='-1'>Select</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">BARANGAY</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select class="select2_single form-control" tabindex="-1" id=optionBarangay name=optionBarangay>
                            <option value='-1'>Select</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">TYPE OF REPORTS</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select class="select2_group form-control" id=optionReportType name="optionReportType">
                            <optgroup label="Econimic Sufficiency">
                              <option value="imt_es">Summary of Intervention Conducted for HH beneficiaries for economic soffiencies</option>
                            </optgroup>
                            <optgroup label="Social Adequacy">
                              <option value="imt_sa">Summary of Intervention Conducted for HH beneficiaries for social adequacy</option>
                              <!-- <option value="imt_sa_ml">Masterlist of Intervention Provided</option> -->
                            </optgroup>
                            <optgroup label="Other Internal interventions (DSWD)">
                              <option value="imt_internal">Summary of Intervention provided by DSWD</option>
                              <!-- <option value="imt_internal_ml">Masterlist of Intervention Provided</option> -->
                            </optgroup>
                            <optgroup label="External Interventions">
                              <option value="imt_external1">Summary of Intervention provided by other government agencies</option>
                              <!-- <option value="imt_external1_ml">Masterlist of Intervention Provided</option> -->
                            </optgroup>
                            <optgroup label="Other interventions (LGUs, CSOs/NGOs)">
                              <option value="imt_external2">Summary of Intervention provided by LGUs, CSO/NGOs, etc.</option>
                              <!-- <option value="imt_external2_ml">Masterlist of Intervention Provided</option> -->
                            </optgroup>

                            <optgroup label="Masterlist">
                              <option value="imt_masterlist">Masterlist of Intervention Provided</option>
                            </optgroup>

                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                          <!-- <button type="submit" class="btn btn-secondary" disabled id="btnDownloadInterv">Download</button> -->
                          <button type="submit" class="btn btn-secondary" id="btnDownloadInterv">Download</button>

                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>



            </div>



<script>
$(document).ready(function(e) {




    //on #optionProvince changed
    $(document).on('change', "#optionProvince", function(e) {
        e.preventDefault();
        var value = $(this).children("option:selected").val()
        var scope_tag = "<?=$SCOPE_TAG?>";
        var scope = "<?=($SCOPE)?>".replace("'","\\'");

        // if (scope_tag==1) {
        //   if (value != -1 && scope==value) {
        //     $('#btnDownloadInterv').removeAttr('disabled');
        //     $('#btnDownloadInterv').removeClass('btn-success');
        //     $('#btnDownloadInterv').addClass('btn-info');
        //   }else{
        //       $('#btnDownloadInterv').attr('disabled',true);
        //       $('#btnDownloadInterv').addClass('btn-secondary');
        //       $('#btnDownloadInterv').removeClass('btn-info');
        //   }
        // }

        $.ajax({
            type: 'POST',
            url: 'reports/get_municipalities',
            data: {
                province: value,
            },
            success: function(response) {
            	// console.log(response);
                $('#optionMunicipality').html(response);
                $('#optionBarangay').html("<option value='-1' selected>Select</option>");
            }
        });




    });

    //on #optionMunicipality changed
    $(document).on('change', "#optionMunicipality", function(e) {
        e.preventDefault();
        var value = $(this).children("option:selected").val()
        var scope_tag = "<?=$SCOPE_TAG?>";
        var scope = "<?=($SCOPE)?>".replace("'","\\'");


        // if (scope_tag == 0) {
        //     if (value != -1 && scope == value) {
        //       $('#btnDownloadInterv').removeAttr('disabled');
        //       $('#btnDownloadInterv').removeClass('btn-success');
        //       $('#btnDownloadInterv').addClass('btn-info');
        //     }else{
        //         $('#btnDownloadInterv').attr('disabled',true);
        //         $('#btnDownloadInterv').addClass('btn-secondary');
        //         $('#btnDownloadInterv').removeClass('btn-info');
        //     }
        // }

        $.ajax({
            type: 'POST',
            url: 'reports/get_barangays',
            data: {
                municipality: value,
            },
            success: function(response) {
            	// console.log(response);
                $('#optionBarangay').html(response);
            }
        });


    });


});

    
</script>


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

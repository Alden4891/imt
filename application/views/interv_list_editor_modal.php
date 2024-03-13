
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

                        <div class="form-group yds-from-group" style="display: none;">
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

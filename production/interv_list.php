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
        <div class="x_content">
            <p class="text-muted font-13 m-b-30">
                Below are the list of Pantawid Pamilyang Pilipino Program beneficiaire with 2019 SWDI Scores and level of Well Being (LOWB).
            </p>
            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Household No.</th>
                        <th>Name</th>
                        <th>Sex</th>
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
                            $res_intvlist = mysqli_query($con, "

                                SELECT
                                  s.HOUSEHOLD_ID
                                , TRIM(UPPER(CONCAT(r.FIRST_NAME,' ', r.MID_NAME, ' ', r.LAST_NAME, ' ', r.EXT_NAME))) AS Fullname
                                , r.SEX
                                , r.PROVINCE
                                , r.MUNICIPALITY
                                , r.BARANGAY    
                                , s.SWDI_SCORE
                                , s.LOWB
                                , COUNT(i.interv_id) AS INTERV_COUNT    
                                FROM
                                `db_imt`.`grantees` g
                                INNER JOIN `db_imt`.`roster` r
                                    ON (g.`ENTRY_ID` = r.`ENTRY_ID`)
                                INNER JOIN `db_imt`.`swdi` s
                                    ON (s.`HOUSEHOLD_ID` = g.`HOUSEHOLD_ID`)
                                LEFT JOIN `db_imt`.intervensions i
                                    ON (i.HOUSEHOLD_ID = g.HOUSEHOLD_ID)
                                GROUP BY s.HOUSEHOLD_ID
                                ORDER BY 2
                                LIMIT 0, 50    
                                ;

                            ") or die(mysqli_error());
                            while ($r=mysqli_fetch_array($res_intvlist,MYSQLI_ASSOC)) {

                                $cnt++;
                                $HOUSEHOLD_ID = $r['HOUSEHOLD_ID'];
                                $FULLNAME = strtoupper($r['Fullname']); 
                                $SEX = $r['SEX']; 
                                $PROVINCE = $r['PROVINCE']; 
                                $MUNICIPALITY = $r['MUNICIPALITY']; 
                                $BARANGAY = $r['BARANGAY']; 
                                $SWDI_SCORE = $r['SWDI_SCORE']; 
                                $LOWB = $r['LOWB']; 
                                $INTERV_COUNT =  $r['INTERV_COUNT'];

                                $btn_detail_class = "";

                                echo "
                                    <tr class=\"\">
                                        <td class=\"even gradeC\"> $HOUSEHOLD_ID</td>
                                        <td>$FULLNAME</td>
                                        <td>$SEX</td>
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
            //var txtIntervDescription = $('#txtIntervDescription').val();
            var txtIntervDescription = $('#editor-one').html();

            var has_error = false;
            if (cmbProgram < 0) {
                notification_show('The following fields are required! <br> <ul><li>Compoents</li><li>Classification</li><li>Program/Service</li></ul>');
                // $('#cmbProgram').closest('div').addClass('has-error');
                // $('#cmbClassification').closest('div').addClass('has-error');
                // $('#cmbComponents').closest('div').addClass('has-error');
                has_error = true;
            } else if (numYDS <= 0) {
                notification_show('YDS field is required!');
                has_error = true;
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

                    //$('#txtIntervDescription').val(arr[1]);
                    $('#editor-one').html(arr[1]);

                }
            });

            //$("#dtDateConducted").val(date_conducted);
            //get title 
            //get intervention details

        } else {
            //* LOAD DATA ENTRY FOR NEW INTERVENTION

            $('#interv_list_editor_modal_label').html('New intervention for HH#' + hhid);

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
            },
            success: function(response) {

                $('#cmbProgram').html(response);
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
                                        <div class="col-sm-4 invoice-col">
                                            Household Info
                                            <hr>
                                            <address>
                                                  <strong>Grantee: </strong> <span id="ih_grantee"></span>
                                                  <br><b>Sex: </b> <span id="ih_sex"></span>
                                                  <br><b>Date of Birth: </b> <span id="ih_birthdate"></span>
                                                  <br><b>Age: </b> <span id="ih_age"></span>
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 invoice-col">
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
                                        <div class="col-sm-4 invoice-col">
                                            <br>
                                            <hr>
                                            <b>Household Status:</b> <span id="ih_hhstatus"></span>
                                            <br><b>IP Affiliation:</b> <span id="ih_ipaffil"></span>
                                            <br><b>Set-Group:</b> <span id="ih_setgroup"></span>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

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
                                <input id="numYDS" name="numYDS" type="number" class="form-control" required="required" value="1">
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
<!--                         
                        <div class="form-group">
                            <label for="txtIntervDescription" class="control-label">Intervention Details</label>
                            <textarea id="txtIntervDescription" name="txtIntervDescription" cols="40" rows="5" class="form-control" aria-describedby="txtIntervDescriptionHelpBlock" required="required"></textarea>
                            <span id="txtIntervDescriptionHelpBlock" class="help-block">State the comprehensive intervention</span>
                        </div>
 -->
                        <div class="form-group">
                            <label for="txtIntervDescription" class="control-label">Intervention Details</label>

                            <!-- editor-one wrapper -->
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
                         <!-- /editor-one wrapper -->


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





<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">ACCESS ROLES MANAGER</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" id=row_count>
                
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="pull-right">
                <a href="#" class="btn btn-success" id=btnNewUser data-toggle="modal" data-target="#myModal">ADD ROLE</a>
                </div>
                <br><br>

                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>

                            <th width="5%">ID</th>
                            <th width="30%">ROLE</th>
                            <th>DESCRIPTION</th>
                            <th width="10%">OPTIONS</th>
                        </tr>
                    </thead>
                    <tbody id=clientlist class="clientlist">
                    <div id=dummyrow></div>
                        <?php 
                            $res_users = mysqli_query($con, "
                        SELECT
                            `roles`.`role_id`
                            , `roles`.`role`
                            , `roles`.`desciption`
                            , `roles`.`client_registration`
                            , `roles`.`client_deletion`
                            , `roles`.`payment_encoding`
                            , `roles`.`mcpr_generation`
                            , `roles`.`incentives_module`
                            , `roles`.`audittrail`
                            , `roles`.`settings_useraccounts`
                            , `roles`.`settings_accessroles`
                            , `roles`.`settings_dbbackup`
                            , `roles`.`settings_dbrestore`
                            , `roles`.`filemaintenance_agents`
                            , `roles`.`filemaintenance_branches`
                            , `roles`.`filemaintenance_plans`
                            , `roles`.`reports_incentives`
                            , `roles`.`reports_audittrails`
                            , `roles`.`accounting`
                            , `roles`.`burial`
                            , COUNT(`users`.`role_id`) AS `user_count`
                        FROM
                            `dmcsm`.`users`
                            RIGHT OUTER JOIN `dmcsm`.`roles` 
                                ON (`users`.`role_id` = `roles`.`role_id`)
                        GROUP BY `roles`.`role_id`, `roles`.`role`, `roles`.`desciption`, `roles`.`client_registration`, `roles`.`client_deletion`, `roles`.`payment_encoding`, `roles`.`mcpr_generation`, `roles`.`incentives_module`, `roles`.`audittrail`, `roles`.`settings_useraccounts`, `roles`.`settings_accessroles`, `roles`.`settings_dbbackup`, `roles`.`settings_dbrestore`, `roles`.`filemaintenance_agents`, `roles`.`filemaintenance_branches`, `roles`.`filemaintenance_plans`, `roles`.`reports_incentives`, `roles`.`reports_audittrails`, `roles`.`accounting`, `roles`.`burial`;


                            ") or die(mysqli_error());
                            while ($r=mysqli_fetch_array($res_users,MYSQLI_ASSOC)) {
                                
                                $role_id = $r['role_id']; 
                                $role = $r['role']; 
                                $desciption = $r['desciption']; 

                                $client_registration = $r['client_registration']; 
                                $client_deletion = $r['client_deletion']; 
                                $payment_encoding = $r['payment_encoding']; 
                                $mcpr_generation = $r['mcpr_generation']; 
                                $incentives_module = $r['incentives_module']; 
                                $audittrail = $r['audittrail']; 
                                $settings_useraccounts = $r['settings_useraccounts']; 
                                $settings_accessroles = $r['settings_accessroles']; 
                                $settings_dbbackup = $r['settings_dbbackup']; 
                                $settings_dbrestore = $r['settings_dbrestore']; 
                                $filemaintenance_agents = $r['filemaintenance_agents']; 
                                $filemaintenance_branches = $r['filemaintenance_branches']; 
                                $filemaintenance_plans = $r['filemaintenance_plans']; 
                                $reports_incentives = $r['reports_incentives']; 
                                $reports_audittrails = $r['reports_audittrails']; 
                                $accounting = $r['accounting']; 
                                $burial = $r['burial']; 
                                $user_count = $r['user_count'];  


                                echo "
                                    <tr id=row$role_id>
                                        <td class=\"even gradeC\"> $role_id</td>
                                        <td>$role</td>
                                        <td>$desciption</td>
                                        <td>

                                            <a href=\"#\" class=\"btn btn-xs btn-success btn-circle\" id=btnuseredit data-toggle=\"modal\" data-target=\"#myModal\"

                                                role_id     =\"$role_id\"
                                                role    =\"$role\"
                                                desciption    =\"$desciption\"

                                                client_registration=\"$client_registration\"
                                                client_deletion=\"$client_deletion\"
                                                payment_encoding=\"$payment_encoding\"
                                                mcpr_generation=\"$mcpr_generation\"
                                                incentives_module=\"$incentives_module\"
                                                audittrail=\"$audittrail\"
                                                settings_useraccounts=\"$settings_useraccounts\"
                                                settings_accessroles=\"$settings_accessroles\"
                                                settings_dbbackup=\"$settings_dbbackup\"
                                                settings_dbrestore=\"$settings_dbrestore\"
                                                filemaintenance_agents=\"$filemaintenance_agents\"
                                                filemaintenance_branches=\"$filemaintenance_branches\"
                                                filemaintenance_plans=\"$filemaintenance_plans\"
                                                reports_incentives=\"$reports_incentives\"
                                                reports_audittrails=\"$reports_audittrails\"
                                                accounting=\"$accounting\"
                                                burial=\"$burial\"
                                                user_count=\"$user_count\"





                                            >
                                            <i class=\"glyphicon glyphicon-edit\"></i></a>

                                            <a href=\"#\" 
                                            role_id=$role_id
                                            user_count=$user_count
                                            id=btnuserdelete 
                                            class=\"btn btn-xs btn-danger btn-circle \"><i class=\"glyphicon glyphicon-trash\"></i></a>

                                        </td>
                                </tr>

                                ";


                            }
                            mysqli_free_result($res_users);
                            
                        ?>
                    </tbody>
                </table>

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>


<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    
    
    $(document).on("click","#btnNewUser",function (e) {
        e.preventDefault();

        $('#role_id').val('');
        $('#role').val('');
        $('#desciption').val('');

        $('#client_registration').attr('checked', false);
        $('#client_deletion').attr('checked', false);
        $('#payment_encoding').attr('checked', false);
        $('#mcpr_generation').attr('checked', false);
        $('#incentives_module').attr('checked', false);
        $('#audittrail').attr('checked', false);
        $('#settings_useraccounts').attr('checked', false);
        $('#settings_accessroles').attr('checked', false);
        $('#settings_dbbackup').attr('checked', false);
        $('#settings_dbrestore').attr('checked', false);
        $('#filemaintenance_agents').attr('checked', false);
        $('#filemaintenance_branches').attr('checked', false);
        $('#filemaintenance_plans').attr('checked', false);
        $('#reports_incentives').attr('checked', false);
        $('#reports_audittrails').attr('checked', false);
        $('#accounting').attr('checked', false);
        $('#burial').attr('checked', false);




    });

    $(document).on("click","#btnuserdelete",function (e) {
        e.preventDefault();    




        if ($(this).attr('user_count')>0) {

            alert("Unable to delete this role. There are users associated with this role!");
            return;
        }

        if (confirm("You are about to remove this role. Do you want to continue?")){
            var role_id =$(this).attr('role_id');

            
                 $.ajax({  
                    type: 'GET',
                    url: './proc/rolelist_proc.php', 
                    data: { 
                        mode:'delete',
                        role_id:role_id
                    },
                    success: function(response) {
                       // prompt(response,response);
                         if (response.indexOf("**success**") > -1){
                            $("#clientlist #row"+role_id).remove();                           
                         }else if (response.indexOf("**failed**") > -1){
                            alert("Delete failed!");
                           
                         }
                    }
                });  
        }
    });
    

    
    //SAVE PLAN
    $(document).on("click","#btnusersave",function (e) {
        e.preventDefault();    

        var role_id=$('#role_id').val();
        var role=$('#role').val(); 
        var desciption=$('#desciption').val();
        var mode = '';

        if (role == ''){
            $('#role').closest("div").addClass("has-error");
            alert("Role Name is required");
            return;
        }else{
            $('#role').closest("div").removeClass("has-error");            
        }


        var chkArray = [];
        
        $(".chk:checked").each(function() {
          chkArray.push($(this).attr("id"));
        });
        
        var selected;
        selected = chkArray.join(',') ;
        
        /* check if there is selected checkboxes, by default the length is 1 as it contains one single comma */
        if(selected.length > 0){
          //alert("You have selected " + selected); 
        }else{
          alert("You haven't select any permission"); 
          return;
        }

        if (role_id==""){
            mode='insert';
        }else{
            mode='update';
        }

         $.ajax({  
            type: 'GET',
            url: './proc/rolelist_proc.php', 
            data: { 
                mode:mode,
                role_id:role_id,
                role:role,
                desciption:desciption,
                selected:selected             
            },
            success: function(response) {
                    //prompt(response,response);

                 if (response.indexOf("**success**") > -1){
                    var strarray=response.split('|');
                    var row = strarray[1];
                    if (mode=='update') {
                        $("#clientlist #row"+role_id).replaceWith( row );
                        alert("Update Successful!");

                    } else if (mode=='insert') {
                        //$("#clientlist tr:first").insertBefore(row);
                        $('#clientlist').append(row);
                        alert("New role added successfully.");
                    }           

                 }else if (response.indexOf("Notice") > -1){
                    alert("Save failed: An error has occured while saving data. Please contact your system developer. ");
                 }else if (response.indexOf("**noChanges**") > -1){
                        alert("Same data - no changes made");
                 }else if(response.indexOf("**exists**") > -1) {
                        alert("Username already exists!");
                 }
            }
        });       

    });

    //LOAD PLAN TO EDITOR
    $(document).on("click","#btnuseredit",function (e) {
        e.preventDefault();

        var role_id =$(this).attr('role_id');
        var role =$(this).attr('role');

        $('#role_id').val(role_id);
        $('#role').val(role);
        $('#desciption').val($(this).attr('desciption'));

        $('#client_registration').attr('checked', !!parseInt($(this).attr('client_registration'))); 
        $('#client_deletion').attr('checked', !!parseInt($(this).attr('client_deletion'))); 
        $('#payment_encoding').attr('checked', !!parseInt($(this).attr('payment_encoding'))); 
        $('#mcpr_generation').attr('checked', !!parseInt($(this).attr('mcpr_generation'))); 
        $('#incentives_module').attr('checked', !!parseInt($(this).attr('incentives_module'))); 
        $('#audittrail').attr('checked', !!parseInt($(this).attr('audittrail'))); 
        $('#settings_useraccounts').attr('checked', !!parseInt($(this).attr('settings_useraccounts'))); 
        $('#settings_accessroles').attr('checked', !!parseInt($(this).attr('settings_accessroles'))); 
        $('#settings_dbbackup').attr('checked', !!parseInt($(this).attr('settings_dbbackup'))); 
        $('#settings_dbrestore').attr('checked', !!parseInt($(this).attr('settings_dbrestore'))); 
        $('#filemaintenance_agents').attr('checked', !!parseInt($(this).attr('filemaintenance_agents'))); 
        $('#filemaintenance_branches').attr('checked', !!parseInt($(this).attr('filemaintenance_branches'))); 
        $('#filemaintenance_plans').attr('checked', !!parseInt($(this).attr('filemaintenance_plans'))); 
        $('#reports_incentives').attr('checked', !!parseInt($(this).attr('reports_incentives'))); 
        $('#reports_audittrails').attr('checked', !!parseInt($(this).attr('reports_audittrails'))); 
        $('#accounting').attr('checked', !!parseInt($(this).attr('accounting'))); 
        $('#burial').attr('checked', !!parseInt($(this).attr('burial'))); 
        
    });

</script>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">User Information</h4>
      </div>
      <div class="modal-body">

            <form class="form-horizontal">
            <fieldset>

            <input type="hidden" id="role_id"/>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="role">Role</label>  
              <div class="col-md-8">
              <input id="role" name="role" type="text" placeholder="" class="form-control input-md" required="">
              <span class="help-block">Name of the role</span>  
              </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="role">Desciption</label>  
              <div class="col-md-8">
              <textarea class="form-control" rows="3" id="desciption" name="desciption"></textarea>
              <span class="help-block"></span>  
              </div>
            </div>
            <hr>
            <!-- Multiple Checkboxes -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="checkboxes">Access Roles</label>
              <div class="col-md-10">
              <div class="checkbox">
                <label for="client_registration">
                  <input type="checkbox" class="chk" name="client_registration" id="client_registration">
                  Add/Edit Client's Information
                </label>
              </div>
              <div class="checkbox">
                <label for="client_deletion">
                  <input type="checkbox" class="chk" name="client_deletion" id="client_deletion">
                  Deletion Clients
                </label>
              </div>
              <div class="checkbox">
                <label for="payment_encoding">
                  <input type="checkbox" class="chk" name="payment_encoding" id="payment_encoding">
                  Encoding of Payment Receipts
                </label>
              </div>
              <div class="checkbox">
                <label for="mcpr_generation">
                  <input type="checkbox" class="chk" name="mcpr_generation" id="mcpr_generation">
                  Generation and Downloading of MCPR Report
                </label>
              </div>
              <div class="checkbox">
                <label for="incentives_module">
                  <input type="checkbox" class="chk" name="incentives_module" id="incentives_module">
                  Access to Incentives Module
                </label>
              </div>

              <div class="checkbox">
                <label for="audittrail">
                  <input type="checkbox" class="chk" name="audittrail" id="audittrail">
                  Download Audit Trails
                </label>
              </div>

              <div class="checkbox">
                <label for="settings_useraccounts">
                  <input type="checkbox" class="chk" name="settings_useraccounts" id="settings_useraccounts">
                  Manage User Accounts
                </label>
              </div>
              <div class="checkbox">
                <label for="settings_accessroles">
                  <input type="checkbox" class="chk" name="settings_accessroles" id="settings_accessroles">
                  Manage Access Roles
                </label>
              </div>
              <div class="checkbox">
                <label for="settings_dbbackup">
                  <input type="checkbox" class="chk" name="settings_dbbackup" id="settings_dbbackup">
                  Backup Database 
                </label>
              </div>
              <div class="checkbox">
                <label for="settings_dbrestore">
                  <input type="checkbox" class="chk" name="settings_dbrestore" id="settings_dbrestore">
                  Restore Database from Backup 
                </label>
              </div>
              <div class="checkbox">
                <label for="filemaintenance_agents">
                  <input type="checkbox" class="chk" name="filemaintenance_agents" id="filemaintenance_agents">
                  Manage Agent Profile Module
                </label>
              </div>
              <div class="checkbox">
                <label for="filemaintenance_branches">
                  <input type="checkbox" class="chk" name="filemaintenance_branches" id="filemaintenance_branches">
                  Manage Branches module 
                </label>
              </div>
              <div class="checkbox">
                <label for="filemaintenance_plans">
                  <input type="checkbox" class="chk" name="filemaintenance_plans" id="filemaintenance_plans">
                  Manage Plans Module
                </label>
              </div>
              <div class="checkbox">
                <label for="reports_incentives">
                  <input type="checkbox" class="chk" name="reports_incentives" id="reports_incentives">
                  View Incentives Reports
                </label>
              </div>
              <div class="checkbox">
                <label for="reports_audittrails">
                  <input type="checkbox" class="chk" name="reports_audittrails" id="reports_audittrails">
                  View Audit Trails
                </label>
              </div>
              <div class="checkbox">
                <label for="accounting">
                  <input type="checkbox" class="chk" name="accounting" id="accounting">
                  Access Accounting Module
                </label>
              </div>
              <div class="checkbox">
                <label for="burial">
                  <input type="checkbox" class="chk" name="burial" id="burial">
                  Access Burial Module
                </label>
              </div>

              </div>







            </div>


            






            </fieldset>
            </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id=btnusersave>Save</button>
      </div>
    </div>
  </div>
</div>
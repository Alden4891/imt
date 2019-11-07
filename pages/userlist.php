


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">User Account Profile</h1>
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
                <a href="#" class="btn btn-success" id=btnNewUser data-toggle="modal" data-target="#myModal">New User Account</a>
                </div>
                <br><br>

                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>

                            <th>User ID</th>
                            <th>Username</th>
                            <th>Fullname</th>
                            <th>Role</th>
                            <th>Account Status</th>
                            <th>is Approved?</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody id=clientlist class="clientlist">
                    <div id=dummyrow></div>
                        <?php 
                            $res_users = mysqli_query($con, "


                            SELECT
                              `users`.`user_id`              AS `user_id`,
                              `users`.`fullname`             AS `fullname`,
                              `users`.`username`             AS `username`,
                              `users`.`password`             AS `password`,
                              `users`.`status`               AS `status`,
                              `users`.`approved`             AS `approved`,
                              `roles`.*
                            FROM ((`users`
                                LEFT JOIN `roles`
                                  ON ((`users`.`role_id` = `roles`.`role_id`))))


                            ;") or die(mysqli_error());
                            while ($r=mysqli_fetch_array($res_users,MYSQLI_ASSOC)) {
                                
                                $user_id = $r['user_id']; 
                                $fullname = $r['fullname']; 
                                $username = $r['username']; 
                                $password = $r['password'];
                                $role_id = $r['role_id']; 
                                
                                $role = $r['role'];
                                $approved = $r['approved'];
                                $isapproved = ($r['approved']==1?"Yes":"No");
                                $status = $r['status'];

                                echo "
                                    <tr id=row$user_id>
                                        <td class=\"even gradeC\"> $user_id</td>
                                        <td>$username</td>
                                        <td>$fullname</td>
                                        <td>$role</td>
                                        <td>$status</td>
                                        <td>$isapproved</td>                                       
                                        <td>

                                            <a href=\"#\" class=\"btn btn-success btn-xs btn-circle\" id=btnuseredit data-toggle=\"modal\" data-target=\"#myModal\"

                                                user_id     =\"$user_id\"
                                                fullname    =\"$fullname\"
                                                username    =\"$username\"
                                                role_id     =\"$role_id\"

                                                role        =\"$role\"
                                                approved    =\"$approved\"
                                                isapproved  =\"$isapproved\"
                                                status      =\"$status\"

                                                password =\"$password\"
                                            >
                                            <i class=\"glyphicon glyphicon-edit\"></i></a>



                                            <a href=\"#\" 
                                            user_id=$user_id
                                            id=btnuserdelete 
                                            class=\"btn btn-danger btn-xs btn-circle disabled\"><i class=\"glyphicon glyphicon-trash\"></i></a>

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

    
    
    $(document).on("click","#btnNewUser",function (e) {
        e.preventDefault();

        $('#user_id2').val('');
        $('#fullname').val('');
        $('#username').val('');
        $('#password1').val('');
        $('#password2').val('');
        $('#role').val('2'); //encoder
        $('#status').val('Enabled');

    });

    //DELETE PLAN
    $(document).on("click","#btnuserdelete",function (e) {
        e.preventDefault();    

        if (confirm("You are about to remove this user account. Do you want to continue?")){
            var user_id =$(this).attr('user_id');

            
                 $.ajax({  
                    type: 'GET',
                    url: './proc/userlist_proc.php', 
                    data: { 
                        mode:'delete',
                        user_id:user_id
                    },
                    success: function(response) {
                         if (response.indexOf("**success**") > -1){
                            $("#clientlist #row"+user_id).remove();                           
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

        var user_id=$('#user_id2').val();
        var fullname=$('#fullname').val(); 
        var username=$('#username').val();
        var password1=$('#password1').val();
        var password2=$('#password2').val();
        var role_id=$('#role').val();
        var status=$('#status').val();

        var mode = '';


        
        if (fullname == ''){
            $('#fullname').closest("div").addClass("has-error");
            alert("Name of user is required");
            return;
        }else{
            $('#fullname').closest("div").removeClass("has-error");            
        }
        if (username == ''){
            $('#username').closest("div").addClass("has-error");
            alert("Username is required");
            return;
        }else{
            $('#username').closest("div").removeClass("has-error");            
        }
        if (password1 == ''){
            $('#password1').closest("div").addClass("has-error");
            alert("Password is required");
            return;
        }else{
            $('#password1').closest("div").removeClass("has-error");            
        }

        //REQUIRE PASSWORD IF NEW USER
        if (user_id == "0" || user_id == ""){
            if (password1 != '' && password2 == ''){
                $('#password2').closest("div").addClass("has-error");
                alert("Please confirm password");
                return;
            }else{
                $('#password2').closest("div").removeClass("has-error");            
            }

            if (password1 != password2 ){
                $('#password2').closest("div").addClass("has-error");
                alert("Password missmatch!");
                return;
            }else{
                $('#password2').closest("div").removeClass("has-error");            
            }

        //NEW USER W/ ENTRY IN CONFIRM PASSWORD SUBJECT FOR CHANGE PASSOWRD
        } else if (user_id > 0 && password1 != "" && password2 != "") {
            if (password1 != '' && password2 == ''){
                $('#password2').closest("div").addClass("has-error");
                alert("Please confirm password");
                return;
            }else{
                $('#password2').closest("div").removeClass("has-error");            
            }

            if (password1 != password2 ){
                $('#password2').closest("div").addClass("has-error");
                alert("Password missmatch!");
                return;
            }else{
                $('#password2').closest("div").removeClass("has-error");            
            }

        }


        if (user_id==""){
            mode='insert';
        }else{
            mode='update';
        }

         $.ajax({  
            type: 'GET',
            url: './proc/userlist_proc.php', 
            data: { 
                mode:mode,
                user_id:user_id,
                fullname:fullname,
                username:username,
                password:password1,
                role_id:role_id,
                status:status
            },
            success: function(response) {
                //alert(response);
                 if (response.indexOf("**success**") > -1){

                    var strarray=response.split('|');
                    var row = strarray[1];
                    if (mode=='update') {
                        $("#clientlist #row"+user_id).replaceWith( row );
                        alert("Update Successful!");

                    } else if (mode=='insert') {
                        $("#clientlist tr:first").insertBefore(row);
                        alert("New user added successfully.");

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

        var user_id =$(this).attr('user_id');
        var fullname =$(this).attr('fullname');
        var username =$(this).attr('username');
        var password =$(this).attr('password');
        var role_id =$(this).attr('role_id');
        var status =$(this).attr('status');

        $('#user_id2').val(user_id);
        $('#fullname').val(fullname);
        $('#username').val(username);
        $('#password1').val(password);
        $('#password2').val('');
        $('#role').val(role_id);
        $('#status').val(status);

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

            <input type="hidden" id="user_id2"/>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="fullname">Fullname</label>  
              <div class="col-md-8">
              <input id="fullname" name="fullname" type="text" placeholder="" class="form-control input-md" required="">
              <span class="help-block">[Firstname] [Middle Name] [Lastname]</span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="username">USER NAME</label>  
              <div class="col-md-8">
              <input id="username" name="username" type="text" placeholder="" class="form-control input-md" required="">
              <span class="help-block">User credential for login.</span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="password1">Password</label>  
              <div class="col-md-8">
              <input id="password1" name="password1" type="password" placeholder="" class="form-control input-md" required="">
              <span class="help-block"></span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="password2">Confirm Password</label>  
              <div class="col-md-8">
              <input id="password2" name="password2" type="password" placeholder="" class="form-control input-md" required="">
              <span class="help-block"></span>  
              </div>
            </div>




            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="role">Role</label>
              <div class="col-md-4">
                <select id="role" name="role" class="form-control">
                  

                        <?php 
                            $res_roles = mysqli_query($con, "SELECT role_id, role FROM roles;") or die(mysqli_error());
                            while ($r=mysqli_fetch_array($res_roles,MYSQLI_ASSOC)) {
                                $role_id = $r['role_id'];
                                $role = $r['role'];
                                if ($role_id==2) {
                                    echo "<option value=\"$role_id\" selected>$role</option>";
                                }else{
                                    echo "<option value=\"$role_id\">$role</option>";
                                }
                                
                            }

                            mysqli_free_result($res_roles);
                        ?>

                </select>
              </div>
            </div>


            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="status">Account Status</label>
              <div class="col-md-4">
                <select id="status" name="status" class="form-control">
                    <option value="Enabled">Enabled</option>;
                    <option value="Disabled">Disabled</option>;
                </select>
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
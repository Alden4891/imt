<?php
    $cmd = (isset($_REQUEST['cmd'])?$_REQUEST['cmd']:'');
    $mode = (isset($_REQUEST['mode'])?$_REQUEST['mode']:'');
    $title = "";
    if ($mode=='' || $mode=='is'){
        $title = "LOGIN";
    }else if ($mode=='as'){
        $title = "ACCOUNTING SYSTEM";
    }else if ($mode=='ms'){
        $title = "MEMORIAL SYSTEM";
    }


?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <?php
    header("Content-Type: text/html; charset=utf-8");
    ?>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DSWD XII | PANTAWID SUPPORT DESK SYSTEM</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../build/css/custom.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>




  </head>


<?php 
    if (isset($_REQUEST['cmd'])){
        if ($_REQUEST['cmd']=='logout'){
            $timeout = -1;
            setcookie('user_id', '', time() + ($timeout), "/"); 
            setcookie('fullname', '', time() + ($timeout), "/"); 
            setcookie('username', '', time() + ($timeout), "/"); 
            setcookie('password', '', time() + ($timeout), "/"); 
            setcookie('role_id', '', time() + ($timeout), "/"); 
            setcookie('role', '', time() + ($timeout), "/"); 
//            setcookie('Branch_Code', '', time() + ($timeout), "/"); 
//            setcookie('Branch_ID', '', time() + ($timeout), "/"); 
            setcookie('branch_ids', '', time() + ($timeout), "/"); 


/*
            setcookie('encoding', '', time() + ($timeout), "/"); 
            setcookie('collections', '', time() + ($timeout), "/"); 
            setcookie('audittrail', '', time() + ($timeout), "/"); 
            setcookie('reporting', '', time() + ($timeout), "/"); 
            setcookie('reporting', '', time() + ($timeout), "/"); 
*/

            setcookie('client_registration', '', time() + ($timeout), "/");
            setcookie('client_deletion', '', time() + ($timeout), "/");
            setcookie('payment_encoding', '', time() + ($timeout), "/");
            setcookie('mcpr_generation', '', time() + ($timeout), "/");
            setcookie('incentives_module', '', time() + ($timeout), "/");
            setcookie('audittrail', '', time() + ($timeout), "/");
            setcookie('settings_useraccounts', '', time() + ($timeout), "/");
            setcookie('settings_accessroles', '', time() + ($timeout), "/");
            setcookie('settings_dbbackup', '', time() + ($timeout), "/");
            setcookie('settings_dbrestore', '', time() + ($timeout), "/");
            setcookie('filemaintenance_agents', '', time() + ($timeout), "/");
            setcookie('filemaintenance_branches', '', time() + ($timeout), "/");
            setcookie('filemaintenance_plans', '', time() + ($timeout), "/");
            setcookie('reports_incentives', '', time() + ($timeout), "/");
            setcookie('reports_audittrails', '', time() + ($timeout), "/");
            setcookie('accounting', '', time() + ($timeout), "/");
            setcookie('burial', '', time() + ($timeout), "/");


            echo "<script>
            window.location = \"login.php\";
            </script>";
        }
    }
    include "dbconnect.php";
?>



  <!--body style="background-image:url(images/dmcsm.jpg)"-->
  <body style="background-image:url(images/paper.jpg)">

    <div class="container body">



<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    
<br>
   <div class="row">
      <div class="col-md-3" ></div>



      <div class="col-md-6" >


                  <div class="LOGIN-panel panel panel-default">
                      <div class="panel-heading">
                          <h3 class="panel-title"><CENTER><div id=title></div></CENTER></h3>
                      </div>
                      <div class="panel-body">
                          <form role="form" id=frmlogin>
                              <fieldset>
                                  <div class="form-group">
                                      <input class="form-control" placeholder="Username" name="username" type="username" autofocus id=username required>
                                  </div>
                                  <div class="form-group">
                                      <input class="form-control" placeholder="Password" name="password" type="password" value="" id=password required>
                                      <input type="hidden" name="mode" id="mode" value=""></input>
                                  </div>
                                  <div class="checkbox">
                                      <label>
                                          <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                      </label>
                                  </div>
                                  <!-- Change this to a button or input when using this as a form -->
                                  <!--a href="#" class="btn btn-lg btn-success btn-block" id=userloginsubmitbutton>LOGIN</a-->
                                  <input type="submit" class="btn btn-lg btn-success btn-block" style="background:#2A3F54" value="LOGIN"></input>
                              </fieldset>
                              <a href='#' data-toggle="modal" data-target="#registrationModal" id=btnregister  system=is> Register new user</a>
                          </form> <br>
                           <!--a href='#' data-toggle="modal" data-target="#registrationModal"> Register </a-->
                           <div id=messagebox></div>

                            <div class="separator">
                              <div>
                                  <center>
                                    <h2><img src="images/dswd.jpg" height="100" width="120" /> <br>DSWD XII PANTAWID SUPPORT DESK SYSTEM</h2>
                                    <p>Department of Social Welfare and Development © 2018</p>
                                  </center>
                              </div>
                            </div>
                      </div>
                  </div>
               
      

      </div>
      <div class="col-md-3" ></div>






    </div>

    <!--center>
      <p class="bg-warning">
      <font color=#000000>
      Planning a funeral is one of life’s more difficult experiences. Death can bring about feelings that are hard to express, <br>and on top of heavy emotions, family members are faced with deciding how best to honor a loved one.
      </font>
      </p>


    </center-->



  </div>
  <div class="col-md-1"></div>
</div>

    <?php
      include 'footer2.php';
    ?>




    </div>

  </script>


    <!-- buttom page: above the closing body tag -->
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>




  </body>
</html>


    <!-- Modal -->
    <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">User Registration</h4>
                </div>
                <div class="modal-body">

             

                  <fieldset>

                <form class="form-horizontal" action='' method="POST">


                    <div class="control-group">
                      <label class="control-label" for="rfullname">Fullname</label>
                      <div class="controls">
                        <input type="text" id="rfullname" name="rfullname" placeholder="" class="form-control">
                        <p class="help-block">[Given Name] [M.i]. [Surname]</p>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="remail">E-mail Address</label>
                      <div class="controls">
                        <input type="email" id="remail" name="remail" placeholder="" class="form-control" required>
                        <p class="help-block"></p>
                      </div>
                    </div>


                    <div class="control-group">
                      <label class="control-label" for="rposition">Position</label>
                      <div class="controls">
                        <input type="text" id="rposition" name="rposition" placeholder="" class="form-control">
                        <p class="help-block"></p>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="rassignment">Area of Assignment</label>
                      <div class="controls">
                        <input type="text" id="rassignment" name="rassignment" placeholder="" class="form-control">
                        <p class="help-block"></p>
                      </div>
                    </div>


                    <div class="control-group">
                      <label class="control-label" for="rrole">Role</label>
                      <div class="controls">
                        <select class="form-control" id="rrole">


                        </select>
                        <p class="help-block"></p>
                      </div>
                    </div>

                    <div class="control-group">
                      <!-- Username -->
                      <label class="control-label"  for="rusername">Username</label>
                      <div class="controls">
                        <input type="text" id="rusername" name="rusername" placeholder="" class="form-control">
                        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                      </div>
                    </div>
                
                    <div class="control-group">
                      <!-- Password-->
                      <label class="control-label" for="rpassword1">Password</label>
                      <div class="controls">
                        <input type="password" id="rpassword1" name="rpassword1" placeholder="" class="form-control">
                        <p class="help-block">Password should be at least 8 characters</p>
                      </div>
                    </div>
                 
                    <div class="control-group">
                      <!-- Password -->
                      <label class="control-label"  for="rpassword2" >Password (Confirm)</label>
                      <div class="controls">
                        <input type="password" id="rpassword2" name="rpassword2" placeholder="" class="form-control " disabled>
                        <p class="help-block">Please confirm password</p>
                      </div>
                    </div>





                 
                <div id=rmessagebox ></div>
                  </fieldset>
                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id=regsitrationbutton>Register</button>


                </div>

                </form>

                            

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <!-- LOGIN Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">






                </div>

                



                            

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.LOGIN modal -->


<script>


$(document).on('click','#btnregister',function(e){
  e.preventDefault();
  var stype = $(this).attr('system');
  var opts_response = "";





        $.ajax({  
            type: 'GET',
            url: './proc/getComboData.php', 
            data: { 
                tableName: "roles",
                valueMember:  "role_id",
                displayMember:  "role",
                condition: "role_id > 1",
            },
            success: function(response) {
                //prompt(response,response);
                $('#rrole').html(response);
            }
        });


      

});






$("#rpassword1").keyup(function() {
    if($(this).val().length > 7) {
        // $('#rpassword2').removeClass('');
         $("#rpassword2").prop('disabled',false);
    } else {
         // Disable submit button
         $("#rpassword2").prop('disabled',true);
    }
});

$('#regsitrationbutton').on('click', function(e) {
    e.preventDefault();
    var error_count = 0;


    if ($('#rfullname').val().trim()=='') {
        $('#rmessagebox').hide();
        $('#rmessagebox').fadeIn('slow');
        $('#rmessagebox').html('<br><div class="alert alert-danger">Plese enter fullname!.</div>')
        $('#rfullname').focus();
        error_count+=1;
        exit();
    }

    if ($('#remail').val().trim()=='') {
        $('#rmessagebox').hide();
        $('#rmessagebox').fadeIn('slow');
        $('#rmessagebox').html('<br><div class="alert alert-danger">Plese enter email address!.</div>')
        $('#remail').focus();
        error_count+=1;
        exit();
    }

    if ($('#rposition').val().trim()=='') {
        $('#rmessagebox').hide();
        $('#rmessagebox').fadeIn('slow');
        $('#rmessagebox').html('<br><div class="alert alert-danger">Plese enter your position/designation!.</div>')
        $('#rposition').focus();
        error_count+=1;
        exit();
    }

    if ($('#rassignment').val().trim()=='') {
        $('#rmessagebox').hide();
        $('#rmessagebox').fadeIn('slow');
        $('#rmessagebox').html('<br><div class="alert alert-danger">Plese enter area of assignment!.</div>')
        $('#rassignment').focus();
        error_count+=1;
        exit();
    }



    if ($('#rrole').val()=='0'){
        $('#rmessagebox').hide();
        $('#rmessagebox').fadeIn('slow');
        $('#rmessagebox').html('<br><div class="alert alert-danger">Please select user role</div>')
        $('#rrole').focus();
        error_count+=1;
        exit();
    }

    if ($('#rusername').val().trim()=='') {
        $('#rmessagebox').hide();
        $('#rmessagebox').fadeIn('slow');
        $('#rmessagebox').html('<br><div class="alert alert-danger">Plese enter username!.</div>')
        $('#rusername').focus();
        error_count+=1;
        exit();
    }

    if ($('#rpassword1').val().trim()=='') {
        $('#rmessagebox').hide();
        $('#rmessagebox').fadeIn('slow');
        $('#rmessagebox').html('<br><div class="alert alert-danger">Plese enter password!.</div>')
        $('#rpassword1').focus();
         error_count+=1;
        exit();
    }
/*
    alert($('#rpassword1').val().trim().lenght());
    if ($('#rpassword1').val().trim().lenght < 9 ) {
        $('#rmessagebox').hide();
        $('#rmessagebox').fadeIn('slow');
        $('#rmessagebox').html('<br><div class="alert alert-danger">Password must atleast 8 character!.</div>')
        $('#rpassword1').focus();
         error_count+=1;
        exit();
    }    
*/
    if ($('#rpassword1').val().trim()!=$('#rpassword2').val().trim()) {
        $('#rmessagebox').hide();
        $('#rmessagebox').fadeIn('slow');
        $('#rmessagebox').html('<br><div class="alert alert-danger">Password missmatch!.</div>')
        $('#rpassword2').focus();
         error_count+=1;
        exit();
    }



    if (error_count==0){
      //send POST here
        

        $.ajax({  
            type: 'GET',
            url: './proc/userregistration_proc.php', 
            data: { 
                role_id:$('#rrole').val(),
                fullname:$('#rfullname').val(),
                username:$('#rusername').val(),
                password :$('#rpassword1').val(),
                email :$('#remail').val(),
                assignment :$('#rassignment').val(),
                position :$('#rposition').val()
               
            },
            success: function(response) {
                 //prompt(response,response);
               
                 if (response.indexOf("**success**") > -1){
                    $('#messagebox').hide();
                    $('#messagebox').fadeIn('slow');
                    $('#messagebox').html('<br><div class="alert alert-success">Registration Successful. You can now LOGIN</div>')
                    $('#registrationModal').modal('hide')
                 }else if (response.indexOf("**failed**") > -1){
                    $('#rmessagebox').hide();
                    $('#rmessagebox').fadeIn('slow');
                    $('#rmessagebox').html('<br><div class="alert alert-danger">Registration Failed!.</div>')
                 }else if (response.indexOf("**exists**") > -1){
                    $('#rmessagebox').hide();
                    $('#rmessagebox').fadeIn('slow');
                    $('#rmessagebox').html('<br><div class="alert alert-danger">Username already exists!.</div>')
                 }


            }
        });


    } //if error ==0

});

$("#frmlogin").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.



    var error_count = 0;

    if ($('#username').val().trim()=='') {
        $('#messagebox').hide();
        $('#messagebox').fadeIn('slow');
        $('#messagebox').html('<br><div class="alert alert-danger">Plese enter username!.</div>');
        $('#username').focus();

        exit();
    }


    if (error_count==0){
      //send POST here

        $.ajax({  
            type: 'GET',
            url: './proc/login_proc.php', 
            data: { 
                username:$('#username').val(),
                password:$('#password').val(),
                mode:$('#mode').val()
            },
            success: function(response) {
                 //prompt(response,response);
                 if (response.indexOf("**success**") > -1){
                     window.location.href = 'index.php';
                   
                 }else if (response.indexOf("**failed**") > -1){
                    $('#messagebox').hide();
                    $('#messagebox').fadeIn('slow');
                    $('#messagebox').html('<br><div class="alert alert-danger">Access Denied!.</div>')
                 }else if (response.indexOf("**ms**") > -1){
                    $('#messagebox').hide();
                    $('#messagebox').fadeIn('slow');
                    $('#messagebox').html('<br><div class="alert alert-danger">Access Denied!. This account is not for memorial system</div>');

                 }else if (response.indexOf("**as**") > -1){
                    $('#messagebox').hide();
                    $('#messagebox').fadeIn('slow');
                    $('#messagebox').html('<br><div class="alert alert-danger">Access Denied!. This account is not for accounting system</div>');
                 }else if (response.indexOf("**is**") > -1){
                    $('#messagebox').hide();
                    $('#messagebox').fadeIn('slow');
                    $('#messagebox').html('<br><div class="alert alert-danger">Access Denied!. This account is not for information system</div>');

                 } else {
                    $('#messagebox').hide();
                    $('#messagebox').fadeIn('slow');
                    $('#messagebox').html('<br><div class="alert alert-danger">OPS. </div> <br>ERROR: '+response);                   
                 }


            }
        });


    } //if error ==0



});

//--------------------------------------------------------
$('#userloginsubmitbutton').on('click', function(e) {
    e.preventDefault();
    var error_count = 0;



    if ($('#username').val().trim()=='') {
        $('#messagebox').hide();
        $('#messagebox').fadeIn('slow');
        $('#messagebox').html('<br><div class="alert alert-danger">Plese enter username!.</div>')
        $('#username').focus();

        exit();
    }



    if (error_count==0){
      //send POST here

        $.ajax({  
            type: 'GET',
            url: './proc/login_proc.php', 
            data: { 
                username:$('#username').val(),
                password:$('#password').val()
            },
            success: function(response) {
                 //prompt(response,response);
                 if (response.indexOf("**success**") > -1){
                     window.location.href = 'index.php';
                 }else if (response.indexOf("**ms**") > -1){
                    $('#messagebox').hide();
                    $('#messagebox').fadeIn('slow');
                    $('#messagebox').html('<br><div class="alert alert-danger">Access Denied!. This account is not for memorial system</div>');

                 }else if (response.indexOf("**as**") > -1){
                    $('#messagebox').hide();
                    $('#messagebox').fadeIn('slow');
                    $('#messagebox').html('<br><div class="alert alert-danger">Access Denied!. This account is not for accounting system</div>');
                 }else if (response.indexOf("**is**") > -1){
                    $('#messagebox').hide();
                    $('#messagebox').fadeIn('slow');
                    $('#messagebox').html('<br><div class="alert alert-danger">Access Denied!. This account is not for information system</div>');

                 } else {
                    $('#messagebox').hide();
                    $('#messagebox').fadeIn('slow');
                    $('#messagebox').html('<br><div class="alert alert-danger">OPS.</div>');                   
                 }


            }
        });


    } //if error ==0

});

</script>
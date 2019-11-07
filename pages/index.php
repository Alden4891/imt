<!DOCTYPE html>
<html lang="en">

<?php
  date_default_timezone_set('Asia/Manila');
    $user_id = "";
    $role = "";
    $user_fullname = "";
    $user_password = "";

    if(!isset($_COOKIE['user_id'])) {
        header("Location: ../index.php"); /* Redirect browser */
        exit();
    } else {
        //echo "Value is: " . $_COOKIE['user_id'];
        $user_id = $_COOKIE['user_id'];
        $role = $_COOKIE['role'];
        $role_id = $_COOKIE['role_id'];

        $user_fullname  = $_COOKIE['fullname'];
        $user_password = $_COOKIE['password'];

    }

    $page = (isset($_REQUEST['page'])?$_REQUEST['page']:'');
    $cmd = (isset($_REQUEST['cmd'])?$_REQUEST['cmd']:'none');


    $SETTINGS_HIDER = "";
    if ($role_id==2){
      $SETTINGS_HIDER = "hidden";
    }


    include 'dbconnect.php';



?>



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

    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>




  </head>

  <body class="nav-md">
    <?php
        echo "<div id=user_info 
        user_id=$user_id
        ></div>";
    ?>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><img src="images/dswd.jpg" width="30" /> <span>  IMT v1.0 </span></a>
              
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="image.php?user_id=<?=$user_id?>" alt="..." class="img-circle profile_img">

              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?=$user_fullname?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>INFORMATION</h3>
                <ul class="nav side-menu">
                  <li class=""><a><i class="fa fa-folder-open fa-fw"></i> Intervensions <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?page=ticketlist_ongoing">Intervensions</a></li>
                      <li><a href="?page=ticketlist_closed">Reports</a></li>
                    </ul>
                  </li>


                  <li class="hidden"><a><i class="fa fa-bar-chart-o fa-fw"></i> REPORTS <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                              <li class="">
                                  <a href="?page=periodlist"> DTR GENERATOR</a>
                              </li>                                
                             
                    </ul>
                  </li>

 







                </ul>
              </div>


              <div class="menu_section <?=$SETTINGS_HIDER?>">
                <h3>SYSTEM</h3>
                <ul class="nav side-menu">


                  <li class=""><a><i class="fa fa-gear"></i> SETTINGS <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                                <li class=""><a href="?page=useraccounts"><i class="fa fa-users"></i> USER ACCOUNTS</a></li>
                                <!--li class=""><a href="?page=accessroles"><i class="fa fa-qrcode"></i> ACCESS ROLES</a></li-->
                                <li class=""><a href="?page=backup"><i class="fa fa-database"></i> BACKUP AND RESTORE</a></li>
                    </ul>
                  </li>

                  <!--li class=""><a><i class="fa fa-gear"></i> TROUBLESHOOTING <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                                <li  class=""><a href="?page=test"><i class="glyphicon glyphicon-sunglasses"></i> TEST#1</a></li>
                                <li  class=""><a href="?page=test2"><i class="glyphicon glyphicon-sunglasses"></i> TEST#2</a></li>
                    </ul>
                  </li-->
                 

 


                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="modal"  data-target=".about_modal" data-placement="top" title="About the system">
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
              </a>
              <a data-toggle="modal"  data-target=".upload_photo_modal" data-placement="top" title="Change Photo">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              </a>
              <a data-toggle="modal" data-target=".modal_change_password" data-placement="top" title="Change Password">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php?cmd=logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="image.php?user_id=<?=$user_id?>" alt=""><?=$user_fullname?> 
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">

                    <li>
                      <a href="#" id="upload_photo"
                        data-toggle="modal"  data-target=".upload_photo_modal"
                      >
                        CHANGE USER PHOTO
                      </a>
                    </li>
                    

                    <li>
                      <a href="#"  
                        data-toggle="modal" data-target=".modal_change_password"
                      >
                        CHANGE PASSWORD
                      </a>
                    </li>

                    <li><a href="login.php?cmd=logout"><i class="fa fa-sign-out pull-right"></i> LOG OUT</a></li>
                  </ul>
                </li>

             
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <?php


                if ($page=='') {
                     include "interv_list.php";

                  }else{
                              echo "
                            <br>
                            <div class=\"alert alert-danger text-center\">
                               <h2>You are not allowed to access this module. </h2>
                            </div>
                       
                     ";   
                               
                }                

          include 'dbclose.php';
          ?>

          </div>
        </div>
        <!-- /page content -->

       <br><br><br><br>
      </div>
    </div>

    <!-- compose -->
    <div class="compose col-md-6 col-xs-12">
      <div class="compose-header">
        New Message
        <button type="button" class="close compose-close">
          <span>×</span>
        </button>
      </div>

      <div class="compose-body">
        <div id="alerts"></div>

        <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
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

        <div id="editor" class="editor-wrapper"></div>
      </div>

      <div class="compose-footer">
        <button id="send" class="btn btn-sm btn-success" type="button">Send</button>
      </div>
    </div>
    <!-- /compose -->


    <!-- change password modal -->
    <div class="modal fade bs-example-modal-sm modal_change_password" tabindex="-1" role="dialog" aria-labelledby="modal_update_deceased">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Change Password</h4>


            </div>
            <div class="modal-body">
              <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                <form method="post">

                 <div class="form-group ">
                  <label class="control-label " for="current_password">
                   Current Passowrd
                  </label>
                  <div class="input-group">
                   <div class="input-group-addon">
                    <i class="fa fa-gg">
                    </i>
                   </div>
                   <input class="form-control" id="current_password" name="current_password" type="password"  />
                   <input type="hidden" name="Member_Code_hidden" id="Member_Code_hidden"/>
                  </div>
                 </div>

                 <div class="form-group ">
                  <label class="control-label " for="new_passowrd">
                   New Passowrd 
                  </label> (<i>must be 8 character lenght</i>)
                  <div class="input-group">
                   <div class="input-group-addon">
                    <i class="glyphicon glyphicon-ok-circle">
                    </i>
                   </div>
                   <input class="form-control" disabled="true" id="new_passowrd" name="new_passowrd" type="password" />
                  </div>

                 </div>
                 <div class="form-group ">
                  <label class="control-label requiredField" for="verify_password">
                   Verify Passowrd
                   <span class="asteriskField">
                    *
                   </span>
                  </label>
                  <div class="input-group">
                   <div class="input-group-addon">
                    <i class="glyphicon glyphicon-eye-open">
                    </i>
                   </div>
                   <input class="form-control" disabled="true" id="verify_password" name="verify_password"  type="password"/>
                  </div>
                 </div>


                 <div class="form-group">
                  <div>
                   <button class="btn btn-primary" id="btn_change_password_submit">
                    Save
                   </button>
                  </div>
                 </div>
                 </form>
               </div>
              </div>            




            </div>
   
    </div>
  </div>
</div>


<div class="modal fade bs-example-modal-sm upload_photo_modal" tabindex="-1" role="dialog" aria-labelledby="upload_photo_modal">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Upload Photo</h4>
            </div>
            <div class="modal-body">
              <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
               <form id="uploadfile2" action="" method="post" enctype="multipart/form-data">

                 <div class="form-group ">
                  <label class="control-label " for="file">
                   UPLOAD PHOTO
                  </label>
                  <div class="input-group">
                   <div class="input-group-addon">
                    <i class="fa fa-gg">
                    </i>
                   </div>
                   <input class="form-control" id="imgfile" name="imgfile" type="file"  />
                   <input id="user_id" name="user_id" type="hidden" value="<?=$user_id?>"  />
                  </div>
                 </div>

                 <div class="form-group">
                  <div class="pull-right">
                   <input type="submit" value="UPLOAD" class="btn btn-primary" id="btn_upload_photo"/ >
                  </div>
                 </div>
                 </form>
               </div>
              </div>            
            </div>
   
    </div>
  </div>
</div>




<div class="modal fade bs-example-modal-sm about_modal" tabindex="-1" role="dialog" aria-labelledby="about_modal">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">About </h4>
            </div>
            <div class="modal-body">
              <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <b>App Name:</b> DSWD Biometric System <br>
                  <b>Version :</b> 2.0 <br><hr>
                  <b>System Developer :</b> Alden A. Quinones | <a href="mailto:alden.roxy@gmail.com">alden.roxy@gmail.com</a><br>
                  <b>UX/UI Designer  :</b> Roxanne Eve G. Quinones  | <a href="mailto:roxy.guibone@gmail.com">roxy.guibone@gmail.com</a><br>

               </div>
              </div>            
            </div>
   
    </div>
  </div>
</div>















  
  <script>
  

$(document).ready(function (e) {


$('#imgfile').bind('change', function() {
    if (this.files[0].size > 1000000){
        $("#imgfile").replaceWith($("#imgfile").val('').clone(true));
        alert("The file is too huge. Please make sure that the file size will not exceed to 1MB");
        return;
    }else if ($('#imgfile').val().substr( ($('#imgfile').val().lastIndexOf('.') +1)) != 'jpg'){
        $("#imgfile").replaceWith($("#imgfile").val('').clone(true));
        alert("Invalid file type. Please select jpg file format!");
        return;        
    }
});




    //SAVE form
    $('#uploadfile2').on("submit",function (e) {
        e.preventDefault();  

         $.ajax({  
            contentType: false,       
            cache: false,             
            processData:false,        
            type: 'POST',
            url: 'proc/upload_profile_photo_proc.php', 
            data: new FormData(this),
            success: function(response) {
                 //alert(response);
                 if (response.indexOf("**success**") > -1){
                    alert('Pofile Picture successfully updated.');
                    window.location="index.php";
                 }else if (response.indexOf("Notice") > -1){
                    alert("Upload failed: An error has occured while uploading data. Please contact your system developer. ");
                 }
            }
        });       


    });
});


 




  //CHANGE PASSOWRD
    $(document).on('click','#btn_change_password_submit',function(e){
        e.preventDefault();
        
        var cur_password = "<?=$user_password?>";
        var user_inputed_cur_password = $('#current_password').val();
        var user_inputed_new_password = $('#new_passowrd').val();
        var user_inputed_ver_password = $('#verify_password').val();

        var error_count = 0;
        console.log('cur_password: '+cur_password);
        if (user_inputed_cur_password == '') {
            $('#current_password').closest("div").addClass("has-error");
            $('#current_password').focus();
            alert('Current Password is required');            
        }else if (user_inputed_cur_password != cur_password){
            $('#current_password').closest("div").addClass("has-error");
            $('#current_password').focus();
            alert('Incorrect Current Password');
        }else if (user_inputed_new_password == '') {
        //}else if (user_inputed_new_password.len) {
            $('#new_passowrd').closest("div").addClass("has-error");
            $('#new_passowrd').focus();
            alert('You forgot to enter your password');
        }else if (user_inputed_new_password != user_inputed_ver_password) {
            $('#verify_password').closest("div").addClass("has-error");
            $('#verify_password').focus();
            alert('Password mismatch');
        }

           $.ajax({  
              type: 'GET',
              url: './proc/change_password_proc.php', 
              data: { 
                  passowrd:user_inputed_new_password,
                  user_id:"<?=$user_id?>"
              },
              success: function(response) {
                   if (response.indexOf("**success**") > -1){
                      $('#current_password').val('');
                      $('#new_passowrd').val('');
                      $('#verify_password').val('');
                      alert('Password changed! You have to logout to take effect.');          
                   }else if (response.indexOf("**failed**") > -1){
                      alert("Change password failed!");
                     
                   }
                   
              }
          }); 
        


    });

    $("#new_passowrd").keyup(function() {
        if($(this).val().length > 7) {
            // $('#rpassword2').removeClass('');
             $("#verify_password").prop('disabled',false);
        } else {
             // Disable submit button
             $("#verify_password").val('');
             $("#verify_password").prop('disabled',true);
        }
    });
    $("#current_password").keyup(function() {
        var cur_password = "<?=$user_password?>";

        if($(this).val() == cur_password) {
             $("#new_passowrd").prop('disabled',false);
        } else {
             // Disable submit button
             $("#new_passowrd").val('');
             $("#new_passowrd").prop('disabled',true);
        }
    });




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

    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>


  </body>
</html>



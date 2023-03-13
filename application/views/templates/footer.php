

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Intervention Monitoring System by <a href="http://fo12.dswd.gov.ph" target="_blank">DSWD XII</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
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

        var cur_password = "get user password from controller using post";
        var user_inputed_cur_password = $('#current_password').val();
        var user_inputed_new_password = $('#new_passowrd').val();
        var user_inputed_ver_password = $('#verify_password').val();

        var error_count = 0;
        console.log('cur_password: '+cur_password);
        if (user_inputed_cur_password == '') {
            $('#current_password').closest("div").addClass("has-error");
            $('#current_password').focus();
            alert('Current Password is required');
            return;
        }else if (user_inputed_cur_password != cur_password){
            $('#current_password').closest("div").addClass("has-error");
            $('#current_password').focus();
            alert('Incorrect Current Password');
            return;
        }else if (user_inputed_new_password == '') {
        //}else if (user_inputed_new_password.len) {
            $('#new_passowrd').closest("div").addClass("has-error");
            $('#new_passowrd').focus();
            alert('You forgot to enter your password');
            return;
        }else if (user_inputed_new_password != user_inputed_ver_password) {
            $('#verify_password').closest("div").addClass("has-error");
            $('#verify_password').focus();
            alert('Password mismatch');
            return;
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
        var cur_password = "aaaaaaaaaaaaaa";

        if($(this).val() == cur_password) {
             $("#new_passowrd").prop('disabled',false);
        } else {
             // Disable submit button
             $("#new_passowrd").val('');
             $("#new_passowrd").prop('disabled',true);
        }
    });




  </script>






    <!-- daashboard - scripts ----------------------------------------------------------->
    <!-- jQuery -->
    <script src="<?=base_url()?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url()?>vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url()?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=base_url()?>vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?=base_url()?>vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?=base_url()?>vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?=base_url()?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?=base_url()?>vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?=base_url()?>vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?=base_url()?>vendors/Flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?=base_url()?>vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?=base_url()?>vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?=base_url()?>vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?=base_url()?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?=base_url()?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?=base_url()?>vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?=base_url()?>vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?=base_url()?>vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?=base_url()?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?=base_url()?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?=base_url()?>vendors/moment/min/moment.min.js"></script>
    <script src="<?=base_url()?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?=base_url()?>build/js/custom.js"></script>
    <!-- /daashboard - scripts ----------------------------------------------------------->

    <!-- Datatables -->
    <script src="<?=base_url()?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url()?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?=base_url()?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?=base_url()?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?=base_url()?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?=base_url()?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?=base_url()?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?=base_url()?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?=base_url()?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?=base_url()?>vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?=base_url()?>vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?=base_url()?>vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- ***************************************************************************** -->
    <!--* bootstrap-wysiwyg -->
    <script src="<?=base_url()?>vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?=base_url()?>vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?=base_url()?>vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?=base_url()?>vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?=base_url()?>vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?=base_url()?>vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?=base_url()?>vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?=base_url()?>vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?=base_url()?>vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="<?=base_url()?>vendors/starrr/dist/starrr.js"></script>
    <!-- ***************************************************************************** -->


  </body>
</html>




<div class="modal fade upload_photo_modal" id="upload_photo_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
               <form id="uploadfile2" action="" method="post" enctype="multipart/form-data">

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01"><i class="fa fa-gg">
                    </i></span>
                  </div>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="imgfile" name="imgfile" aria-describedby="inputGroupFileAddon01">
                    <input id="user_id" name="user_id" type="hidden" value="<?=$user_id?>"  />
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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

<div class="modal fade modal_change_password" id="modal_change_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

              <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                <form method="post">

                 <div class="form-group ">
                  <label class="control-label " for="current_password">
                   Current Passowrd
                  </label>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <i class="fa fa-gg"></i></span>
  </div>
  <input type="password" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="current_password" name="current_password">
</div>

                 </div>



                 <div class="form-group ">
                  <label class="control-label " for="new_passowrd">
                   New Passowrd
                  </label> (<i>must be 8 character lenght</i>)


<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <i class="glyphicon glyphicon-ok-circle"></i></span>
  </div>
  <input type="password" class="form-control" placeholder="password" aria-label="password" aria-describedby="basic-addon1" id="new_passowrd" name="new_passowrd">
</div>

                 <div class="form-group ">
                  <label class="control-label requiredField" for="verify_password">
                   Verify Passowrd
                   <span class="asteriskField">
                    *
                   </span>
                  </label>


<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">  <i class="glyphicon glyphicon-eye-open"></i></span>
  </div>
  <input type="password" class="form-control" placeholder="password" aria-label="password" aria-describedby="basic-addon1" id="verify_password" name="verify_password">
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

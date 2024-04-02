<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DSWD XII | <?=APP_TITLE;?> </title>

    <!-- Bootstrap -->
    <link href="<?=site_url()?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=site_url()?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=site_url()?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?=site_url()?>vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=site_url()?>build/css/custom.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?=site_url()?>vendors/jquery/dist/jquery.min.js"></script>

    <!-- Include sweetalert JavaScript and CSS files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>

  </head>

  <body class="login">
    <div>


      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="container" novalidate="" action="/echo" method="POST" id="myForm">
              <h1>Login Form</h1>

                <div class="control-group">
                  <div class="controls">
                    <input type="text" id="username" placeholder="Your Global Protect Account" name="username" value="" class="form-control" required>
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                    <input type="password" id="password" placeholder="Password" name="password" value="" class="form-control" required>
                  </div>
                </div>

              <div>
                <button type="submit" class="btn btn-default submit" id="btn_login" href="index.html" >Log in</button>
                <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
              </div>

              <div class="clearfix"></div>

              <div class="separator">



                <div>
                  <h1><img src="<?=site_url()?>images/pantawid.svg" style="width: 40px;fill:#ffffff;"> DSWD XII | <?=APP_TITLE?></h1>
                 
                </div>
                             

              </div>

              <div class="separator">
                <p class="change_link">This application accepts <strong>Global Protect accounts</strong> for login</p>     
                <p class="change_link">Facing any issues? Please feel free to reach out to the developer Alden Quinones at  <a href="mailto:aaquinones.fo12@dswd.gov.ph" class=""> <u> aaquinones.fo12@dswd.gov.ph </u></a>. Your feedback is valuable! Let's work together to make your experience better.</p>     




                <div class="clearfix"></div>
                <br />

                <div>
                 
                  <p>DSWD XII © 2024 All Rights Reserved. <br> <i>Developed by Alden A. Quinones / </i></p>
                   <p></p>
                </div>
                              <div id=rmessagebox></div>

              </div>

            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form class="container" novalidate="" action="/echo" method="POST" id="myForm2">
              <h1>Create Account</h1>
                <div class="control-group">

                    <input type="text" id="rfullname" placeholder="Fullname" name="rfullname"  class="form-control" value="test1" required>
                    <!-- <div class="invalid-feedback">Sorry, you missed this one.</div> -->
                </div>

                <div class="control-group">
                  <div class="controls">
                    <input type="email" id="remail" placeholder="Email" name="remail" value="test1@test.com"  class="form-control" required>
                  </div>
                </div>


                <div class="control-group" >
                  <div class="controls">
                    <input type="text" id="rposition" placeholder="Position" name="rposition" value="test_pos"  class="form-control" required>
                  </div>
                </div>

                <div class="control-group" >
                  <div class="controls">
                    <input type="text" id="rassignment" placeholder="Area of Assignment" name="rassignment"  value="test_area"  class="form-control" required>
                  </div>
                </div>

                <div class="control-group" >
                  <div class="controls">
                    <input type="text" id="rusername" placeholder="Username" name="rusername" value="test_user"   class="form-control" required>
                  </div>
                </div>

                <div class="control-group" >
                  <!-- Password-->
                  <div class="controls">
                    <input type="password" id="rpassword1" placeholder="Password"  name="rpassword1" value="test_pass"   class="form-control" required>
                  </div>
                </div>

                <div class="control-group" >
                  <!-- Password -->
                  <div class="controls">
                    <input type="password" id="rpassword2" placeholder="Confirm Password" name="rpassword2"  class="form-control " disabled required>
                  </div>
                </div>



                <button type="submit" class="btn btn-default submit" id="btn_register" href="index.html" >Register</button>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> DSWDI IMT v0.2!</h1>
                  <p>DSWD XII © 2024 All Rights Reserved.</p>
                 


                </div>
                <div id=rmessagebox2></div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

<!--
<form class="container" novalidate="" action="/echo" method="POST" id="myForm">
    <div class="form-group">
        <label class="form-control-label" for="inputSuccess1">Enter some input</label>
        <input type="text" class="form-control" name="i1" id="inputSuccess1" required>
        <div class="valid-feedback">Success! You've done it.</div>
        <div class="invalid-feedback">No, you missed this one.</div>
    </div>
    <div class="form-group">
        <label class="form-control-label" for="inputSuccess2">Enter some input</label>
        <input type="text" class="form-control" name="i2" required id="inputSuccess2">
        <div class="valid-feedback">Nice! You got this one!</div>
        <div class="invalid-feedback">Sorry, you missed this one.</div>
    </div>
    <div>
        <button type="submit" class="btn btn-secondary" id="btn_login">Try It!</button>
    </div>
</form>
<hr>
<form class="container">
    <div class="form-group">
        <label class="form-control-label" for="inputSuccess3">Input with <code>is-valid</code></label>
        <input type="text" class="form-control is-valid" id="inputSuccess3">
        <div class="valid-feedback">Success! You've done it.</div>
    </div>
</form>
 -->

    <!-- buttom page: above the closing body tag -->
    <!-- jQuery -->
    <!-- <script src="../vendors/jquery/dist/jquery.min.js"></script> -->
<script>


//login
$("#btn_login").click(function(event) {
    event.preventDefault(); // avoid to execute the actual submit of the form.
    var error_count = 0;

    // Fetch form to apply custom Bootstrap validation
    var form = $("#myForm")
    if (form[0].checkValidity() === false) {
      event.preventDefault()
      event.stopPropagation()
    }
      form.addClass('was-validated');
    // Perform ajax submit here...

    if ($('#username').val().trim()=='') {
        $('#messagebox').hide();
        $('#messagebox').fadeIn('slow');
        $('#messagebox').html('<br><div class="alert alert-danger">Plese enter username!.</div>');
        $('#username').focus();
        return;
    }


    if (error_count==0){
      //send POST here
        console.log('authenticating...');
        //https://lottiefiles.com/free-animations/please-wait
            swal.fire({
              title: "Logging-in! Please wait",
              html: '<img src="https://media0.giphy.com/media/xTk9ZvMnbIiIew7IpW/giphy.gif" style="width: 400px; height: 300px;">',
              showConfirmButton: false,
              allowOutsideClick: false,
              allowEscapeKey: false
            });


        $.ajax({
            type: 'POST',
            url: "authenticate",
            data: {
                username:$('#username').val(),
                password:$('#password').val(),
                mode:$('#mode').val()
            },
            success: function(response) {
                 var responseObject = JSON.parse(response);    
                 
                 if (responseObject.success == false) {
                    // $('#rmessagebox').hide();
                    // $('#rmessagebox').fadeIn('slow');
                    // $('#rmessagebox').html('<br><div class="alert alert-danger">'+responseObject.message+'</div>')        
                    setTimeout(function() {
                                Swal.fire({
                                  icon: "error",
                                  title: "Oops...",
                                  text: "Login failed. Please check your username and password and try again. ",
                                  footer: 'If you experience problems, contact send email to <a href="mailto:aaquinones.fo12@dswd.gov.ph">aaquinones.fo12@dswd.gov.ph</a>.'
                                });

                    }, 2000);

                 }else{
                    // window.location.href = "<?=site_url()?>";
                    console.log(responseObject);
                 }

            }
        });


    } //if error ==0


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


        // swal.fire({
        //   title: "You are about to route documents?",
        //   text: "Once sent, you will not be able to undo it!",
        //   icon: "info",
        //   showCancelButton: true,
        //   confirmButtonColor: "#3085d6",
        //   cancelButtonColor: "#d33",
        //   confirmButtonText: "Yes, send it!",
        //   cancelButtonText: "No, cancel"
        // }).then((result) => {
        //   if (result.isConfirmed) {
        //     swal.fire({
        //       title: "Routing documents! Please wait...",
        //       html: '<img src="' + base + 'assets/images/mail-sending.gif" style="width: 400px; height: 300px;">',
        //       showConfirmButton: false,
        //       allowOutsideClick: false,
        //       allowEscapeKey: false
        //     });

        //     // $.ajax(base + 'routing/send/', {
        //     //   type: "POST",
        //     //   data: routing_form_data,
        //     //   error: function (data) {
        //     //     Swal.fire({
        //     //       icon: 'error',
        //     //       title: 'Oops...',
        //     //       text: 'An error has occurred!',
        //     //       footer: 'Please contact <a href="">aaquinones.fo12@dswd.gov.ph</a>'
        //     //     })
        //     //   },
        //     //   success: function (data) {
        //     //     var send_mail_result = jQuery.parseJSON(data);
        //     //     if (send_mail_result.result == 'success') {
        //     //       swal.fire({
        //     //         title: "Congratulation!",
        //     //         text: "You have routed the document successfully!",
        //     //         icon: "success"
        //     //       }).then((result) => {
        //     //         if (result.isConfirmed) {
        //     //           // Redirect to your desired page
        //     //           window.location.href = base+"routing";
        //     //         }
        //     //       });

        //     //       // Additional actions on success can be added here

        //     //     } else {

        //     //       Swal.fire({
        //     //         icon: 'error',
        //     //         title: 'Oops...',
        //     //         text: 'An error has occurred!',
        //     //         footer: 'Please contact <a href="">aaquinones.fo12@dswd.gov.ph</a>' 
        //     //       })

        //     //     }
        //     //   },
        //     //   complete: function () {
        //     //     //do nothing
        //     //   }
        //     // });
        //   }
        // });



</script>

<?php
if(isset($_SESSION['id'])&&!empty($_SESSION['id'])){
   header("Location: index.php");
   exit();
}
?>
<?php include "include/head.php" ?> 
<style type="text/css">
  body {
    overflow-x: hidden;
    background-color: white;
  }
  .errors{
    color: red !important;
    font-weight: lighter;
  }
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}

input[type=number] {
    -moz-appearance:textfield; /* Firefox */
}
 

</style>
  <div class="page-header header-filter" style="background-image: url('img/norsu-front.jpg'); background-size: cover; background-position: top center;">
    <div class="container" style="padding-top: 120px;">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
          <div class="card card-signup">
            <form class="form-signin" method="post" id="register-form">
               <div class="header header-info text-center">
                <h4 class="card-title">CSIT Alumni Tracer System</h4>
              </div>
               <p class="description text-center">Register your own account.</p>
              <div align="center" id="error"></div>
              <div class="card-content">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">person</i>
                  </span>
                  <input required="required" autocomplete="off" autofocus=""  type="text" class="form-control" placeholder="First Name" name="fname" id="fname">
                </div>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">person_add</i>
                  </span>
                  <input required="required" autocomplete="off" autofocus=""  type="text" class="form-control" placeholder="Last Name:" name="lname" id="lname">
                </div>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">perm_contact_calendar</i>
                  </span>
                  <input required="required" autocomplete="off" autofocus=""  type="number" min="0" step="1" pattern="[0-9]*" class="form-control" placeholder="Student ID" name="stuid" id="stuid">
                </div>
                  <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">account_circle</i>
                  </span>
                  <div class="form-group label-floating" id="error1">
                  <input required="required" autocomplete="off" autofocus=""  type="text" class="form-control" placeholder="Username" name="username" id="username">
                </div>
                </div>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">email</i>
                  </span>
                  <div class="form-group label-floating has-error" id="error2">
                <input required="required" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}"
                type="email" class="form-control" placeholder="Email address" name="email" id="email">
                </div>
                <div align="center" id="email_check"></div>
              </div>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">lock_outline</i>
                  </span>
                  <input required="required" autocomplete="off" type="password" class="form-control" placeholder="Password" name="password" id="password" />
                </div>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">lock</i>
                  </span>
                  <input type="password" autocomplete="off" required="required" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
                </div>

            <div style="margin-left: 40px; margin-top: 0;" class="footer text-center">
                <button style="margin: 0 auto;" name="btn-save" id="btn-submit" class="btn btn-info"><i class="fa fa-sign-in-alt"></i><span style="font-size: 13px;"> Register</span></button><br>
              </div>
              <div style="width: 65%; margin: 0 auto; padding-top: 20px;" class="footer text-center">
              <p>Already have account? <a href="signin.php">Login now!</a></p>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>

</div>
</body>
  <!--   Core JS Files   -->

  <script type="text/javascript" src="js/jquery2.min.js"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.toast.min.js"></script>
  <script src="js/signup.js"></script>
  <script src="js/material.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
  <script src="js/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/   -->
  <script src="js/bootstrap-tagsinput.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
  <!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
  <script src="js/material-kit.js?v=1.2.1" type="text/javascript"></script>
  <script type="text/javascript">
  //paste this code under the head tag or in a separate js file.
  // Wait for window load
  $(window).on('load', function(){
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");
  });
  </script>
</html>

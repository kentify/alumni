<?php include "../include/ahead.php" ?>
<style type="text/css">
  body {
    overflow-x: hidden;
  }
  .errors{
    color: red !important;
    font-weight: lighter;
  }
  .btn:focus, .btn:active, .btn:active:focus, .navbar .navbar-nav > li > a.btn:focus, .navbar .navbar-nav > li > a.btn:active, .navbar .navbar-nav > li > a.btn:active:focus{
    text-align: center;
  } 
</style>
  <div class="page-header header-filter" style="background-image: url('../img/norsu-front.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
          <div class="card card-signup" style="margin-top: -20px;">
            <form class="form-login" method="post" id="login-form">
              <div class="header text-center" style="background-color: transparent; box-shadow: none; margin-top:-70px; margin-bottom: 0;">
                <img src="img/norsu.png" style="width: 130px;">
              </div>
              <p class="description text-center">Login as Administrator.</p>
              <div class="card-content">
                <div style="font-size: 14px; width: 300px;" align="" id="error"></div>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">person</i>
                  </span>
                  <input required="required" autofocus="autofocus"  type="text" class="form-control" placeholder="Username" name="username" id="username">
                </div>

                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">lock_outline</i>
                  </span>
                  <input required="required" type="password" class="form-control" placeholder="Password" name="password" id="password" />
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" id="remember" name="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>>
                    Remember me
                  </label>
                </div>
              </div>
              <div style="width: 65%; margin: 0 auto;" class="footer text-center">
                <button style="margin: 0 auto;" name="login_button" id="login_button" class="btn btn-info btn-block"><i style="font-weight: bold;" class="material-icons">lock</i><span style="font-size: 13px;"> Login</span></button><br>
              </div>
             
            </form>
          </div>
        </div>
      </div>
    </div>


  </div>

</body>
  <!--   Core JS Files   -->
  <script src="../js/jquery2.min.js" type="text/javascript"></script>
  <script src="../js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../js/material.min.js"></script>
  <script src="../js/jquery.validate.min.js"></script>
  <script src="../js/jquery.toast.min.js"></script>
  <script src="dist/js/admin.js"></script>
 
  <!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
  <script src="../js/moment.min.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
  <script src="../js/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
  <script src="../js/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
  <script src="../js/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--  Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/   -->
  <script src="../js/bootstrap-tagsinput.js"></script>
  <!--  Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
  <script src="../js/jasny-bootstrap.min.js"></script>
  <!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
  <script src="../js/material-kit.js?v=1.2.1" type="text/javascript"></script>
  <script type="text/javascript">
  //paste this code under the head tag or in a separate js file.
  // Wait for window load
  $(window).on('load', function(){
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");
  });
  </script>
 
  
</html>

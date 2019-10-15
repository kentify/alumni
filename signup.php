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
.ui-datepicker-calendar {
    display: none;
    }
.btn, .navbar .navbar-nav > li > a.btn{
  text-transform: none;
  font-size: 14px;
}
.btn:focus, .btn:active, .btn:active:focus, .navbar .navbar-nav > li > a.btn:focus, .navbar .navbar-nav > li > a.btn:active, .navbar .navbar-nav > li > a.btn:active:focus{
    text-align: center;
  }

</style>
  <div class="page-header header-filter" style="background-image: url('img/norsu-front.jpg'); background-size: cover; background-position: fixed; height:100%;">
    <div class="container" style="padding-top: 100px;">
      <div class="row">
        <div class="col-md-12 col-sm-12">
         <div class="card card-signup" style="margin-top: -20px;">
            <form method="post" class="form-signin" id="register-form" style="padding:20px 30px 0px 20px;">
              <div class="header text-center" style="background-color: transparent; box-shadow: none; margin-top:-110px; padding-bottom: 0;">
                <h4 class="card-title"><img src="img/norsu.png" style="width: 130px;"></h4>
              </div>
                    <p class="description text-center">Register an account</p>
                    <div style="font-size: 14px; width:100%; margin:0 auto;" align="center" id="error"></div>
                    <div class="row clearfix">
                      <div class="col-md-3 col-sm-12">  
                             <div class="input-group">
                             <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                      
                            <div class="form-group label-floating">
                              <label class="control-label">Alumni ID:</label>
                                 <input required="required" autocomplete="off" autofocus=""  type="text" class="form-control" name="alumni_id" id="alumni_id">
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">  
                             <div class="input-group">
                             <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>

                            <div class="form-group label-floating">
                              <label class="control-label">Firstname</label>
                                 <input required="required" autocomplete="off" autofocus=""  type="text" class="form-control" name="fname" id="fname">
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">  
                             <div class="input-group">
                             <span class="input-group-addon">
                            <i class="material-icons">person_outline</i>
                        </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Middle Name</label>
                                 <input required="required" autocomplete="off"  type="text" class="form-control" name="mname" id="mname">
                                 </div>
                            </div>
                        </div>    
                        <div class="col-md-3 col-sm-12"> 
                                    <div class="input-group">
                                        <span class="input-group-addon">
                            <i class="material-icons">person_add</i>
                        </span>
                              <div class="form-group label-floating">
                                <label class="control-label">Last Name</label>
                                    <input required="required" autocomplete="off"  type="text" class="form-control" name="lname" id="lname">
                                        </div>
                                    </div>
                            </div>
                      </div>
                <div class="row clearfix">
                    <div class="col-md-5 col-sm-6">   
                        <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-group label-floating">
                              <label class="control-label">Email Address</label>
                            <input type="email" autocomplete="off" class="form-control" name="email">
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">             
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">calendar_today</i>
                        </span>
                        <div class="form-group label-floating is-focused">
                              <label class="control-label">Date of Birth</label>
                            <input type="date" autocomplete="off" class="form-control" min="0" name="dob">
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                   <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">wc</i>
                        </span>
                        <div class="form-group label-floating">
                        <label class="control-label">Gender</label>
                          <select required name="gender" title="gender" class="form-control">
                            <option selected disabled value=""></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                         </select>
                        </div>
                    </div>
                  </div>
                </div>
          <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                   <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">local_library</i>
                        </span>
                        <div class="form-group label-floating is-focused">
                        <label class="control-label">Course</label>
                          <select required name="course" title="course" class="form-control">
                              <option selected disabled value="">Choose Course</option>
                                       <?php
                                        include 'db.php';
                                        $query = "SELECT * FROM course";
                                        $results = mysqli_query($con,$query);

                                        while ($rows = mysqli_fetch_assoc($results)){ 
                                        ?>
                                        <option value="<?php echo $rows['description'];?>"><?php echo $rows['description'];?></option>

                                        <?php
                                        } 
                                        ?>
                         </select>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                   <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">business</i>
                        </span>
                        <div class="form-group label-floating is-focused">
                        <label class="control-label">Department</label>
                          <select required name="department" title="department" class="form-control">
                                        <option selected disabled value="">Choose Department</option>
                                        <?php
                                        include 'db.php';
                                        $query = "SELECT * FROM department";
                                        $results = mysqli_query($con,$query);

                                        while ($rows = mysqli_fetch_assoc($results)){ 
                                        ?>
                                        <option value="<?php echo $rows['department'];?>"><?php echo $rows['description'];?></option>

                                        <?php
                                        } 
                                        ?>
                         </select>
                        </div>
                    </div>
                  </div>
          </div>
          <div class="row clearfix">
                        <div class="col-md-5 col-sm-12">  
                             <div class="input-group">
                             <span class="input-group-addon">
                            <i class="material-icons">location_city</i>
                        </span>
                        <div class="form-group label-floating is-focused">
                        <label class="control-label">School/Campus</label>
                                 <select required name="campus" title="campus" class="form-control">
                                        <option selected disabled value="">Choose School/Campus</option>
                                       <?php
                                        include 'db.php';
                                        $query = "SELECT * FROM campus";
                                        $results = mysqli_query($con,$query);

                                        while ($rows = mysqli_fetch_assoc($results)){ 
                                        ?>
                                        <option value="<?php echo $rows['name'];?>"><?php echo $rows['description'];?></option>

                                        <?php
                                        } 
                                        ?>
                         </select>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">  
                             <div class="input-group">
                             <span class="input-group-addon">
                            <i class="material-icons">school</i>
                        </span>
                            <div class="form-group label-floating">
                        <label class="control-label">Year Graduated</label>
                                 <input required="required" autocomplete="off"  type="text" class="form-control date-own" name="graduated" id="graduated">
                                 </div>
                            </div>
                        </div>    
                        <div class="col-md-4 col-sm-12"> 
                                    <div class="input-group">
                                        <span class="input-group-addon">
                            <i class="material-icons">phone</i>
                        </span>
                              <div class="form-group label-floating">
                        <label class="control-label">Contact Number</label>
                                    <input required="required" autocomplete="off"  type="number" class="form-control" name="contact" id="contact">
                                        </div>
                                    </div>
                            </div>
                      </div>
          
                       
                  <div class="row clearfix">
                    <div class="col-md-4 col-sm-12">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">account_circle</i>
                        </span>
                        <div class="form-group label-floating">
                        <label class="control-label">Username</label>
                            <input type="text" autocomplete="off" class="form-control" name="username">
                        </div>
                      </div>
                    </div>  
                  <div class="col-md-4 col-sm-12">
                   <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock_outline  </i>
                        </span>
                        <div class="form-group label-floating">
                        <label class="control-label">Password</label>
                           <input required="required" autocomplete="off" type="password" class="form-control" name="password" id="password" />
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                   <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-group label-floating">
                        <label class="control-label">Confirm Password</label>
                            <input type="password" autocomplete="off" required="required" class="form-control" name="cpassword" id="cpassword">
                            <input type="hidden" name="country" value='<?php
                              function ip_details($ip)
                              {
                              $json = file_get_contents("http://ipinfo.io/{$ip}");
                              $details = json_decode($json);
                              return $details;
                              }

                              $details = ip_details(''); 

                              
                              echo $details->city; 
                           
                              ?>'>
                        </div>
                    </div>
                  </div>    
                 </div>
                 
                  <br>
                <div style="margin-left: 40px; margin-top: 0;" class="footer text-center">
                <button align="center" style="margin: 0 auto;" name="btn-save" id="btn-submit" class="btn btn-info"><i class="fa fa-sign-in-alt"></i><span style="font-size: 13px;"> Register</span></button>
              
                 <p align="center" style="padding-top: 50px;">by clicking register, you agree to the <a href="">terms and conditions.</a></p>
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
  <script>
    $('document').ready(function() {
/* handle form validation */
$("#register-form").validate({
   errorClass: 'errors',
          rules:
          {
          alumni_id:{
          required: true,
          minlength: 4
          },
          fname: {
          required: true,
          minlength: 1
          },
          mname: {
          required: true,
          minlength: 1
          },
          lname: {
          required: true,
          minlength: 1
          },
          email: {
          required: true,
          email: true
          },
          dob: {
          required: true,
          minlength: 1
          },
          gender: {
          required: true,
          minlength: 1
          },
          course: {
          required: true,
          minlength: 1
          },
          department: {
          required: true,
          minlength: 1
          },
          campus: {
          required: true,
          minlength: 1
          },
          graduated: {
          required: true,
          minlength: 1
          },
          contact: {
          required: true,
          minlength: 11
          },
          username: {
          required: true,
          minlength: 4
          },
          password: {
          required: true,
          minlength: 1,
          maxlength: 15
          },
          cpassword: {
          required: true,
          equalTo: '#password'
          }
         
          },
          messages:
          {
          alumni_id:{
          required: "This field is required.",
          minlength: "ID must atleast have 4 digits"
          },
          fname:{
          required: "This field is required.",
          minlength: "Firstname must atleast have 1 character"
          },
          mname:{
          required: "This field is required.",
          minlength: "Middlename must atleast have 1 character"
          },
          lname:{
          required: "This field is required.",
          minlength: "Lastname must atleast have 1 character"
          },
          email: "Enter a valid email address",
          dob:{
          required: "This field is required.",
          minlength: "Please enter your birth date."
          },
          gender:{
          required: "This field is required.",
          minlength: "Please choose a gender."
          },
          course:{
          required: "This field is required.",
          minlength: "Please choose your course"
          },
          department:{
          required: "This field is required.",
          minlength: "Please choose your department"
          },
          campus:{
          required: "This field is required.",
          minlength: "Please choose your campus"
          },
          graduated:{
          required: "This field is required.",
          minlength: "Enter the year you graduated"
          },
          contact:{
          required: "This field is required.",
          minlength: "Contact must atleast have 11 characters"
          },
          username:{
          required: "The field is required.",
          minlength: "Username must atleast have 4 characters"
          },
          password:{
          required: "The Password field is required.",
          minlength: "Password must atleast have 4 characters"
          },
          cpassword:{
          required: "Please retype your password",
          equalTo: "Password doesn't match"
          },
          },
          submitHandler: submitForm
  });
        /* handle form submit */
        function submitForm() {
        var data = $("#register-form").serialize();

        $.ajax({
        type  : 'POST',
        cache : false,
        url   : 'register.php',
        data  : data,
            beforeSend: function() {
            $('#error').addClass('hidden');
            $("#btn-submit").html('<i class="fas fa-spinner fa-spin"></i> &nbsp;<b align="center">Checking ...</b>');
            },
            success : function(response) {
            if(response=="1"){
            $("#error").fadeIn(1000, function(){
            $('#error').removeClass('hidden');
            $("#error").html('<div class="alert alert-danger"><span class="fa fa-info-circle"></span> Username is already taken.</div>');
            $("#btn-submit").addClass('btn-info'); 
            $("#btn-submit").html('<span class="fa fa-sign-in-alt"></span> Register');
            });
            }else if(response=="2"){
             $("#error").fadeIn(1000, function(){
            $('#error').removeClass('hidden');
            $("#error").html('<div class="alert alert-danger"><span class="fa fa-info-circle"></span> Email is already taken.</div>');
            $("#btn-submit").addClass('btn-info'); 
            $("#btn-submit").html('<span class="fa fa-sign-in-alt"></span> Register');
            });
            }else if(response=="registered"){
            $("#btn-submit").html('<i class="fas fa-spinner fa-spin"></i> &nbsp;<b align="center"> Signing up...</b>');
            $.toast({
            text: 'Success! Redirecting please wait ..',
            textAlign: 'center',
            bgColor: '#9EC600',
            loader: true, 
            loaderBg: '#424743',
            position: 'top-right',  
            textColor: 'white'
            });
            setTimeout(' window.location.replace("signin.php"); ',3000);
            }
            else if(response=="unregistered"){
             $("#error").fadeIn(1000, function(){
            $('#error').removeClass('hidden');
            $("#error").html('<div class="alert alert-danger"><span class="fa fa-info-circle"></span> Name/ID is already registered or invalid.</div>');
            $("#btn-submit").addClass('btn-info'); 
            $("#btn-submit").html('<span class="fa fa-sign-in-alt"></span> Register');
            });
            
            }else{
            $("#error").fadeIn(1000, function(){
            $('#error').removeClass('hidden');
            $("#error").html('<div class="alert alert-danger"><span class="fa fa-info-circle"></span>Error! Please try again.</div>');
            $("#btn-submit").addClass('btn-info'); 
            $("#btn-submit").html('<span class="fa fa-sign-in-alt"></span> Register');
            });
          }
      }
      });
    return false;
    }
  });
  </script>
  <script src="js/material.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/nouislider.min.js" type="text/javascript"></script>
  <script src="js/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <script src="js/bootstrap-selectpicker.js" type="text/javascript"></script>
  <script src="js/bootstrap-tagsinput.js"></script>
  <script src="js/jasny-bootstrap.min.js"></script>
  <script src="js/material-kit.js?v=1.2.1" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.js"></script>
  <script type="text/javascript">
    $('.date-own').datepicker({
         minViewMode: 2,
         format: 'yyyy',
         autoHide: true
       });
  </script>
  <script type="text/javascript">
  $(window).on('load', function(){
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");
  });
  </script>
  
</html>

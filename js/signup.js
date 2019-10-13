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
            $("#error").html('<div class="alert alert-danger"><span class="fa fa-info-circle"></span> Name and ID is not in our database.</div>');
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
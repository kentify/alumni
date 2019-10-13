
  $('document').ready(function() { 
  /* handling form validation */
  $("#login-form").validate({
    errorClass: 'errors',
    rules: {
      password: {
        required: true,
       
      },
      username: {
        required: true,
       
      },
    },
    messages: {
      password:{
        required: "This field is required.",
       },
      username: "This field is required.",
    },
    submitHandler: submitForm 
  });    
  /* Handling login functionality */
  function submitForm() {   
    var data = $("#login-form").serialize();        
    $.ajax({        
      type : 'POST',
      url  : 'login.php',
      async: false,
      cache:false,
      data : data,
      beforeSend: function(){ 
        $('#error').addClass('hidden');
        $("#login_button").removeClass('btn-info'); 
        $("#login_button").addClass('btn-simple'); 
        $("#login_button").html('<i class="fas fa-spinner fa-spin"></i> &nbsp;<b>Logging in ...</b>');
      },
      success : function(response){           
        if(response=="ok"){                 
          $("#login_button").html('<i class="fas fa-spinner fa-spin"></i> &nbsp;<b>Authenticating ...</b>');
           $.toast({
            text: 'Authorized Credentials! Logging in ...',
            position: 'top-right',
            stack: 1,  
            icon: 'success'
          });
         
          setTimeout(' window.location.replace("dashboard.php"); ',3000);
        } else {                  
          $("#error").fadeIn(1000, function(){
          $('#error').removeClass('hidden');            
          $.toast({
            text: 'Login Credentials does not matched! Please try again.',
            position: 'top-right',
            stack: 1,  
            icon: 'warning'
          });
            $('#login_button').prop('disabled', false);
            $("#login_button").removeClass('btn-simple');
            $("#login_button").addClass('btn-info');  
            $("#login_button").html('<i style="font-weight: bold;" class="material-icons">lock</i> Login');
          });
        }
      }
    });
    return false;
  }   
});
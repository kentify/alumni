
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
      cache: false,
      url  : 'login.php',
      data : data,
      beforeSend: function(){ 
        $('#error').addClass('hidden');
        $("#login_button").removeClass('btn-info'); 
        $("#login_button").addClass('btn-simple'); 
        $("#login_button").html('<i class="fas fa-spinner fa-spin"></i> &nbsp;<b>Logging in ...</b>');
      },
      success : function(response){
      if(response=="nope"){                 
          $("#error").fadeIn(1000, function(){
          $('#error').removeClass('hidden');            
          $.toast({
            text: 'Account is currently being verified! Please check it later.',
            position: 'top-right',
            stack: 1,  
            icon: 'warning'
          });
            $('#login_button').prop('disabled', false);
            $("#login_button").removeClass('btn-simple');
            $("#login_button").addClass('btn-info');  
            $("#login_button").html('<i style="font-weight: bold;" class="material-icons">lock</i> Login');
          });
          } else if(response=="ok"){                 
          $("#login_button").html('<i class="fas fa-spinner fa-spin"></i> &nbsp;<b>Authenticating ...</b>');
           $.toast({
            text: 'Login Success! Logging in.',
            position: 'top-right',
            stack: 1,  
            icon: 'success'
          });
         
          setTimeout(' window.location.replace("index.php"); ',3000);
        }else {                  
          $("#error").fadeIn(1000, function(){
          $('#error').removeClass('hidden');            
          $.toast({
            text: 'Invalid credentials! Please try again.',
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

	<!--   Core JS Files   -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/material.min.js"></script>
	<script src="css/fontawesome/js/all.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
	<script src="js/moment.min.js"></script>
	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
	<script src="js/nouislider.min.js" type="text/javascript"></script>
	<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
	<script src="js/bootstrap-datetimepicker.js" type="text/javascript"></script>
	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
	<script src="js/bootstrap-selectpicker.js" type="text/javascript"></script>
	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/   -->
	<script src="js/bootstrap-tagsinput.js"></script>
	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
	<script src="js/jasny-bootstrap.min.js"></script>
	<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
	<script src="js/material-kit.js?v=1.2.1" type="text/javascript"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
	<script type="text/javascript">
	//paste this code under the head tag or in a separate js file.
	// Wait for window load
	$(window).on('load', function(){
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");
	});
	</script>
	
	<script type="text/javascript">
	var btn = $('#button');

	$(window).scroll(function() {
	  if ($(window).scrollTop() > 670) {
	    btn.addClass('show');
	  } else {
	    btn.removeClass('show');
	  }
	});

	btn.on('click', function(e) {
	  e.preventDefault();
	  $('html, body').animate({scrollTop:0}, '300');
	});


</script>
<script type="text/javascript">
  jQuery.event.special.touchstart = {
  setup: function( _, ns, handle ){
   if ( ns.includes("noPreventDefault") ) {
     this.addEventListener("touchstart", handle, { passive: false });
   } else {
     this.addEventListener("touchstart", handle, { passive: true });
   }
  }
};
</script>	
</html>
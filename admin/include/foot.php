<!-- jQuery 3 -->
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="dist/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Material Design -->
<script src="dist/js/material.min.js"></script>
<script src="dist/js/ripples.min.js"></script>
<script>
    $.material.init();
</script>
<!-- FastClick -->
<script src="dist/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- jvectormap  -->
<!-- DataTables -->
<script src="dist/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="dist/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- SlimScroll -->
<script src="dist/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript">
  //paste this code under the head tag or in a separate js file.
  // Wait for window load
  $(window).on('load', function(){
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");
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
</body>
</html>
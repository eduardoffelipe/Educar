<?php 
?>

<!-- Default-JavaScript-File -->
<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<!-- //Default-JavaScript-File -->

<!-- carroussel -->
<script>
$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});
</script>

<!-- //carroussel -->
	
<!-- clients js file-->
	<script src="assets/js/jquery.wmuSlider.js"></script> 
		<script>
			$('.example1').wmuSlider();         
		</script> 
<!-- //clients js file -->

<!-- Jarallax -->
<script src="assets/js/jarallax.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
<!-- //Jarallax -->

<!-- smooth scrolling -->
	<script src="assets/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="assets/js/move-top.js"></script>
	<script type="text/javascript" src="jassets/js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- smooth scrolling -->

</body>
<!-- //Body -->
</html>
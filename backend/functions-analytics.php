<?php
/**
 * @package onepagelove
 * @version 6.11.2
 *
*/ 

#-------------------------------------------------------------------------------
# Add Google Analytics if not on localhost
#-------------------------------------------------------------------------------

if (strpos($_SERVER['REQUEST_URI'], "localhost") !== false){

	function onepagelove_analytics() { ?>

	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-3920997-1', 'auto');
	  ga('send', 'pageview');
	</script>

	<?php }

	add_action( 'wp_head', 'onepagelove_analytics' );

}
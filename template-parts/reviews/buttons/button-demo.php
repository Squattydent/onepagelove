<?php
/**
 * @package onepagelove
 * @version 6.11.35
 *
*/ 
?>
<?php 

	// If has Demo URL add Demo button

	$demourl = get_post_meta($post->ID, "demo_url", true);

	if ($demourl != null) {
		echo '<div class="review-launch review-demo"><a href="' . $demourl . '" target="_blank" rel="nofollow">Launch Demo</a></div>';		
	}
	else {
	    echo '';
	}; 

?>
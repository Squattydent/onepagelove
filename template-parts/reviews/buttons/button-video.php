<?php
/**
 * @package onepagelove
 * @version 6.11.62
 *
*/ 
?>

<?php 

	$videoreview= get_post_meta($post->ID, "video_review", true);

	if ($videoreview != null) {
		echo '<div class="review-launch review-demo"><a href="#review-video-anchor" class="smoothScroll">Watch Video Review</a></div>';
	};

?>

				


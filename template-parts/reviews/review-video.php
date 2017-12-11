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
		echo '<div class="review-video-title">Video Review</div>';
		echo '<div class="embed-container"><iframe src="https://www.youtube.com/embed/' . $videoreview . '" frameborder="0" allowfullscreen></iframe></div>';
	};

?>



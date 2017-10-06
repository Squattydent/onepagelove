<?php
/**
 * @package onepagelove
 * @version 6.11.37
 *
*/ 
?>
<?php 
	// screenshot link opened up
	echo '<a href="'; 
	$seo_gallery_id = get_cat_ID('Inspiration');
	$siteurl 	 = get_post_meta($post->ID, "site_url", true);
	$demourl 	 = get_post_meta($post->ID, "demo_url", true);

	if (post_is_in_descendant_category( $seo_gallery_id )) {
		echo $siteurl;
		echo '" target="_blank" class="noBorder">';
	}
	elseif ($demourl != null) {
		echo $demourl;
		echo '" target="_blank" class="noBorder">';
	}
	else {
	    echo '#container-outer" class="smoothScroll noBorder">';
	};  

?>

	<?php // actual screenshot image

		$bigScreenshot = get_post_meta($post->ID, "screenshot", true);

		if ($bigScreenshot != '') {
			echo '<img src="'.$bigScreenshot.'" alt="'.get_the_title().' Big Screenshot" />';
		}
		else {
			echo 'No screenshot.'; // this should be the small screenshot
		};

	?>

</a>
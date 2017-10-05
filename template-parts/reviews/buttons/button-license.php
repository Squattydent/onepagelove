<?php
/**
 * @package onepagelove
 * @version 6.11.35
 *
*/ 
?>
<?php 

	// If has License URL add License button

	if ((in_category('License Templates')) OR (in_category('Pixelarity Templates'))) {
      
		$licenseurl = get_post_meta($post->ID, "license_url", true);

		if (($licenseurl != null) and (in_category('Pixelarity Templates'))) {
			echo '<div class="review-launch review-license"><a href="' . $licenseurl . '" target="_blank">Visit Pixelarity To Remove Credit</a></div>';		
		}
		elseif ($licenseurl != null) {
			echo '<div class="review-launch review-license"><a href="' . $licenseurl . '" target="_blank">Buy $5 License To Remove Credit</a></div>';		
		}
		else {
		    echo '';
		}; 

	};	

?>	
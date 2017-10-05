<?php
/**
 * @package onepagelove
 * @version 6.11.35
 *
*/ 
?>
<?php 

	// If has License, add note about CC3.0 License 

	$licenseurl = get_post_meta($post->ID, "license_url", true);

	if ($licenseurl != null) {
		echo '<li><strong>License:</strong> <a href="https://creativecommons.org/licenses/by/3.0/" title="Creative Commons 3.0 License">CCA 3.0</a> (<a href="' . $licenseurl . '">remove</a>)</li>';		
	}
	else {
	    echo '';
	}; 

?>	
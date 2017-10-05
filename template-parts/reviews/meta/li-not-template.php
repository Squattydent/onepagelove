<?php
/**
 * @package onepagelove
 * @version 6.11.35
 *
*/ 
?>
<?php      

	// If in Inspiration, add notice about it not being a template

	$seo_gallery_id = get_cat_ID('Inspiration');

	if (post_is_in_descendant_category( $seo_gallery_id )) {
		echo '<li><strong>Template?</strong> No, this is a custom built website</li>';             
	};  
?>	
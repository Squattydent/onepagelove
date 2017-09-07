<?php
/**
 * @package onepagelove
 * @version 6.10.22
 *
*/ 

$promo_image = get_post_meta($post->ID, "promo_image", true);

if ( is_single() && ($promo_image != '') ) {

	echo $promo_image;

}

elseif (is_page('Private Video Feedback')) {

	echo '' . get_template_directory_uri() . '/img/social/feedback.jpg';

}

elseif (is_page('Feedback For Coffee')) {

	echo '' . get_template_directory_uri() . '/img/social/feedback-for-coffee.jpg';

}

elseif (is_home() || is_page('About')) {

	echo '' . get_template_directory_uri() . '/img/social/screenshot.jpg';

}

// elseif (is_single() && ( post_is_in_descendant_category( $seo_gallery_id ) ) ||  post_is_in_descendant_category( $seo_templates_id ) ) {
	// use Greg's new custom image
// }

else {

	echo '';

};

?>
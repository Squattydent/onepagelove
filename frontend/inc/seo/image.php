<?php 

$promo_image = get_post_meta($post->ID, "promo_image", true);

if ( is_single() && ($promo_image != '') ) {

	echo $promo_image;

}

elseif (is_home()) {

	echo '' . get_template_directory_uri() . '/img/one-page-love-website-screenshot.jpg';

}

// elseif (is_single() && ( post_is_in_descendant_category( $seo_gallery_id ) ) ||  post_is_in_descendant_category( $seo_templates_id ) ) {
	// use Greg's new custom image
// }

else {

	echo '';

};

?>
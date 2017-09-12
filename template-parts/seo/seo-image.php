<?php
/**
 * @package onepagelove
 * @version 6.11.0
 *
*/ 

$promo_image = get_post_meta($post->ID, "promo_image", true);

if ( is_singular() && ($promo_image != '') ) {

	echo $promo_image;

}

elseif (is_home() || is_page('About')) {

	echo '' . get_template_directory_uri() . '/img/social/screenshot.jpg';

}

else {

	echo '';

};

?>
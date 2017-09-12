<?php
/**
 * @package onepagelove
 * @version 6.11.1
 *
*/ 

// -------------------------------------------------------------
// RSS Feed Edits
// -------------------------------------------------------------

// Add Promo Image above the content in RSS Feed
function fields_in_feed($content) {

    if(is_feed()) {

        $post_id = get_the_ID();
	    $output = '<p><img src="';
	    $output .= '' . get_post_meta($post_id, 'promo_image', true) . '';
	    $output .= '" /></p>';   
	    $content = $output.$content;
		return $content;

    }

}
add_filter('the_content','fields_in_feed');
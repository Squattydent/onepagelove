<?php
/**
 * @package onepagelove
 * @version 6.11.5
 *
*/ 

// -------------------------------------------------------------
// Add Promo Image above the content in RSS Feed
// -------------------------------------------------------------

function onepagelove_custom_rss_feed($content) {

    if ( is_feed() ) {

        $post_id = get_the_ID();
	    $output  = '<p><img src="';
	    $output .= '' . get_post_meta($post_id, 'promo_image', true) . '';
	    $output .= '" /></p>';   
	    $content = $output.$content;
		
    }

    return $content;

}

add_filter('the_content','onepagelove_custom_rss_feed');
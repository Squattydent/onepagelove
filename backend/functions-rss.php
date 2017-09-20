<?php
/**
 * @package onepagelove
 * @version 6.11.15
 *
*/ 

// -------------------------------------------------------------
// Add Promo Image above the content in RSS Feed
// -------------------------------------------------------------

function onepagelove_custom_rss_feed($content) {

    if ( is_feed() ) {

    	if ( !in_category((array("Blog","Journal","Articles","Resources","Interviews","Round Ups","Sponsored"))) ) {

	        $post_id  		= get_the_ID();
	        $post_image 	= get_post_meta($post_id, 'promo_image', true);
	        $post_link		= get_the_permalink();
	        $direct_link	= get_post_meta($post_id, 'site_url', true);
		    $output  		= '<p><a href="' . $post_link . '"><img src="' . $post_image . '" /></a></p>'; 
		    $meta 			= '<p><a href="' . $post_link . '">Full Review</a> | <a href="' . $direct_link . '">Direct Link</a></p>';  
		    $content 		= $output.$content.$meta;

    	}

    	else {

    		 $content 		= $content;
    	};

    }

    return $content;

}

add_filter('the_content','onepagelove_custom_rss_feed');
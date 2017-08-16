<?php
/**
 * @package onepagelove
 * @version 6.10.11
 *
*/ 

// -------------------------------------------------------------
// RSS Feed Edits
// -------------------------------------------------------------

// Add special content to RSS Feed
function fields_in_feed($content) {
    if(is_feed()) {
        $post_id = get_the_ID();
        $output = '<div>';
        $output .= '' . get_post_meta($post_id, 'opl_review', true) . '';
        $output .= '</div>';   
        $content = $content.$output;
    }
    return $content;
}
add_filter('the_content','fields_in_feed');
<?php
/**
 * @package onepagelove
 * @version 6.10.11
 *
*/ 

// -------------------------------------------------------------
// Remove <p> around images in Blog category
// -------------------------------------------------------------

function filter_ptags_on_images($content){

    if ( in_category( array( "Blog", "Interviews", "Round Ups", "Articles", "Journal", "Resources" ))) {
        return preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '\1', $content);
    }

    else {
         return ($content);
    };

}    
add_filter('the_content', 'filter_ptags_on_images');
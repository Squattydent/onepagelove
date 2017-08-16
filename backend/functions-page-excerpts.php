<?php
/**
 * @package onepagelove
 * @version 6.10.11
 *
*/ 

// -------------------------------------------------------------
// Add excerpt support to pages
// -------------------------------------------------------------

function wpdocs_custom_init() {
    add_post_type_support( 'page', 'excerpt' );
}
add_action('init', 'wpdocs_custom_init');
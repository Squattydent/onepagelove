<?php
/**
 * @package onepagelove
 * @version 6.10.11
 *
*/ 

// -------------------------------------------------------------------------------------
// Hide Discontinued Submissions Category from all frontend results including RSS
// -------------------------------------------------------------------------------------

add_action('pre_get_posts', 'wpa_31553' );

function wpa_31553( $wp_query ) {

    // $wp_query is passed by reference. 
    // we don't need to return anything. 
    // whatever changes made inside this function will automatically effect the global variable

    $excluded = array(8205);  // Submissions Category 8205, Localhost is 1636

    // only exclude on the front end
    if( !is_admin() && !is_category('Submissions')) {
        $wp_query->set('category__not_in', $excluded);
    }
}
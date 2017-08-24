<?php
/**
 * @package onepagelove
 * @version 6.10.14
 *
*/ 

// -------------------------------------------------------------
// Remove Visibility of License Category
// -------------------------------------------------------------

// Cheers: https://css-tricks.com/snippets/wordpress/the_category-excludes/#comment-1609612

function remove_category_link( $categories ) {

    if ( is_admin() ) 
        return $categories;

    $remove = array();

    foreach ( $categories as $category ) {

    if ( $category->name == "License Templates" ) continue;

    $remove[] = $category;
    }
    return $remove;
}

add_filter( 'get_the_categories', 'remove_category_link' );
<?php
/**
 * @package onepagelove
 * @version 6.10.15
 *
*/ 

// -------------------------------------------------------------
// Remove Visibility of License Category
// -------------------------------------------------------------

// Cheers: https://css-tricks.com/snippets/wordpress/the_category-excludes/#comment-1609612

function remove_license_category_link( $categories ) {

    if ( is_admin() ) 
        return $categories;

    $remove = array();

    foreach ( $categories as $category ) {

    if ( $category->name == "License Templates" ) continue;

    $remove[] = $category;
    }
    return $remove;
}

add_filter( 'get_the_categories', 'remove_license_category_link' );

// -------------------------------------------------------------
// Remove Visibility of Pixelarity Category
// -------------------------------------------------------------

function remove_pixelarity_category_link( $categories ) {

    if ( is_admin() ) 
        return $categories;

    $remove = array();

    foreach ( $categories as $category ) {

    if ( $category->name == "Pixelarity Templates" ) continue;

    $remove[] = $category;
    }
    return $remove;
}

add_filter( 'get_the_categories', 'remove_pixelarity_category_link' );
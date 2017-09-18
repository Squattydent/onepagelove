<?php
/**
 * @package onepagelove
 * @version 6.11.11
 *
*/ 

// -------------------------------------------------------------
// WordPress Clean-up
// -------------------------------------------------------------

function onepagelove_head_cleanup(){

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    # Set featured thumbnail sizes
    add_theme_support( 'post-thumbnails' );

    // Disable comments feed
    add_filter( 'feed_links_show_comments_feed', '__return_false' ); 

    // Remove Smileys embedded in head
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

    // Remove Smileys embedded in head
    remove_action( 'wp_print_styles', 'print_emoji_styles' );   

    // Remove p tags from category description
    remove_filter('term_description','wpautop');  

}

add_action( 'after_setup_theme', 'onepagelove_head_cleanup' );

// -------------------------------------------------------------
// Ultra geeky wp_head indentation
// -------------------------------------------------------------

function indented_wp_head(){
    ob_start();
    wp_head();
    $header = ob_get_contents();
    ob_end_clean();
    echo preg_replace("/\n/", "\n\t", substr($header, 0, -1));
    echo "\n";
}
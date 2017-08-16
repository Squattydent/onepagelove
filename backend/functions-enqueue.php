<?php
/**
 * @package onepagelove
 * @version 6.10.11
 *
*/ 

// -------------------------------------------------------------
// Enqueue Scripts and Styles
// -------------------------------------------------------------

function onepagleove_enqueue_scripts(){
    
    // jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', false, '3.1.1', true);
    wp_enqueue_script('jquery');

    // Main Stylesheet
    wp_register_style( 'opl-stylesheet', get_template_directory_uri().'/frontend/css/style.css', array(), OPL_THEME_VERSION );  
    wp_enqueue_style( 'opl-stylesheet' );   

    // Script: Custom Code
    wp_register_script('opl-custom-js', get_template_directory_uri().'/frontend/js/opl-custom-code-min.js', array(), OPL_THEME_VERSION, true ); 
    wp_enqueue_script('opl-custom-js');

    if (is_single() && in_category('Free Templates')) {    

        // Script: Template Modal
        wp_register_script('opl-modal-js', get_template_directory_uri().'/frontend/js/template-modal-min.js', array(), OPL_THEME_VERSION, true ); 
        wp_enqueue_script('opl-modal-js');

    };

}

add_action('wp_enqueue_scripts', 'onepagleove_enqueue_scripts');
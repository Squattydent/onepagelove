<?php
/**
 * @package onepagelove
 * @version 6.11.62
 *
*/ 

// -------------------------------------------------------------
// Enqueue Scripts and Styles
// -------------------------------------------------------------

function onepagelove_enqueue_scripts(){
    
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

    // -------------------------------------------------------------
    // Modals
    // -------------------------------------------------------------

    // Free WordPress Themes, WordPress Themes but legacy non-direct download
    if ( is_single() && in_category('Legacy Templates') ) {    
        wp_register_script('opl-free-legacy-modal-js', get_template_directory_uri().'/frontend/js/template-redirection-modal-min.js', array(), OPL_THEME_VERSION, true ); 
        wp_enqueue_script('opl-free-legacy-modal-js');
    }

    // Free HTML Templates (not WordPress)
    elseif (is_single() && in_category('Free Templates')) {    
        wp_register_script('opl-free-modal-js', get_template_directory_uri().'/frontend/js/template-free-modal-min.js', array(), OPL_THEME_VERSION, true ); 
        wp_enqueue_script('opl-free-modal-js');
    }

    // Premium WordPress Themes (not free)
    elseif (is_single() && !in_category('Free Templates') && !in_category('Buy Templates') ) {    
        wp_register_script('opl-wordpress-premium-modal-js', get_template_directory_uri().'/frontend/js/template-redirection-modal-min.js', array(), OPL_THEME_VERSION, true ); 
        wp_enqueue_script('opl-wordpress-premium-modal-js');
    }

    // Services
    elseif (is_page( array( 'feedback', 'feedback-for-coffee' ))) {
        wp_register_script('opl-services-modal-js', get_template_directory_uri().'/frontend/js/services-modal-min.js', array(), OPL_THEME_VERSION, true ); 
        wp_enqueue_script('opl-services-modal-js');
    };

}

add_action('wp_enqueue_scripts', 'onepagelove_enqueue_scripts');

// -------------------------------------------------------------
// De-Enqueue Scripts and Styles
// -------------------------------------------------------------

function onepagelove_remove_assets() {

    wp_dequeue_style( array('lana-downloads-manager', 'msearchandfilter') );
    wp_deregister_style( array('lana-downloads-manager', 'searchandfilter') );

}

add_action('wp_enqueue_scripts', 'onepagelove_remove_assets', 99999);


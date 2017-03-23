<?php

// functions.php index:
// 01. Post Thumbnails
// 02. Ultra geeky head indentation
// 03. If in parent category
// 04. Add special content to RSS Feed
// 05. Pagination
// 06. Remove <p> around images
// 07. Add excerpt support to pages
// 08. Enqueue Scripts and Styles
// 09. WordPress Clean-up

// -------------------------------------------------------------
// 00. Defining
// -------------------------------------------------------------

// Theme Version
define( 'OPL_THEME_VERSION' , '6.9.12' );

// Content Width
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 1600;

// -------------------------------------------------------------
// 01. Post Thumbnails
// -------------------------------------------------------------

// Added Featured Image
add_theme_support( 'post-thumbnails' );

// -------------------------------------------------------------
// 02. Ultra geeky wp_head indentation
// -------------------------------------------------------------

function indented_wp_head(){
    ob_start();
    wp_head();
    $header = ob_get_contents();
    ob_end_clean();
    echo preg_replace("/\n/", "\n\t", substr($header, 0, -1));
    echo "\n";
}

// -------------------------------------------------------------
// 03. If in parent category
// http://wordpress.stackexchange.com/questions/155332/check-if-a-post-is-in-any-child-category-of-a-parent-category
// -------------------------------------------------------------

if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
    function post_is_in_descendant_category( $cats, $_post = null ) {
        foreach ( (array) $cats as $cat ) {
            // get_term_children() accepts integer ID only
            $descendants = get_term_children( (int) $cat, 'category' );
            if ( $descendants && in_category( $descendants, $_post ) )
                return true;
        }
        return false;
    }
}

// -------------------------------------------------------------
// 04. Add special content to RSS Feed
// -------------------------------------------------------------

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

// -------------------------------------------------------------
// 05. Pagination
// -------------------------------------------------------------

/***** Numbered Page Navigation (Pagination) Code. Tested on WordPress 3.1 *****/

/* Function that Rounds To The Nearest Value.
   Needed for the pagenavi() function */
function round_num($num, $to_nearest) {
   /*Round fractions down (http://php.net/manual/en/function.floor.php)*/
   return floor($num/$to_nearest)*$to_nearest;
}

/* Function that performs a Boxed Style Numbered Pagination (also called Page Navigation).
   Function is largely based on Version 2.4 of the WP-PageNavi plugin */
function pagenavi($before = '', $after = '') {
    global $wpdb, $wp_query;
    $pagenavi_options = array();
    $pagenavi_options['pages_text'] = ('');
    $pagenavi_options['current_text'] = '%PAGE_NUMBER%';
    $pagenavi_options['page_text'] = '%PAGE_NUMBER%';
    $pagenavi_options['first_text'] = ('First Page');
    $pagenavi_options['last_text'] = ('Last Page');
    $pagenavi_options['next_text'] = '';
    $pagenavi_options['prev_text'] = '';
    $pagenavi_options['dotright_text'] = '...';
    $pagenavi_options['dotleft_text'] = '...';
    $pagenavi_options['num_pages'] = 5; //continuous block of page numbers
    $pagenavi_options['always_show'] = 0;
    $pagenavi_options['num_larger_page_numbers'] = 0;
    $pagenavi_options['larger_page_numbers_multiple'] = 5;

    //If NOT a single Post is being displayed
    /*http://codex.wordpress.org/Function_Reference/is_single)*/
    if (!is_single()) {
        $request = $wp_query->request;
        //intval ó Get the integer value of a variable
        /*http://php.net/manual/en/function.intval.php*/
        $posts_per_page = intval(get_query_var('posts_per_page'));
        //Retrieve variable in the WP_Query class.
        /*http://codex.wordpress.org/Function_Reference/get_query_var*/
        $paged = intval(get_query_var('paged'));
        $numposts = $wp_query->found_posts;
        $max_page = $wp_query->max_num_pages;

        //empty ó Determine whether a variable is empty
        /*http://php.net/manual/en/function.empty.php*/
        if(empty($paged) || $paged == 0) {
            $paged = 1;
        }

        $pages_to_show = intval($pagenavi_options['num_pages']);
        $larger_page_to_show = intval($pagenavi_options['num_larger_page_numbers']);
        $larger_page_multiple = intval($pagenavi_options['larger_page_numbers_multiple']);
        $pages_to_show_minus_1 = $pages_to_show - 1;
        $half_page_start = floor($pages_to_show_minus_1/2);
        //ceil ó Round fractions up (http://us2.php.net/manual/en/function.ceil.php)
        $half_page_end = ceil($pages_to_show_minus_1/2);
        $start_page = $paged - $half_page_start;

        if($start_page <= 0) {
            $start_page = 1;
        }

        $end_page = $paged + $half_page_end;
        if(($end_page - $start_page) != $pages_to_show_minus_1) {
            $end_page = $start_page + $pages_to_show_minus_1;
        }
        if($end_page > $max_page) {
            $start_page = $max_page - $pages_to_show_minus_1;
            $end_page = $max_page;
        }
        if($start_page <= 0) {
            $start_page = 1;
        }

        $larger_per_page = $larger_page_to_show*$larger_page_multiple;
        //round_num() custom function - Rounds To The Nearest Value.
        $larger_start_page_start = (round_num($start_page, 10) + $larger_page_multiple) - $larger_per_page;
        $larger_start_page_end = round_num($start_page, 10) + $larger_page_multiple;
        $larger_end_page_start = round_num($end_page, 10) + $larger_page_multiple;
        $larger_end_page_end = round_num($end_page, 10) + ($larger_per_page);

        if($larger_start_page_end - $larger_page_multiple == $start_page) {
            $larger_start_page_start = $larger_start_page_start - $larger_page_multiple;
            $larger_start_page_end = $larger_start_page_end - $larger_page_multiple;
        }
        if($larger_start_page_start <= 0) {
            $larger_start_page_start = $larger_page_multiple;
        }
        if($larger_start_page_end > $max_page) {
            $larger_start_page_end = $max_page;
        }
        if($larger_end_page_end > $max_page) {
            $larger_end_page_end = $max_page;
        }
        if($max_page > 1 || intval($pagenavi_options['always_show']) == 1) {
            /*http://php.net/manual/en/function.str-replace.php */
            /*number_format_i18n(): Converts integer number to format based on locale (wp-includes/functions.php*/
            $pages_text = str_replace("%CURRENT_PAGE%", number_format_i18n($paged), $pagenavi_options['pages_text']);
            $pages_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pages_text);
            echo $before.'<div class="pagenavi">'."\n";

            if(!empty($pages_text)) {
                echo '<span class="pages">'.$pages_text.'</span>';
            }
            //Displays a link to the previous post which exists in chronological order from the current post.
            /*http://codex.wordpress.org/Function_Reference/previous_post_link*/
            /*previous_posts_link($pagenavi_options['prev_text']);*/

            if ($start_page >= 2 && $pages_to_show < $max_page) {
                $first_page_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pagenavi_options['first_text']);
                //esc_url(): Encodes < > & " ' (less than, greater than, ampersand, double quote, single quote).
                /*http://codex.wordpress.org/Data_Validation*/
                //get_pagenum_link():(wp-includes/link-template.php)-Retrieve get links for page numbers.
                echo '<a href="'.esc_url(get_pagenum_link()).'" class="first" title="'.$first_page_text.'">1</a>';
                if(!empty($pagenavi_options['dotleft_text'])) {
                    echo '<span class="expand">'.$pagenavi_options['dotleft_text'].'</span>';
                }
            }

            if($larger_page_to_show > 0 && $larger_start_page_start > 0 && $larger_start_page_end <= $max_page) {
                for($i = $larger_start_page_start; $i < $larger_start_page_end; $i+=$larger_page_multiple) {
                    $page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['page_text']);
                    echo '<a href="'.esc_url(get_pagenum_link($i)).'" class="single_page" title="'.$page_text.'">'.$page_text.'</a>';
                }
            }

            for($i = $start_page; $i  <= $end_page; $i++) {
                if($i == $paged) {
                    $current_page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['current_text']);
                    echo '<span class="current">'.$current_page_text.'</span>';
                } else {
                    $page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['page_text']);
                    echo '<a href="'.esc_url(get_pagenum_link($i)).'" class="single_page" title="'.$page_text.'">'.$page_text.'</a>';
                }
            }

            if ($end_page < $max_page) {
                if(!empty($pagenavi_options['dotright_text'])) {
                    echo '<span class="expand">'.$pagenavi_options['dotright_text'].'</span>';
                }
                $last_page_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pagenavi_options['last_text']);
                echo '<a href="'.esc_url(get_pagenum_link($max_page)).'" class="last" title="'.$last_page_text.'">'.$max_page.'</a>';
            }
            /* next_posts_link($pagenavi_options['next_text'], $max_page); */

            if($larger_page_to_show > 0 && $larger_end_page_start < $max_page) {
                for($i = $larger_end_page_start; $i <= $larger_end_page_end; $i+=$larger_page_multiple) {
                    $page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['page_text']);
                    echo '<a href="'.esc_url(get_pagenum_link($i)).'" class="single_page" title="'.$page_text.'">'.$page_text.'</a>';
                }
            }
            echo '</div>'.$after."\n";
        }
    }
}

// -------------------------------------------------------------
// 06. Remove <p> around images in Blog category
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

// -------------------------------------------------------------
// 07. Add excerpt support to pages
// -------------------------------------------------------------

function wpdocs_custom_init() {
    add_post_type_support( 'page', 'excerpt' );
}
add_action('init', 'wpdocs_custom_init');

// -------------------------------------------------------------
// 08. Enqueue Scripts and Styles
// -------------------------------------------------------------

function opl_enqueue_scripts(){
    
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

add_action('wp_enqueue_scripts', 'opl_enqueue_scripts');

// -------------------------------------------------------------
// 09. WordPress Clean-up
// -------------------------------------------------------------

function opl_head_cleanup(){

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Disable comments feed
    add_filter( 'feed_links_show_comments_feed', '__return_false' ); 

    // Remove Smileys embedded in head
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

    // Remove Smileys embedded in head
    remove_action( 'wp_print_styles', 'print_emoji_styles' );   

    // Remove p tags from category description
    remove_filter('term_description','wpautop');  

}

add_action( 'after_setup_theme', 'opl_head_cleanup' );

?>
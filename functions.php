<?php

// functions.php index:
// 01. Post Thumbnails
// 02. Recent Posts
// 03. If in parent category
// 04. Add special content to RSS Feed
// 05. Pagination
// 06. Exclude pages from search results
// 07. Allow media permissions for contributors
// 08. Hide Admin Toolbar
// 09. Log in redirect
// 10. Auto log in after register
// 11. Truncation
// 12. Custom Login Page Logo
// 13. Next New Code
// 14. Enqueue Scripts and Styles

// -------------------------------------------------------------
// 00. Defining
// -------------------------------------------------------------

// Theme Version
define( 'OPL_THEME_VERSION' , '6.1.38' );

// Feed Links
add_theme_support( 'automatic-feed-links' );

// Content Width
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 1600;

// -------------------------------------------------------------
// 01. Post Thumbnails
// -------------------------------------------------------------

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 400, 211, true ); // Normal post thumbs, fixed width and height, cropped
add_image_size( 'small-image',  40, 40, true); // Sidebar post thumbs, fixed width and height, cropped

// -------------------------------------------------------------
// 02. Recent Posts
// -------------------------------------------------------------

function recentPosts() {
    $rPosts = new WP_Query();
    $rPosts->query('showposts=5&cat=1403');
        while ($rPosts->have_posts()) : $rPosts->the_post(); ?>
            <div class="recentPost">
                <a href="<?php the_permalink();?>"><div class="recentPostImg"><?php the_post_thumbnail('small-image'); ?></div>
                <div class="recentPostTitle"><?php the_title();?></div></a>
                <div class="clear"></div>
            </div>
        <?php endwhile;
    wp_reset_query();
}

// -------------------------------------------------------------
// 03. If in parent category
// -------------------------------------------------------------

function is_desc_cat($cats, $_post = null) {
  foreach ((array)$cats as $cat) {
    if (in_category($cat, $_post)) {
      return true;
    } else {
      if (!is_int($cat)) $cat = get_cat_ID($cat);
      $descendants = get_term_children($cat, 'category');
      if ($descendants && in_category($descendants, $_post)) return true;
    }
  }
return false;
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
// 06. Exclude pages from search results
// -------------------------------------------------------------

function mySearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','mySearchFilter');

// -------------------------------------------------------------
// 07. Allow media permissions for contributors
// -------------------------------------------------------------

if ( current_user_can('contributor') && !current_user_can('upload_files') )
    add_action('admin_init', 'allow_contributor_uploads');
function allow_contributor_uploads() {
    $contributor = get_role('contributor');
    $contributor->add_cap('upload_files');
}

// -------------------------------------------------------------
// 08. Hide Admin Toolbar
// -------------------------------------------------------------

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

// -------------------------------------------------------------
// 09. Log in redirect
// -------------------------------------------------------------

function admin_default_page() {
  return './dashboard';
}
add_filter('login_redirect', 'admin_default_page');


// -------------------------------------------------------------
// 10. Auto log in after register
// -------------------------------------------------------------

add_action( 'gform_user_registered', 'pi_gravity_registration_autologin', 10, 4 );
function pi_gravity_registration_autologin( $user_id, $user_config, $entry, $password ) {
	$user = get_userdata( $user_id );
	$user_login = $user->user_login;
	$user_password = $password;
    wp_signon( array(
		'user_login' => $user_login,
		'user_password' =>  $user_password,
		'remember' => false
    ) );
}

// -------------------------------------------------------------
// 11. Truncation
// -------------------------------------------------------------

function limit_text($text, $limit) {
      if (str_word_count($text, 0) > $limit) {
          $words = str_word_count($text, 2);
          $pos = array_keys($words);
          $text = substr($text, 0, $pos[$limit]).'...';
      }
      return $text;
    }

// -------------------------------------------------------------
// 12. Custom Login Page Logo
// -------------------------------------------------------------

function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/one-page-love-heart-logo.png);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


// -------------------------------------------------------------
// 13. Log in with username or email
// -------------------------------------------------------------


// -------------------------------------------------------------
// 14. Next New Code
// -------------------------------------------------------------


// -------------------------------------------------------------
// 15. Enqueue Scripts and Styles
// -------------------------------------------------------------

add_action('wp_enqueue_scripts', 'opl_enqueue_scripts');
function opl_enqueue_scripts(){
	// Dont run in admin
	if(is_admin()) return;
	
	// Load styles
	wp_enqueue_style( 'opl-stylesheet', get_stylesheet_uri(), array(), OPL_THEME_VERSION ); // OPL Stylesheet			

	// Use default jQuery
	wp_enqueue_script( 'jquery' );
	
	// OPL Scripts
	wp_enqueue_script('nav-toggle', get_template_directory_uri().'/js/nav-toggle.js'); // Sidr Navigation	
	
}
?>
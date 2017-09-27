<?php
/**
 * @package onepagelove
 * @version 6.11.24
 *
*/ 

// -------------------------------------------------------------
// Theme Defining
// -------------------------------------------------------------

define( 'OPL_THEME_VERSION' , '6.11.24' );                                                      # Theme Version
global $content_width; if ( ! isset( $content_width ) ) $content_width = 1600;                  # Content Width

# ------------------------------------------------------------------------
# Theme Includes
# ------------------------------------------------------------------------

require_once( get_template_directory() . '/backend/functions-enqueue.php'                   );  # Enqueue Scripts and Styles
require_once( get_template_directory() . '/backend/functions-clean-up.php'                  );  # WordPress Head Clean-up
require_once( get_template_directory() . '/backend/functions-pagination.php'                );  # Archive Pagination
require_once( get_template_directory() . '/backend/functions-rss.php'                       );  # RSS Feed Edits
require_once( get_template_directory() . '/backend/functions-remove-pages-search.php'       );  # Remove Pages From Search Results
require_once( get_template_directory() . '/backend/functions-category-descendant.php'       );  # Category Descendant Improvement
require_once( get_template_directory() . '/backend/functions-page-excerpts.php'             );  # Add excerpt support to Pages
require_once( get_template_directory() . '/backend/functions-images-paragraphs.php'         );  # Remove <p> around images in Blog category
require_once( get_template_directory() . '/backend/functions-submissions.php'               );  # Hide Discontinued Submissions Category
require_once( get_template_directory() . '/backend/functions-remove-cats.php'        		);  # Remove Visibility of Certain Categories
require_once( get_template_directory() . '/backend/functions-shortcodes.php'        		);  # Shortcodes innit
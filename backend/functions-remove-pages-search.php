<?php
/**
 * @package onepagelove
 * @version 6.10.11
 *
*/ 

// -------------------------------------------------------------
// Remove Pages from Search Results
// -------------------------------------------------------------

function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}

add_filter('pre_get_posts','SearchFilter');
<?php
$post = $wp_query->post;
if ( in_category((array("Blog","Resources","Interviews","Round Ups","Sponsored"))) ) {
include(TEMPLATEPATH . '/single-other.php');

} else {
include(TEMPLATEPATH . '/single-review.php');
}
?>
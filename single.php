<?php

	$post = $wp_query->post;

	if ( in_category((array("Blog","Journal","Articles","Resources","Interviews","Round Ups","Sponsored"))) ) {

		include(TEMPLATEPATH . '/single-other.php');
	} 

	else {

		include(TEMPLATEPATH . '/single-review.php');

	}
?>
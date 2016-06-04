<?php

	$post = $wp_query->post;

	if ( in_category((array("Blog","Resources","Interviews","Round Ups","Sponsored"))) ) {

		include(TEMPLATEPATH . '/single-other.php');
	} 

	elseif ( in_category((array("Website Design Elements"))) ) {

		include(TEMPLATEPATH . '/single-element.php');
	} 

	else {

		include(TEMPLATEPATH . '/single-review.php');

	}
?>
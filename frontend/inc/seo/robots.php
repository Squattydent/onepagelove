<?php 

	// no action
	if ( is_404() ) {
		echo 'noindex, nofollow';
	}

	// just follow, no index
	elseif (is_archive() && is_category('Sponsored')) {
		echo 'noindex, follow';
	}

	elseif ( is_search() || is_author() || is_date() ) {
		echo 'noindex, follow';
	}

	elseif ( is_home() and ($paged > 1) ) {
		echo 'noindex, follow';
	}

	elseif ( is_archive() and ($paged > 1) ) {
		echo 'noindex, follow';
	}

	// green light mr robot
	else {
		echo 'index, follow';
	};

?>
<?php 
/**
 *
 * @package onepagelove
 * @since clutterless 6.9.23
 * 
 */

	$keyword 	= get_search_query();
	$open		= '<p class="search-suggestions">';
	$close		= '</p>';
	$tagprefix  = $open . '<strong>Suggestion!</strong> Rather browse by these official tags:<br />';
	$catprefix  = $open . '<strong>Suggestion!</strong> Rather browse by our official category:<br />';

	// if these exact words array example 
	// if ( in_array( $keyword, array( 'parallax', 'parallax scrolling' ) ) ) {

# -------------------------------------------------------------
# Categories
# -------------------------------------------------------------

	// if string contains this word among the letters
	if ( strpos($keyword, 'game') !== false ) {

		echo $catprefix;
		echo '<a href="/gallery/game">Game One Page Websites</a><br />';

	}

	// if string contains any of these words
	elseif(preg_match('(ngo|nonprofit|non profit|government)', $keyword) === 1)  {

		echo $catprefix;
		echo '<a href="/gallery/non-profit">Non Profit One Page Websites</a>';

	}	

# -------------------------------------------------------------
# Misc Tags
# -------------------------------------------------------------

	// if string contains any of these words
	elseif(preg_match('(parallax|paralax)', $keyword) === 1)  {

		echo $tagprefix;
		echo '<a href="/tag/parallax-scrolling">Parallax Scrolling</a><br />';
		echo '<a href="/tag/horizontal-parallax-scrolling">Horizontal Parallax Scrolling</a>';

	}

	// if string contains any of these words
	elseif(preg_match('(ngo|nonprofit|non profit|government)', $keyword) === 1)  {

		echo $catprefix;
		echo '<a href="/gallery/non-profit">Non Profit One Page Websites</a>';

	}

# -------------------------------------------------------------
# Colors
# -------------------------------------------------------------

	// if string contains this word among the letters
	elseif ( strpos($keyword, 'blue') !== false ) {

		echo $tagprefix;
		echo '<a href="/tag/blue-color">Blue Color</a><br />';
		echo '<a href="/tag/navy-blue-color">Navy Blue Color</a><br />';
		echo '<a href="/tag//tag/baby-blue-color">Baby Blue Color</a><br />';
		echo '<a href="/tag/dark-blue-color">Dark Blue Color</a><br />';
		echo '<a href="/tag/light-blue-color">Light Blue Color</a>';
								
	}

# -------------------------------------------------------------
# Closing
# -------------------------------------------------------------

	else {

		echo'<p>'; // basically no p class, so no styling

	};

	// yeah dirty I know
	echo $close;

?>
<?php
/**
 * @package onepagelove
 * @version 6.10.13
 *
*/ 

	$keyword 	= get_search_query();
	$open		= '<p class="search-suggestions">';
	$close		= '</p>';
	$tagprefix  = $open . '<strong>Suggestion!</strong> Rather browse by these official tags:<br />';
	$catprefix  = $open . '<strong>Suggestion!</strong> Rather browse by these official categories:<br />';

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

	// if string contains any of these words, combos and typos
	elseif(preg_match('(parallax|paralax)', $keyword) === 1)  {

		echo $tagprefix;
		echo '<a href="/tag/parallax-scrolling">Parallax Scrolling</a><br />';
		echo '<a href="/tag/horizontal-parallax-scrolling">Horizontal Parallax Scrolling</a>';

	}

	// if string contains any of these words, combos and typos
	elseif(preg_match('(ngo|nonprofit|non profit|government)', $keyword) === 1)  {

		echo $catprefix;
		echo '<a href="/gallery/non-profit">Non Profit One Page Websites</a>';

	}

	// if string contains any of these words, combos and typos
	elseif(preg_match('(portfolio|porfolio|PORTFOLIO)', $keyword) === 1)  {

		echo $catprefix;
		echo '<a href="/gallery/portfolio">Portfolio One Page Websites</a><br />';
		echo '<a href="/templates/portfolio-templates">Portfolio One Page Templates</a>';

	}

	// if string contains this word
	elseif ( strpos($keyword, 'iphone') !== false ) {

		echo $tagprefix;
		echo '<a href="/tag/iphone-app">iPhone App</a><br />';
		echo '<a href="/tag/iphone">iPhone Devices</a><br />';
		echo '<a href="/gallery/app">App One Page websites</a>';

	}

	// if string contains this word
	elseif ( strpos($keyword, 'business') !== false ) {

		echo $catprefix;
		echo '<a href="/gallery/landing-page">Landing Page Website References</a><br />';
		echo '<a href="/templates/landing-page-templates">Landing Page Templates</a>';

	}

	// if string contains this word
	elseif ( strpos($keyword, 'personal') !== false ) {

		echo $catprefix;
		echo '<a href="/gallery/personal">Personal One Page Websites</a><br />';
		echo '<a href="/templates/personal-templates">Personal One Page Templates</a>';

	}

	// if string contains this word
	elseif ( strpos($keyword, 'blog') !== false ) {

		echo $catprefix;
		echo '<a href="/gallery/one-page-blog">One Page Blogs</a><br />';
		echo '<a href="/templates/blog-themes">One Page WordPress Themes</a><br />';
		echo '<a href="/blog/journal">The One Page Love Journal</a>';
	}

# -------------------------------------------------------------
# Colors
# -------------------------------------------------------------

	// if string contains this word among the letters
	elseif ( strpos($keyword, 'blue') !== false ) {

		echo $tagprefix;
		echo '<a href="/tag/blue-color">Blue Color</a><br />';
		echo '<a href="/tag/navy-blue-color">Navy Blue Color</a><br />';
		echo '<a href="/tag/baby-blue-color">Baby Blue Color</a><br />';
		echo '<a href="/tag/dark-blue-color">Dark Blue Color</a><br />';
		echo '<a href="/tag/light-blue-color">Light Blue Color</a>';
								
	}

	// if string contains this word among the letters
	elseif ( strpos($keyword, 'white') !== false ) {

		echo $tagprefix;
		echo '<a href="/tag/white-color">White Color</a><br />';
		echo '<a href="/tag/black-and-white-scheme">Black &amp; White Color Scheme</a><br />';
		echo '<a href="/tag/whitespace">Whitespace (breathing room)</a>';
								
	}

	// if string contains this word among the letters
	elseif ( strpos($keyword, 'purple') !== false ) {

		echo $tagprefix;
		echo '<a href="/tag/purple-color">Purple Color</a>';

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
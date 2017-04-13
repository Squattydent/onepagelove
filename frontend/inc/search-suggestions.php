<p><?php 

	$keyword = get_search_query();
	$prefix  = '<br /><br /><strong>Hint!</strong> Rather browse by these official tags:<br />';

	// if these exact words array example 
	// if ( in_array( $keyword, array( 'parallax', 'parallax scrolling' ) ) ) {

	// if string contains this work
	// if ( strpos($keyword, 'parallax') !== false ) {

	// if string contains any of these words
	if(preg_match('(parallax|paralax)', $keyword) === 1)  {

		echo $prefix;
		echo '<a href="/tag/parallax-scrolling">Parallax Scrolling</a><br />';
		echo '<a href="/tag/horizontal-parallax-scrolling">Horizontal Parallax Scrolling</a><br />';
	}

	else {

		echo '';

	};

?></p>
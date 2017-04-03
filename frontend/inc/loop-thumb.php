<div class="thumb">


<?php

	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 

	if ( is_home() && ($paged < 2) ) {

		include('thumbs/ebook.php');
	}

	else {

		include('thumbs/sqsp2.php'); // Squarespace Article 2

	};

?>
          
</div>		
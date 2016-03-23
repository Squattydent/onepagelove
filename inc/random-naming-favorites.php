<?php 

	$words  = array(

			'They are a glorious bunch aren&#39;t they...' , 
			'Mmm these are tasty...' , 
			'You have great taste...' // no comma

		);

	echo $words[rand(0, count($words) - 1)];

?>
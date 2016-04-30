<?php 

	$words  = array(

		 // 'feltu.com for $79' 	, // sold
			'punlet.com for $99' 	, 
			'fashed.com for $99' 	, 
			'umbril.com for $149' 	, 
			'scampish.com for $99' 	, 
			'skippets.com for $299' , 
			'rattr.com for $99' 	, 
			'warked.com for $149' 	, 
			'camdea.com for $799' 	, 
			'orcly.com for $199' 	, 
			'meringa.com for $199' 	, 
			'runted.com for $99' 	, 		
			'flumin.com for $99' 	,	 		
			'picrio.com for $499' 	// no comma

		);

	echo $words[rand(0, count($words) - 1)];

?>
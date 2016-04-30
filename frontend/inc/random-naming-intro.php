<?php 

	$words  = array(

			'beautiful' , 
			'gorgeous' , 
			'lovely' , 
			'delicious' , 
			'wonderful' // no comma

		);

	echo $words[rand(0, count($words) - 1)];

?>
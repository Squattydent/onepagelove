<?php 

	$words  = array(

			'Hey' , 
			'Howdy' , 
			'Howzit' , 
			'Yo' , 
			'Hello' , 
			'Hi' , 
			'Hi' // no comma

		);

	echo $words[rand(0, count($words) - 1)];

?>
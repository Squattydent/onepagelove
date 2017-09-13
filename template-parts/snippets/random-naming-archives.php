<?php
/**
 * @package onepagelove
 * @version 6.10.1
 *
*/ 

	$words  = array(

			'treasure chest' , 
			'lovely collection' , 
			'One Page vault' // no comma

		);

	echo $words[rand(0, count($words) - 1)];

?>
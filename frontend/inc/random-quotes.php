<?php 

	$words  = array(

			'"Simplicity means the achievement of maximum effect with minimum means." <i>Dr. Koichi Kawanaite</i>', 
			'"The ability to simplify means to eliminate the unnecessary so that the necessary may speak." <i>Hans Hofman</i>', 
			'"Simplicity is about subtracting the obvious, and adding the meaningful." <i>John Maeda</i>', 
			'"Perfection is not when there is no more to add, but no more to take away." <i>Antoine de Saint-Exupéry</i>' // no comma
			
		);

	echo $words[rand(0, count($words) - 1)];

?>
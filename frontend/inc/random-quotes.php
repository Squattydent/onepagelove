<?php 

	$words  = array(

			'"Simplicity means the achievement of maximum effect with minimum means." <i>Dr. Koichi Kawanaite</i>', 
			'"The ability to simplify means to eliminate the unnecessary so that the necessary may speak." <i>Hans Hofman</i>', 
			'"Simplicity is about subtracting the obvious, and adding the meaningful." <i>John Maeda</i>', 
			'"Less is more." <i>Ludwig Mies van der Rohe</i>',
			'"Simplicity is the ultimate sophistication." <i>Leonardo da Vinci</i>',
			'"One does not accumulate but eliminate. It is not daily increase but daily decrease. The height of cultivation always runs to simplicity." <i>Bruce Lee</i>', 
			'"The purposeful destruction of information is the essence of intelligent work." <i>Ray Kurzweil</i>',
			'"Everything should be made as simple as possible, but not simpler." <i>Albert Einstein</i>',
			'"Make things as simple as possible but no simpler." <i>Albert Einstein</i>',
			'"One can furnish a room very luxuriously by taking out furniture rather than putting it in." <i>Francis Jourdain</i>',
			'"Any intelligent fool can make things bigger, more complex, and more violent. It takes a touch of genius – and a lot of courage – to move in the opposite direction." <i>E.F. Schumacker</i>',
			'"Perfection is not when there is no more to add, but no more to take away." <i>Antoine de Saint-Exupéry</i>' // no comma
			
		);

	echo $words[rand(0, count($words) - 1)];

?>
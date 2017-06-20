<div class="review-slayer">

	<div class="review-slayer-holder">

		<div class="slayer">

			<?php 

				$ads  = array(
						'ads/coffee1.php', 
						'ads/coffee2.php', 						
						'ads/storytelling.php', 										
						'ads/tips.php', 											
						'ads/woo.php' // no comma on last one
					);

				$adfile = $ads[rand(0, count($ads) - 1)];

				include($adfile);

			?>

		</div>

	</div>

</div>

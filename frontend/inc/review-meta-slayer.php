<div class="review-slayer">

	<div class="review-slayer-holder">

		<div class="slayer">

			<?php 

				$ads  = array(
						'ads/newsletter.php', 
						'ads/critique.php', 
						'ads/feedback.php', 
						'ads/storytelling.php', 										
						'ads/tighten.php', 
						'ads/2016.php', 											
						'ads/woo.php' // no comma on last one
					);

				$adfile = $ads[rand(0, count($ads) - 1)];

				include($adfile);

			?>

		</div>

	</div>

</div>

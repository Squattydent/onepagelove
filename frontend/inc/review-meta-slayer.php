<div class="review-slayer">

	<div class="review-slayer-holder">

		<div class="slayer">

			<?php 

				$ads  = array(

						// 'ads/newsletter.php', 
						'ads/survey.php', 					
						'ads/layers.php', 
						'ads/woo.php', 
						'ads/currl.php', 
						'ads/hosting.php' // no comma on last one
						
					);

				$adfile = $ads[rand(0, count($ads) - 1)];

				include($adfile);

			?>

		</div>

	</div>

</div>

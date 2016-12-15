<div class="review-slayer">

	<div class="review-slayer-holder">

		<div class="slayer">

			<?php 

				$ads  = array(

						// 'ads/newsletter.php', 
						'ads/hosting.php', 					
						'ads/layers.php', 
						'ads/woo.php' // no comma on last one
						
					);

				$adfile = $ads[rand(0, count($ads) - 1)];

				include($adfile);

			?>

		</div>

	</div>

</div>

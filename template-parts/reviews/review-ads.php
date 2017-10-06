<?php
/**
 * @package onepagelove
 * @version 6.11.37
 *
*/ 
?>
<div class="review-slayer">

	<div class="review-slayer-holder">

		<div class="slayer">

			<?php 

				$ads  = array(
						'ads/templates.php', 
						'ads/feedback.php', 
						'ads/coffee.php', 
						'ads/concierge.php', 															
						'ads/tips.php', 											
						'ads/woo.php' // no comma on last one
					);

				$adfile = $ads[rand(0, count($ads) - 1)];

				include($adfile);

			?>

		</div>

	</div>

</div>
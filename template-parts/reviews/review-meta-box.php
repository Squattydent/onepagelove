<?php
/**
 * @package onepagelove
 * @version 6.11.35
 *
*/ 
?>
<div class="review-meta-right-padding-hack">

	<?php // Modals and SendOwl functionality

		if (in_category('License Templates')) {
			get_template_part('template-parts/include','sendowl');  
			get_template_part('template-parts/reviews/modals/modal','license');             
		} 
		elseif (in_category('Buy Templates')) {
			get_template_part('template-parts/include','sendowl');           
		} 
		elseif (in_category('Pixelarity Templates')) {
			get_template_part('template-parts/reviews/modals/modal','pixelarity');             
		} 	

		// Free WordPress with reddrection link aka legacy listing
	 	elseif ( in_category('WordPress Themes') and in_category('Legacy Templates') ) {
			get_template_part('template-parts/reviews/modals/modal','codeable-free-legacy'); 
		}	
		// Free WordPress with direct download link
		elseif ( in_category('WordPress Themes') and in_category('Free Templates') ) {
			get_template_part('template-parts/reviews/modals/modal','codeable-free'); 
		}	
		// Premium WordPress listing that links out
	 	elseif ( in_category('WordPress Themes')) {
			get_template_part('template-parts/reviews/modals/modal','codeable-premium'); 
		}			

		// Free Templates (Non-WP) but old non-direct download link ie. links out
	 	elseif ( in_category('Free Templates') and in_category('Legacy Templates') ) {
			get_template_part('template-parts/reviews/modals/modal','hosting-free-legacy'); 
		}				
		// Free WordPress Themes
	 	elseif ( in_category('Free Templates')) {
			get_template_part('template-parts/reviews/modals/modal','hosting-free'); 
		}	
		// Free HTML Templates (not WordPress)
		elseif (in_category('Templates')) {
			get_template_part('template-parts/reviews/modals/modal','hosting-premium'); 
		}

		else {
			echo '';
		};
	
	?>

	<?php // buttons
		get_template_part('template-parts/reviews/buttons/button','launch-buy');  	
		get_template_part('template-parts/reviews/buttons/button','demo');  
		get_template_part('template-parts/reviews/buttons/button','license');  
	?>

	<ul>

		<?php // list items
			get_template_part('template-parts/reviews/meta/li','hosting');  
		 	get_template_part('template-parts/reviews/meta/li','codeable');  
		 	get_template_part('template-parts/reviews/meta/li','payment');   
		 	get_template_part('template-parts/reviews/meta/li','license');   
		 	get_template_part('template-parts/reviews/meta/li','built-by');   
	 	 	get_template_part('template-parts/reviews/meta/li','extras'); 		 		
		 	get_template_part('template-parts/reviews/meta/li','built-using');  		 	
		 	get_template_part('template-parts/reviews/meta/li','not-template');   	
		 	get_template_part('template-parts/reviews/meta/li','author');   			 		 		 	
		?>

	</ul>

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

</div>
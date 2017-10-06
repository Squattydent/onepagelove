<?php
/**
 * @package onepagelove
 * @version 6.11.37
 *
*/ 
get_header(); ?>

	<div class="review">
	             
		<div class="review-meta">

			<div class="review-meta-right">

				<div class="review-meta-right-padding-hack">

					<?php // load up modal magic
						get_template_part('template-parts/reviews/review','modals'); 
					?>

					<?php // buttons
						get_template_part('template-parts/reviews/buttons/button','launch-buy');  	
						get_template_part('template-parts/reviews/buttons/button','demo');  
						get_template_part('template-parts/reviews/buttons/button','license');  
					?>

					<ul>

						<?php // meta list items
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

					<?php // ad block
						get_template_part('template-parts/reviews/review','ads'); 
					?>

				</div>

			</div>	

			<div class="review-meta-left">      

				<?php // post content
					get_template_part('template-parts/reviews/content/post','title'); 
					get_template_part('template-parts/reviews/content/post','review-build-notes'); 
					get_template_part('template-parts/reviews/content/post','cats'); 
					get_template_part('template-parts/reviews/content/post','tags'); 
				?>

			</div>	

		</div>

		<?php // floating pagination
			get_template_part('template-parts/pagination','floating'); 
		?>

		<div class="review-screenshot">

			<?php // long screenshot
				get_template_part('template-parts/reviews/review','screenshot'); 
			?>

		</div>

		<div class="review-notes">

			<?php // screenshot conciege + author credit
				get_template_part('template-parts/reviews/review','screenshot-concierge'); 
				get_template_part('template-parts/reviews/review','author'); 
			?>

		</div>

	</div>

	<?php // similar content
		wp_reset_query(); 
	 	get_template_part('template-parts/reviews/review','similar'); 
 	?>

<?php get_footer(); ?>
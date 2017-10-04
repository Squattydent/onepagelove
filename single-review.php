<?php
/**
 * @package onepagelove
 * @version 6.11.34
 *
*/ 
get_header(); ?>


 
	<div class="review">
	             
		<div class="review-meta">

			<div class="review-meta-right">

				<?php get_template_part('template-parts/reviews/review','meta-box'); ?>

			</div>	

			<div class="review-meta-left">      

			    <div class="review-title">

			    	<h1>

			    		<?php the_title(); ?>

			    		<?php  			
							if (in_category('HTML Templates')) {
					      		echo 'One Page HTML Template';							
							}		
							elseif (in_category('Muse Templates')) {
					      		echo 'One Page Adobe Muse Template';							
							}										
							elseif (in_category('WordPress Themes')) {
					      		echo 'One Page WordPress Theme';							
							}		
							elseif (in_category('PSD Templates')) {
					      		echo 'One Page PSD Template';							
							}
					        elseif (in_category('Tumblr Themes')) {
					        	echo 'One Page Tumblr Theme';              
					        }                
					        elseif (in_category('Squarespace Templates')) {
					        	echo 'One Page Squarespace Template';              
					        }  	
					        elseif (in_category('Unbounce Templates')) {
					        	echo 'One Page Unbounce Template';              
					        } 							        		
					        elseif (in_category('Joomla Templates')) {
					        	echo 'One Page Joomla Template';              
					        }  
							elseif (in_category('Bundle Deals')) {
					        	echo 'Bundle Deal';              
					        } 		        							        																					
							else {
					      		echo '';						
							};
						?>
			    		
			    	</h1>

			    </div> 

			    <div class="review-content">

			    	<div class="author-review">
                                              
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<?php 

								if ( !empty( get_the_content() ) ) {
									the_content(); 
								}
								else {
									echo 'No detailed review.';
								};
						
							?>

						<?php endwhile; else: ?>

							<p>Nope, no posts matched your criteria.</p>

						<?php endif; ?>

					</div>

					<div class="build-notes">

						<blockquote>
	                   
							<?php 
			
								$oplbuild = get_post_meta($post->ID, "opl_build", true);

								if ($oplbuild != '') {
									echo $oplbuild;
								}
								else {
									echo '';
								}

							?>

						</blockquote>

					</div>

				</div>

				<div class="review-tags"><strong>Categories:</strong> <?php the_category(' ', 'parents' ); ?></div> 

				<div class="review-tags"><strong>Features:</strong> <?php the_tags('', ' ', ' '); ?></div>

			</div>	

		</div>

		<?php // floating pagination on review pages

			get_template_part('template-parts/pagination','floating'); 

		?>

		<div class="review-screenshot">

			<?php // screenshot link opened up

				echo '<a href="';
				$seo_gallery_id = get_cat_ID('Inspiration');
				$siteurl 	 = get_post_meta($post->ID, "site_url", true);
				$demourl 	 = get_post_meta($post->ID, "demo_url", true);

				if (post_is_in_descendant_category( $seo_gallery_id )) {
					echo $siteurl;
					echo '" target="_blank" class="noBorder">';
				}
				elseif ($demourl != null) {
					echo $demourl;
					echo '" target="_blank" class="noBorder">';
				}
				else {
				    echo '#container-outer" class="smoothScroll noBorder">';
				};  

			?>

				<?php // actual screenshot image

					$bigScreenshot = get_post_meta($post->ID, "screenshot", true);

					if ($bigScreenshot != '') {
						echo '<img src="'.$bigScreenshot.'" alt="'.get_the_title().' Big Screenshot" />';
					}
					else {
						echo 'No screenshot.'; // this should be the small screenshot
					};

				?>

			</a>

		</div>

		<div class="review-notes">

			<?php get_template_part('template-parts/reviews/review','screenshot-concierge'); ?>
			<?php get_template_part('template-parts/reviews/review','author'); ?>

		</div>

	</div>

	<?php wp_reset_query(); ?>
	<?php get_template_part('template-parts/reviews/similar','gallery'); ?>

<?php get_footer(); ?>
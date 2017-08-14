<?php
/**
 * @package onepagelove
 * @version 6.10.6
 *
*/ 
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
	<div class="review">
	             
		<div class="review-meta">

			<div class="review-meta-right">

				<?php get_template_part('template-parts/review','meta'); ?>

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
                                              
						<?php 

							$oplreview = get_post_meta($post->ID, "opl_review", true);

							if ($oplreview != '') {
								echo $oplreview;
							}
							else {
								echo 'No detailed review.';
							}

						?>

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
				
				<div class="review-tags"><strong>Tags:</strong> <?php the_tags('', ' ', ' '); ?></div>

			</div>	

		</div>

		<div class="review-screenshot">

			<?php get_template_part('template-parts/pagination','floating'); ?>

			<a href="<?php print get_post_meta($post->ID, 'site_url', true) ?>" target="_blank" class="noBorder">

				<?php

					$bigScreenshot = get_post_meta($post->ID, "screenshot", true);

					if ($bigScreenshot != '') {
						echo '<img src="'.$bigScreenshot.'" alt="'.get_the_title().' Big Screenshot" />';
					}
					else {
						the_content();
					};

				?>

			</a>

		</div>

		<div class="review-notes">

			<?php get_template_part('template-parts/review','author'); ?>

		</div>

	</div>

<?php endwhile; else: ?>

	<p>Nope, no posts matched your criteria.</p>

<?php endif; ?>

	<?php wp_reset_query(); ?>
	<?php get_template_part('template-parts/similar','gallery'); ?>

<?php get_footer(); ?>
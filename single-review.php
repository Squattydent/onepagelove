<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
	<div class="review">
	             
		<div class="review-meta">

			<div class="review-meta-right">

				<?php include ('frontend/inc/review-meta-right.php'); ?>

			</div><!-- /.review-meta-right -->	

			<div class="review-meta-left">

			    <div class="review-type">

					<?php  			
					if (in_category('HTML Templates')) {
			      	echo 'One Page HTML Template Review';							
					}		
					elseif (in_category('Muse Templates')) {
			      	echo 'One Page Adobe Muse Template Review';							
					}										
					elseif (in_category('WordPress Themes')) {
			      	echo 'One Page WordPress Theme Review';							
					}		
					elseif (in_category('PSD Templates')) {
			      	echo 'One Page PSD Template Review';							
					}
			        elseif (in_category('Tumblr Themes')) {
			        echo 'One Page Tumblr Theme Review';              
			        }                
			        elseif (in_category('Squarespace Templates')) {
			        echo 'One Page Squarespace Template Review';              
			        }  	
			        elseif (in_category('Unbounce Templates')) {
			        echo 'One Page Unbounce Template Review';              
			        } 							        		
			        elseif (in_category('Joomla Templates')) {
			        echo 'One Page Joomla Template Review';              
			        }  
					elseif (in_category('Bundle Deals')) {
			        echo 'Bundle Deal Review';              
			        } 		        							        																					
					else {
			      	echo 'Unique One Page Website Review';						
					};
					?>

				</div>         

			    <div class="review-title">

			    	<h1><?php the_title(); ?></h1>

			    </div> 

			    <div class="review-content">
                                              
					<?php // One Page Review

						$oplreview = get_post_meta($post->ID, "opl_review", true);

						if ($oplreview != '') {
						echo '<div id="oplReview">';
						echo '';
						echo $oplreview;
						echo '</div>';
						}
						else {
						echo '';
						}

					?>
                   
					<?php // Build Notes
	
						$oplbuild = get_post_meta($post->ID, "opl_build", true);

						if ($oplbuild != '') {
						echo '<div id="oplBuild">';
						echo '<blockquote>';
						echo $oplbuild;
						echo '</blockquote></div>';
						}
						else {
						echo '';
						}

					?>

				</div><!-- .review-content -->

				<div class="review-tags"><strong>Categories:</strong> <?php the_category(' ', 'parents' ); ?></div> 
				<div class="review-tags"><strong>Tags:</strong> <?php the_tags('', ' ', ' '); ?></div>

			</div><!-- /.review-meta-left -->	

		</div><!-- /.review-meta -->

		<div class="review-screenshot">

			<?php include ('frontend/inc/pagination-floating.php'); ?>

			<a href="<?php print get_post_meta($post->ID, 'site_url', true) ?>" target="_blank" class="noBorder">

				<?php

					$bigScreenshot = get_post_meta($post->ID, "screenshot", true);

					if ($bigScreenshot != '') {
						echo '<img src="'.$bigScreenshot.'" />';
					}
					else {
						the_content();
					};

				?>

			</a>

		</div><!-- /.review-screenshot -->

		<div class="review-notes">

			<?php include ('frontend/inc/review-author.php'); ?>

			<div class="clear"></div>

		</div>

	</div><!-- /.review --> 

<?php endwhile; else: ?>

	<p>Nope, no posts matched your criteria.</p>

<?php endif; ?>

	<?php wp_reset_query(); ?>
	<?php include ('frontend/inc/similar-gallery.php'); ?>

<?php get_footer(); ?>
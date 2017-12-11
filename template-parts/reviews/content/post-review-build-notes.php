<?php
/**
 * @package onepagelove
 * @version 6.11.37
 *
*/ 
?>
<div class="review-content">

	<div class="author-review">
                              
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php 

				$thecontent = get_the_content();
				
				if (!empty($thecontent)) {
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
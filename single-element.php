<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
		<div class="pages">

			<div class="section section-intro section-padding">

				<div class="section-gradient">

				    <div class="section-tagline">Web Design Element</div>				
					<div class="section-title"><h1><?php the_title(); ?></h1></div>
					<div class="section-description">
						
						<?php // Taken from One Page Review custom field

							$oplreview = get_post_meta($post->ID, "opl_review", true);

							if ($oplreview != '') {
								echo $oplreview;
							}
							else {
								echo 'No overview given.';
							}

						?>

					</div>

				</div>

			</div>
		           
			<?php include ('frontend/inc/pagination-floating.php'); ?>

			<div class="section-content">
				
				<?php the_content(''); ?>

			</div>

			<div class="section-submit">

				<p>This is an ongoing collection of <?php the_title(); ?>. Seen any other good references? <a href="https://twitter.com/OnePageLove">Tweet us</a> the link!</p>

				<p><strong>Need more inspiration?</strong> See our full collection of <a href="

				<?php

					$dev_url = get_post_meta($post->ID, "dev_url", true); 

					if ($dev_url != '') {
						echo $dev_url;
					}
					else {
						echo '#';
					};

				?>

				">One Page websites tagged with "<?php the_title(); ?>"</a>.</p> 

				<p>ps. if Pinning is your jam, here is our <a href="

				<?php

					$site_url = get_post_meta($post->ID, "site_url", true); 

					if ($site_url != '') {
						echo $site_url;
					}
					else {
						echo '#';
					};

				?>

 				" target="_blank"><?php the_title(); ?> Pinterest board</a>:)</p>

			</div>
	           
		</div><!-- /.pages -->
   
	<?php endwhile; else: ?>

		<p>Nope, no posts matched your criteria.</p>

	<?php endif; ?>

	<?php wp_reset_query(); ?>
	<?php include ('frontend/inc/similar-other.php'); ?>

<?php get_footer(); ?>
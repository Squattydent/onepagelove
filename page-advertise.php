<?php 
/* 
Template Name: Advertise
*/ 
?>

<?php get_header(); ?>
 
	<div class="pages sponsored-posts">

		<div class="section section-padding">

			<div class="section-gradient">

			    <div class="section-tagline">Advertise on One Page Love with</div>				
				<div class="section-title"><h1><?php the_title(); ?></h1></div>
				<div class="section-description">
					
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php the_content('Read more...'); ?>

					<?php endwhile; else: ?>

						<p>Nope, no pages matched your criteria.</p>

					<?php endif; ?>

				</div>

			</div>

			<div class="section-buttons">
				
				<div class="button"><a href="https://onepagelove.com">Back to home</a></div>
				<div class="button"><a class="maverick" href="mailto:advertising@onepagelove.com">Email us</a></div>

			</div>

		</div>
           
	</div><!-- /.pages -->

<?php get_footer(); ?>
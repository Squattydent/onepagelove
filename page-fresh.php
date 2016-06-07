<?php 
/* 
Template Name: New Fresh Layout
*/ 
?>

<?php get_header(); ?>
 
	<div class="pages">

		<div class="section-intro">

			<div class="section-padding">

			    <div class="section-tagline">One Page Love</div>				
				<div class="section-title"><h1><?php the_title(); ?></h1></div>
				<div class="section-description">
					
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php the_content('Read more...'); ?>

					<?php endwhile; else: ?>

						<p>Nope, no pages matched your criteria.</p>

					<?php endif; ?>

				</div>

			</div>

		</div>
	           
		<div class="section-content">

			<div class="pages-content">

				<!-- general content here -->

			</div>
			
		 	<!-- custom content here -->

		</div>
           
	</div><!-- /.pages -->

<?php get_footer(); ?>
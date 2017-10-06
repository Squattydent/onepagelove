<?php
/**
 * @package onepagelove
 * @version 6.11.39
 *
*/ 
get_header(); ?>

<?php get_template_part('template-parts/include','sendowl'); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
		<div class="single-container">

			<div class="section section-padding blog-intro">

				<div class="blog-meta"><?php echo get_the_date(); ?> - <?php the_category(', ', 'parents' ); ?></div>
				<div class="blog-title"><h1><?php the_title(); ?></h1></div>
				
			</div>
		           
			<?php get_template_part('template-parts/pagination','floating'); ?>
	           
	      	<?php the_content(''); ?>

	      	<?php // add signature to Journal Posts
	      		if (in_category('Journal')) { echo '<p>Much love,<br />Rob<br /><a href="https://twitter.com/robhope">@robhope</a></p>'; }; 
	      	?>
		           
		</div>
   
	<?php endwhile; else: ?>

		<p>Nope, no posts matched your criteria.</p>

	<?php endif; ?>

	<?php // similar content
		wp_reset_query();
		get_template_part('template-parts/similar','posts'); 
	?>

<?php get_footer(); ?>
<?php get_header(); ?>
		
	<div class="single-container">	

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

			<?php the_content('Read more...'); ?>

			<div class="clear"></div>

		<?php endwhile; else: ?>

			<p>Nope, no posts matched your criteria.</p>

		<?php endif; ?>

	</div><!-- /.single -->

<?php get_footer(); ?>
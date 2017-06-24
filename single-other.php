<?php get_header(); ?>

<!-- Include Sendowl magic needed for Stripe and PayPal payments -->
<script type="text/javascript" src="https://transactions.sendowl.com/assets/sendowl.js" ></script>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
		<div class="single-container">

			<div class="section section-padding blog-intro">

				<div class="blog-meta"><?php echo get_the_date(); ?> - <?php the_category(', ', 'parents' ); ?></div>
				<div class="blog-title"><h1><?php the_title(); ?></h1></div>
				
			</div>
		           
			<?php include ('frontend/inc/pagination-floating.php'); ?>
	           
	      	<?php the_content(''); ?>
		           
		</div>
   
	<?php endwhile; else: ?>

		<p>Nope, no posts matched your criteria.</p>

	<?php endif; ?>

	<?php wp_reset_query(); ?>
	<?php include ('frontend/inc/similar-other.php'); ?>

<?php get_footer(); ?>
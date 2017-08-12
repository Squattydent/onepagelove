<?php
/**
 * @package onepagelove
 * @version 6.10
 *
*/ 
get_header(); ?>

<!-- Include Sendowl magic needed for Stripe and PayPal payments -->
<script type="text/javascript" src="https://transactions.sendowl.com/assets/sendowl.js" ></script>

	<div class="single-container">	

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

			<?php the_content('Read more...'); ?>

			<div class="clear"></div>

		<?php endwhile; else: ?>

			<p>Nope, no posts matched your criteria.</p>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
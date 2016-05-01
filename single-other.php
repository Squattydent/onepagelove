<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
		<div class="single-container">

		    <div class="block-right">

				<ul>
					<li><strong>Published:</strong> <?php echo get_the_date(); ?></li>
					<li><strong>Category:</strong> <?php the_category(', ', 'parents' ); ?></li>
				</ul>

				<?php include ("frontend/inc/review-meta-ad.php"); ?>
		        <?php include ("frontend/inc/review-meta-panda.php"); ?>

		        <div class="clear"></div>
		     
		    </div><!-- /.block-right -->

		    <div class="single-title"><h1><?php the_title(); ?></h1></div>
		         
		    <div class="single-content">
		           
				<?php include ('frontend/inc/pagination-floating.php'); ?>
		           
		      	<?php the_content(''); ?>
		           
		  	</div><!-- /single-content -->
		           
		</div><!-- /.single-container -->
   
	<?php endwhile; else: ?>

		<p>Nope, no posts matched your criteria.</p>

	<?php endif; ?>

	<?php wp_reset_query(); ?>
	<?php include ('frontend/inc/similar-other.php'); ?>

<?php get_footer(); ?>
<?php get_header(); ?>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 
   <div class="single-container">

       <div class="block-right">


			  <div class="review-ad-holder"><?php include ("inc/ad-primary.php"); ?></div>
			  <div class="review-ad-holder"><?php include ("inc/ad-secondary.php"); ?></div>

			
			<div class="clear"></div>
						
         
            <p><strong>Date:</strong> <?php echo get_the_date(); ?><br />
			<strong>Category:</strong> <?php the_category(', ', 'parents' ); ?><br />
			<strong>Comments:</strong> <a href="<?php the_permalink(); ?>#disqus_thread">Comments</a></p>
         
       </div><!-- /.block-right -->

       <div class="single-title"><h1><?php the_title(); ?></h1></div>
             
       <div class="single-content">
               
			   <?php include ('inc/floating-pagination.php'); ?>
               
               <?php the_content(''); ?>
               
               </div><!-- /single-content -->

			   	<div id="comments">

				    <?php comments_template(); ?>

				</div><!-- /#comments -->
               
   </div><!-- /.single-container -->
   
<?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
<?php wp_reset_query(); ?>
 <?php endif; ?>

<?php include ('inc/similar-other.php'); ?>

<?php get_footer(); ?>
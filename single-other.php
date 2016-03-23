<?php get_header(); ?>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 
   <div class="single-container">

       <div class="block-right">

       <ul>
         <li><strong>Published:</strong> <?php echo get_the_date(); ?></li>
         <li><strong>Category:</strong> <?php the_category(', ', 'parents' ); ?></li>
       </ul>

			  <div class="review-ad-holder"><?php include ("inc/ad-primary.php"); ?></div>

        <?php include ("inc/meta-jobs-panda.php"); ?>

        <div class="clear"></div>
						
         
       </div><!-- /.block-right -->

       <div class="single-title"><h1><?php the_title(); ?></h1></div>
             
      <div class="single-content">
               
			   <?php include ('inc/floating-pagination.php'); ?>
               
          <?php the_content(''); ?>
               
      </div><!-- /single-content -->
               
   </div><!-- /.single-container -->
   
<?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
<?php wp_reset_query(); ?>
 <?php endif; ?>

<?php include ('inc/similar-other.php'); ?>

<?php get_footer(); ?>
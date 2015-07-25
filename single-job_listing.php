<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
<div class="single job">
             
             	<div class="job-meta">

				                <div class="job-type">Job Listing</div>                 
				                <div class="job-title"><h1><?php the_title(); ?></h1></div> 
                               
                 </div><!-- /.job-meta -->
    
			     <?php include ('inc/floating-pagination.php'); ?>
			
             	 <div class="job-content">			
 
                 	<?php the_content(); ?>

                 </div><!-- /.job-content -->
                   
</div><!-- /.single job --> 

<?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
<?php wp_reset_query(); ?>
<?php endif; ?>

<?php get_footer(); ?>
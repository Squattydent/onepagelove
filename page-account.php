<?php 
/* 
Template Name: Account
*/ 
?>

<?php get_header(); ?>

<div class="archive-header">
	
		 <div class="archive-header-info">
	
			<div class="archive-title"><h1><?php global $current_user; get_currentuserinfo(); echo '' . $current_user->display_name . "'s\n"; ?> Account Details</h1>
			</div><!--  /.archive-title -->
			
			<div class="archive-description">Simply edit your details below then hit the update button.</div>
 	
		 </div><!--  /.archive-header-info -->
		
		<div class="clear"></div>
		
</div><!--  /.archive-header -->
		
		<div class="single-container">	

	      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	      <div class="single-content">

			      <?php the_content('Read more...'); ?>
			
			     <hr />
			
		 	     <h3>Clear your favorites list</h3>

		         <p>Warning, clicking the link below will instantly clear all your favorites:</p>
			
			     <p><?php wpfp_clear_list_link() ?></p>

			     <hr/>

			     <h3>Delete Account</h3>

		         <p>We're still working on this feature, please just email <a href="mailto:support@onepagelove.com">support@onepagelove.com</a> and we'll prioritise it!</p>
			

			</div>
			
	      <?php endwhile; else: ?>
		
	       <p>Sorry, no posts matched your criteria.</p>

	      <?php endif; ?>
	
		</div><!-- /.single -->

<?php get_footer(); ?>
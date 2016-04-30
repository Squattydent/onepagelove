<?php 
/* 
Template Name: Favorites
*/ 
?>

<?php get_header(); ?>

<?php if ( is_user_logged_in() ) { ?>

<div class="archive-header">
	
		 <div class="archive-header-info">
	
			<div class="archive-title"><h1><?php global $current_user; get_currentuserinfo(); echo '' . $current_user->display_name . "'s\n"; ?> Favorites</h1>
			</div><!--  /.archive-title -->
			
			<div class="archive-description"><?php include("frontend/inc/random-naming-favorites.php"); ?></div>
 	
		 </div><!--  /.archive-header-info -->
		
		<div class="clear"></div>
		
</div><!--  /.archive-header -->
	

	      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	      <?php the_content('Read more...'); ?>
	
	      <?php endwhile; else: ?>
		
	       <p>Sorry, no posts matched your criteria.</p>

	      <?php endif; ?>
	
	
<?php } 
else { ?>

<?php include ("frontend/inc/prompt-log-in.php"); ?>

<?php } ?>
	
	 
<?php get_footer(); ?>
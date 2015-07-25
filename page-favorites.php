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
			
			<div class="archive-description"><?php echo adManager::ad_zone( 9 ); ?></div>
 	
		 </div><!--  /.archive-header-info -->

		<div class="archive-header-ad">
	
			<?php include ("inc/ad-carbon.php"); ?>
	
		</div><!--  /.archive-header-ad -->
		
		<div class="clear"></div>
		
</div><!--  /.archive-header -->
	

	      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	      <?php the_content('Read more...'); ?>
	
	      <?php endwhile; else: ?>
		
	       <p>Sorry, no posts matched your criteria.</p>

	      <?php endif; ?>
	
	
<?php } 
else { ?>

<?php include ("inc/prompt-log-in.php"); ?>

<?php } ?>
	
	 
<?php get_footer(); ?>
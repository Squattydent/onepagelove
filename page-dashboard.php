<?php 
/* 
Template Name: Dashboard
*/ 
?>

<?php get_header(); ?>

<?php if ( is_user_logged_in() ) { ?>

<div class="archive-header">
	
		 <div class="archive-header-info">
	
			<div class="archive-title">
				<h1><?php include("inc/random-naming-hello.php"); ?> <?php global $current_user; get_currentuserinfo(); echo '' . $current_user->display_name . "\n"; ?></h1>
			</div><!--  /.archive-title -->
			
			<div class="archive-description">We're still in the early stages of the new feature roll out, right now you can just view your <a href="<?php print get_home_url(); ?>/favorites">Favorites</a> and <a href="<?php print get_home_url(); ?>/freebies">Freebies</a>. Until then, here are the recent <a href="<?php print get_home_url(); ?>/gallery/most-loved">Most Loved</a> awards:</div>
 	
		 </div><!--  /.archive-header-info -->
		
		<div class="clear"></div>
		
</div><!--  /.archive-header -->
	
	<?php if ( have_posts() ) : 
	
	$my_query = new WP_Query('post_type=any&category_name=most+loved&posts_per_page=12');  
	while ($my_query->have_posts()) : $my_query->the_post(); ?>

      <?php get_template_part('loop'); ?>


	 <?php  ?>


      <?php endwhile; else: ?>
       <p>Sorry, no posts matched your criteria.</p>

       <?php endif; ?>	

<?php wp_reset_query(); ?>


<?php } 
else { ?>
	
<?php include ("inc/prompt-log-in.php"); ?>
							
<?php } ?>

<?php get_footer(); ?>
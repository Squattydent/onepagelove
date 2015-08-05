<?php 
/* 
Template Name: Theme
*/ 
?>

<?php get_header(); ?>

<div class="archive-header">
	
		 <div class="archive-header-info">
	
			<div class="archive-title"><h1><?php the_title(); ?></h1>
			</div><!--  /.archive-title -->
			
			<div class="archive-description"><?php $page_tagline = get_post_meta($post->ID, "page_tagline", true); echo $page_tagline; ?></div>
 	
		 </div><!--  /.archive-header-info -->

		<div class="archive-header-ad">
	
			<?php include ("inc/ad-primary.php"); ?>
	
		</div><!--  /.archive-header-ad -->
		
		<div class="clear"></div>
		
</div><!--  /.archive-header -->
		
		<div class="single-container theme">	

	      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	      <?php the_content('Read more...'); ?>
	
	      <div class="clear"></div>
	
	      <?php endwhile; else: ?>
		
	       <p>Sorry, no posts matched your criteria.</p>

	      <?php endif; ?>
	
		</div><!-- /.single -->

<?php get_footer(); ?>
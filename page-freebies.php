<?php 
/* 
Template Name: Freebies
*/ 
?>

<?php get_header(); ?>


<div class="archive-header">
	
	 <div class="archive-header-info">

		<div class="archive-title"><h1>One Page Love Freebies</h1>
		</div><!--  /.archive-title -->
		
		<div class="archive-description">Who doesn't like free stuff! This is a small thank you for signing up as a member on One Page Love. 
		We're planning on filling this section up properly soon, until then enjoy our first icon set freebie. Also don't forget to check out the <a href="<?php print get_home_url(); ?>/templates/free-templates">Free One Page Templates</a> category.</div> 
	
	 </div><!--  /.archive-header-info -->
	
	<div class="clear"></div>
		
</div><!--  /.archive-header -->

<div class="single-container">

	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	  	<?php the_content('Read more...'); ?> 

	  <?php endwhile; else: ?>

	   	<p>Sorry, no posts matched your criteria.</p>

	  <?php endif; ?>

			<!--  Download link if logged in or prompt log in if logged out -->

			<?php if ( is_user_logged_in() ) { ?>

				<p><a href="https://onepagelove.com/download/love-icon-set">Download</a> (2.4MB)</p> 
				
			<?php } 
			else { ?>


				<p>Oops! You need to <a href="<?php print get_home_url(); ?>/wp-login.php">log in</a> to access this download link.</p> 

				<p><b>Not signed up?</b> Don't stress! It takes only 30 seconds to join and is completely free: <a href="<?php print get_home_url(); ?>/join">Sign up free here</a>.</p>

			<?php } ?>

</div><!-- /.single -->
	
	 
<?php get_footer(); ?>
<?php get_header(); ?>

   <?php if(! $paged || $paged < 2) :  ?>
		
		<div class="archive-header">

				 <div class="archive-header-info">

					<div class="archive-title"><?php echo adManager::ad_zone( 5 ); ?></div>

					<div class="archive-description">
						<p>Browse <a href="<?php print get_home_url(); ?>/gallery" title="Browse Beautiful One Page Websites"><?php echo wp_count_posts()->publish; ?> One Page Websites</a>, 
						Find <a href="<?php print get_home_url(); ?>/templates" title="Find One Page Website Templates and Themes">One Page Templates</a> 
						or Explore <a href="<?php print get_home_url(); ?>/resources" title="Explore One Page Website Design and Development Resources">Design & Development Resources</a>.</p>
					</div>

				 </div><!--  /.archive-header-info -->

				 <div class="archive-header-ad">

					<?php include ("inc/ad-carbon.php"); ?>

				 </div><!--  /.archive-header-ad -->

				<div class="clear"></div>

		</div><!--  /.archive-header -->
		
    <?php else : ?>

	<div class="archive-header">

			 <div class="archive-header-info">

				<div class="archive-title"><?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; echo 'You are browsing page '.$paged.' of '.$wp_query->max_num_pages.' in our '; ?><?php echo adManager::ad_zone( 7 ); ?></div>

				<div class="archive-description">
					<p>Your are browsing all categories. Browse just the <a href="<?php print get_home_url(); ?>/gallery" title="Browse One Page Websites"> Gallery</a> or  
					 <a href="<?php print get_home_url(); ?>/templates" title="Browse One Page Website Templates">Templates</a> or
					 <a href="<?php print get_home_url(); ?>/resources" title="Browse One Page Website Design Resources">Resources</a>.
					</p></div>

			 </div><!--  /.archive-header-info -->

			 <div class="archive-header-ad">

				<?php include ("inc/ad-carbon.php"); ?>

			 </div><!--  /.archive-header-ad -->

			<div class="clear"></div>

	</div><!--  /.archive-header -->
	
    <?php endif; ?>

	<div class="archive-container">

	   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
	    <?php get_template_part('loop'); ?>

	   <?php endwhile; else: ?>
	   <p>Sorry, no posts matched your criteria.</p>

	   <?php endif; ?>

   </div><!--  /.archive-container -->

   <?php include ("inc/pagination.php"); ?>

<?php get_footer(); ?>
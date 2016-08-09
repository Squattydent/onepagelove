<?php get_header(); ?>

   <?php if(! $paged || $paged < 2) :  ?>
		
		<div class="archive-header">

				 <div class="archive-header-info">

					<div class="archive-title"><span class="grey-shadow">The ultimate showcase of One Page websites.</span></div>

					<div class="archive-description">

						<span class="grey-shadow">
							<p>Browse <a href="<?php print get_home_url(); ?>/gallery">One Page Websites</a>, 
							find <a href="<?php print get_home_url(); ?>/templates">One Page Templates</a> 
							or explore <a href="<?php print get_home_url(); ?>/elements">Design Elements</a>.</p>
						</span>	

					</div>

				 </div><!--  /.archive-header-info -->

				<div class="clear"></div>

		</div><!--  /.archive-header -->
		
    <?php else : ?>

	<div class="archive-header">

			 <div class="archive-header-info">

				<div class="archive-title"><span class="grey-shadow"><?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; echo 'You are browsing page '.$paged.' of '.$wp_query->max_num_pages.' in our '; ?> <?php include("frontend/inc/random-naming-archives.php"); ?></span></div>

				<div class="archive-description">
					<span class="grey-shadow">
						<p>Your are browsing all categories. Browse just the <a href="<?php print get_home_url(); ?>/gallery"> Gallery</a>,   
						 <a href="<?php print get_home_url(); ?>/templates">Templates</a>, <a href="<?php print get_home_url(); ?>/elements">Elements</a> or <a href="<?php print get_home_url(); ?>/resources">Resources</a>.
						</p>
					</span>
				</div>

			 </div><!--  /.archive-header-info -->

			<div class="clear"></div>

	</div><!--  /.archive-header -->
	
    <?php endif; ?>

	<div class="archive-container">

	   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
	    <?php get_template_part('loop'); ?>

	   <?php endwhile; else: ?>
	   <p>Sorry, no posts matched your criteria.</p>

	   <?php endif; ?>

	   	<?php include ("frontend/inc/loop-hosting.php"); ?>

   </div><!--  /.archive-container -->

   <?php include ("frontend/inc/pagination.php"); ?>

<?php get_footer(); ?>
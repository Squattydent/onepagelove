<?php get_header(); ?>

   <?php if(! $paged || $paged < 2) :  ?>
		
		<div class="archive-header">

				 <div class="archive-header-info">

					<div class="archive-title">The ultimate showcase of One Page websites.</div>

					<div class="archive-description">
						<p>Browse <a href="<?php print get_home_url(); ?>/gallery" title="Browse Beautiful One Page Websites">One Page Websites</a>, 
						find <a href="<?php print get_home_url(); ?>/templates" title="Find One Page Website Templates and Themes">One Page Templates</a> 
						or get <a href="<?php print get_home_url(); ?>/hosting" title="Get One Page Website Hosting">Website Hosting</a>.</p>
					</div>

				 </div><!--  /.archive-header-info -->

				<div class="clear"></div>

		</div><!--  /.archive-header -->
		
    <?php else : ?>

	<div class="archive-header">

			 <div class="archive-header-info">

				<div class="archive-title"><?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; echo 'You are browsing page '.$paged.' of '.$wp_query->max_num_pages.' in our '; ?> <?php include("frontend/inc/random-naming-archives.php"); ?></div>

				<div class="archive-description">
					<p>Your are browsing all categories. Browse just the <a href="<?php print get_home_url(); ?>/gallery" title="Browse One Page Websites"> Gallery</a> or  
					 <a href="<?php print get_home_url(); ?>/templates" title="Browse One Page Website Templates">Templates</a> or
					 <a href="<?php print get_home_url(); ?>/resources" title="Browse One Page Website Design Resources">Resources</a>.
					</p></div>

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

   </div><!--  /.archive-container -->

   <?php include ("frontend/inc/pagination.php"); ?>

<?php get_footer(); ?>
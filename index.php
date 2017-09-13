<?php
/**
 * @package onepagelove
 * @version 6.11.9
 *
*/ 
get_header(); ?>

   <?php if(! $paged || $paged < 2) :  ?>
		
		<div class="archive-header">

				 <div class="archive-header-info">

					<div class="archive-title"><span class="grey-shadow">The ultimate showcase of One Page websites</span></div>

					<div class="archive-description">

						<span class="grey-shadow">
							Browse <a href="<?php print get_home_url(); ?>/gallery">Website Inspiration</a>, 
							find <a href="<?php print get_home_url(); ?>/templates">Templates</a> 
							or see our <a href="https://onepagelove.com/go/bluehost"><?php echo date("F"); ?> Hosting Special</a> 🎉
						</span>	

					</div>

				 </div>

				<div class="clear"></div>

		</div>
		
    <?php else : ?>

	<div class="archive-header">

			 <div class="archive-header-info">

				<div class="archive-title"><span class="grey-shadow"><?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; echo 'You are browsing page '.$paged.' of '.$wp_query->max_num_pages.' in our '; ?> <?php get_template_part('template-parts/snippets/random','naming-archives'); ?></span></div>

				<div class="archive-description">
					<span class="grey-shadow">
						You are browsing all categories. Browse just the <a href="<?php print get_home_url(); ?>/gallery">Unique Gallery</a> or    
						 <a href="<?php print get_home_url(); ?>/templates">Find Templates</a>.
					</span>
				</div>

			 </div>

			<div class="clear"></div>

	</div>
	
    <?php endif; ?>

	<div class="archive-container">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php get_template_part('template-parts/loop','thumb'); ?>

		<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

	<?php get_template_part('template-parts/loop','thumb-promo'); ?>

	</div>

   <?php get_template_part('template-parts/pagination','numbers'); ?>

<?php get_footer(); ?>
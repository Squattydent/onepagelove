<?php
/**
 * @package onepagelove
 * @version 6.10.20
 *
*/ 
?>
<div class="similar">

	<div class="similar-title">Related posts</div>
	
	<div class="archive-container">

		<?php get_template_part('template-parts/loop','thumb-promo'); ?>
			
		<?php if (have_posts()) : $count = 0; 
		$categories = get_the_category();
		$thiscat = $categories[0]->cat_ID;
		?>
		<?php query_posts('showposts=5&orderby=rand&cat=' . $thiscat);  while (have_posts()) : the_post(); $count++; ?>

				<?php get_template_part('loop'); ?>

			<?php endwhile; else: ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
		
	</div>
	
</div>
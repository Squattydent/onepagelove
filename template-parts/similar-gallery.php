<?php
/**
 * @package onepagelove
 * @version 6.11.1
 *
*/ 
?>
<div class="similar">

	<div class="similar-title">Similar One Page Websites</div>
 
	<div class="similar-submit"><a href="<?php print get_home_url(); ?>/submit">Submit</a></div>

	<div class="archive-container">
	
		<?php get_template_part('template-parts/loop','thumb-promo'); ?>

		<?php
		$categories = get_the_category($post->ID);
		if ($categories) {
			$category_ids = array();
			foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
			
			$args=array(
				'category__in' => $category_ids,
				'post__not_in' => array($post->ID),
				'showposts'=>11,
				'ignore_sticky_posts'=>1
			);
			$my_query = new wp_query($args);
			if( $my_query->have_posts() ) {
				while ($my_query->have_posts()) {
					$my_query->the_post();
				?>
					<?php get_template_part('template-parts/loop','thumb'); ?>
				<?php
				}
			}
		}
		?>

		<?php wp_reset_query(); ?>
		
	</div><!--  /.archive-container -->
	
</div>
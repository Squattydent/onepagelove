<?php
/**
 * @package onepagelove
 * @version 6.11.26
 *
*/ 
get_header(); ?>

	<div class="archive-header">

		<div class="archive-header-info">

			<div class="archive-title">

				<h1>

					<?php 
					
						if (is_search()) {
						printf( __( '%d %s' ,'onepagelove' ), $wp_query->found_posts, _n( ' search result', 'search results', $wp_query->found_posts), get_search_query() );
						echo ' for &quot;'.esc_html($s).'&quot;';
						};

					?>

				</h1>

			</div>

			<div class="archive-description">  

				<?php get_template_part('template-parts/snippets/search','suggestions'); ?>

				<div class="results-search">

				

				</div>

				<?php 
					echo do_shortcode( '[searchandfilter fields="search,category" types=",radio" hierarchical=",1" all_items_labels=",All Posts" submit_label="Filter Results" order_by=",count"]' );
				?>

			</div>

		</div><!--  /.archive-header-info -->

		<div class="clear"></div>

	</div><!--  /.archive-header -->

	<div class="archive-container">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    			<?php get_template_part('template-parts/loop','thumb'); ?> 

			<?php endwhile; else: ?>

				<?php get_template_part('template-parts/snippets/no','search-results'); ?>

			<?php endif; ?>

		<?php get_template_part('template-parts/loop','thumb-promo'); ?>

	</div>

	<?php get_template_part('template-parts/pagination','numbers'); ?>

<?php get_footer(); ?>

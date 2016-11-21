<?php get_header(); ?>

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

				<div class="results-search">

					<form class="search" action="<?php print get_site_url(); ?>/" method="get"><input type="text" class="search-field" name="s" value="<?php  if (is_search()) {esc_attr_e($s);} else {echo ('Search');} ?>" onFocus="this.value=''" /></form>

				</div>

			</div>

		</div><!--  /.archive-header-info -->

		<div class="clear"></div>

	</div><!--  /.archive-header -->

	<div class="archive-container">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php get_template_part('loop'); ?>

			<?php endwhile; else: ?>

				<div class="no-results">

					<p>Sorry, no posts matched your search term - try browse using the categories in the top header menu.</p>

					<p>If you get stuck, please mail us on <a href="mailto:support@onepagelove.com">support@onepagelove.com</a> and we'd be happy to assist.</p>

				</div>

			<?php endif; ?>

		<?php include ("frontend/inc/loop-hosting.php"); ?>

	</div>

	<?php include ("frontend/inc/pagination.php"); ?>

<?php get_footer(); ?>

<?php get_header(); ?>

<div class="archive-header">
	
		 <div class="archive-header-info">
	
			<div class="archive-title"><h1><?php 

        	// search			
			if (is_search()) {
			printf( __( '%d %s' ,'onepagelove' ), $wp_query->found_posts, _n( ' search result', 'search results', $wp_query->found_posts), get_search_query() );
            echo ' for &quot;'.esc_html($s).'&quot;';
			};

			?></h1>
			</div><!--  /.archive-title -->
			
			<div class="archive-description">  
				<div class="results-search">
              	<form class="search" action="<?php print get_site_url(); ?>/" method="get"><input type="text" class="search-field" name="s" value="<?php  if (is_search()) {esc_attr_e($s);} else {echo ('Search');} ?>" onFocus="this.value=''" /></form>
            	</div><!-- /.header-search -->
			</div>
 	
		 </div><!--  /.archive-header-info -->

		<div class="archive-header-ad">
	
			<?php include ("inc/ad-carbon.php"); ?>
	
		</div><!--  /.archive-header-ad -->
		
		<div class="clear"></div>
		
</div><!--  /.archive-header -->

   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     

      <?php get_template_part('loop'); ?>


      <?php endwhile; else: ?>
        
        <div class="single-container"><p>Sorry, no content matched your criteria:(</p><p>Try use different keywords or browse using the categories.</p></div>

       <?php endif; ?>

	  <?php include ("inc/pagination.php"); ?>
        

<?php get_footer(); ?>

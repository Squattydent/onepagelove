<?php get_header(); ?>

<div class="archive-header">
	
		 <div class="archive-header-info">
	
			<div class="archive-title"><h1><?php 

        	// Tags			
			if (function_exists('is_tag') && is_tag()) {
            echo 'You are browsing '.$wp_query->found_posts, _n( ' One Pager', ' One Pagers', $wp_query->found_posts).'';
            echo ' tagged with: ';								
            wp_title('',true,'');
			}
			
      		// Gallery Home			
			elseif (is_category('Gallery')) {
          	echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).' unique One Page websites';	
			}		

	      		// Most loved			
				elseif (is_category('Most Loved')) {
	          	echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).'';							
	          	echo ' "Most Loved" One Page Websites';		
				}					
			
      		// Templates Home			
			elseif (is_category('Templates')) {
          	echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).' One Page Templates';							
			}

	      		// HTML Templates
				elseif (is_category('HTML Templates')) {
				echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).' One Page HTML Templates';							
				}			

	      		// PSDs
				elseif (is_category('PSD Templates')) {
				echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).' One Page PSD Templates';							
				}

	      		// Free templates
				elseif (is_category('Free Templates')) {
				echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).' Free One Page Templates';							
				}	

	      		// WordPress themes
				elseif (is_category('WordPress Themes')) {
				echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).' One Page WordPress Themes';							
				}						

	      		// Tumblr themes
				elseif (is_category('Tumblr Themes')) {
				echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).' One Page Tumblr Themes';							
				}	

	      		// Squarespace templates
				elseif (is_category('Squarespace Templates')) {
				echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).' One Page Squarespace Templates';							
				}		

	      		// Bootstrap Framework Templates
				elseif (is_category('Bootstrap Framework')) {
				echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).' One Page Templates using the Bootstrap Framework';							
				}		

				// Templates Sub-Category			
				elseif (in_category('Templates')) {
	          	echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).' One Page ';	
	          	wp_title('',true,'');				
				}											
			
      		// Blog			
			elseif (is_category('Blog')) {
          	echo 'You are browsing the One Page Love blog';		
			}	

				// Announcements			
				elseif (is_category('Announcements')) {
	          	echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).'';							
	          	echo ' Announcements';		
				}	

				// Articles			
				elseif (is_category('Articles')) {
	          	echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).'';							
	          	echo ' Articles';		
				}	

				// Interviews			
				elseif (is_category('Interviews')) {
	          	echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).'';							
	          	echo ' Interviews';		
				}	
			
      		// resources			
			elseif (is_category('Resources')) {
	        echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).'';							
          	echo 'Design & Development Resources';								
			}		

	      		// design resources			
				elseif (is_category('Design Resources')) {
	      		echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).'';						
	          	echo 'One Page Design Resources';								
				}	

	      		// design resources			
				elseif (is_category('Development Resources')) {
	      		echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).'';						
	          	echo 'One Page Development Resources';								
				}	

	      		// design resources			
				elseif (is_category('Hosting')) {
	      		echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).'';						
	          	echo 'Hosting reviews';								
				}						

	      		// round ups			
				elseif (is_category('Round Ups')) {
	          	echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).'';							
	          	echo ' Round Ups';		
				}											
				
	      		// tutorials			
				elseif (is_category('Tutorials')) {
	          	echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).'';							
	          	echo ' Tutorials';		
				}	

      		// Sponsored			
			elseif (is_category('Sponsored')) {
	        echo 'You are browsing posts by One Page Love Sponsors';														
			}

      		// Remaining One Page Gallery categories			
			elseif (is_archive()) {
          	echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).' One Page ';							
          	wp_title('',true,'');
          	echo ' Websites';
			};

			?></h1>
			</div><!--  /.archive-title -->
			
			<div class="archive-description"><?php echo category_description( $category_id ); ?></div>
 	
		 </div><!--  /.archive-header-info -->
		
		<div class="clear"></div>
		
</div><!--  /.archive-header -->

<div class="archive-container">

   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part('loop'); ?>

      <?php endwhile; else: ?>
       <p>Sorry, no posts matched your criteria.</p>

       <?php endif; ?>

</div><!--  /.archive-container -->

	<?php include ("frontend/inc/pagination.php"); ?>

<?php get_footer(); ?>
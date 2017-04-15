<?php get_header(); ?>

<div class="archive-header">
	
	<div class="archive-header-info">
		
		<div class="archive-title">

			<span class="grey-shadow">

				<h1><?php 

					// Get the variables
					include('frontend/inc/seo/variables.php');

					// Tags			
					if (function_exists('is_tag') && is_tag()) {

						if ($seo_count > 0) {
						    echo 'You are browsing ';
						    echo $seo_count;
						    echo $seo_plural;
						    echo ' tagged with: ';	
							echo $seo_title;
						}

						// Zero Results Tag
						else {
							echo 'No results tagged with: ';
							echo $seo_title;
						};

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

				  		// Submissions			
						elseif (is_category('Submissions')) {
				      	echo 'Community Submissions';		
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

						// OPL Journal			
						elseif (is_category('Journal')) {
				      	echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).'';								
				      	echo ' posts in the One Page Love Journal';	
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
					
						// Resources			
						elseif (is_category('Resources')) {
					    echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).'';							
					  	echo 'Design & Development Resources';								
						}		

				  		// Hosting		
						elseif (is_category('Hosting')) {
				  		echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).'';						
				      	echo 'Hosting reviews';								
						}						

				  		// Round ups			
						elseif (is_category('Round Ups')) {
				      	echo 'You are browsing '.$wp_query->found_posts, _n( ' ', ' ', $wp_query->found_posts).'';							
				      	echo ' Round Ups';		
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

			</span><!--  /.grey-shadow -->	

		</div><!--  /.archive-title -->

		<div class="archive-description">

			<span class="grey-shadow">

				<?php echo category_description(); ?>

			</span><!--  /.grey-shadow -->

		</div>
 	
	</div><!--  /.archive-header-info -->
		
	<div class="clear"></div>
		
</div><!--  /.archive-header -->

<div class="archive-container">

   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part('loop'); ?>

    <?php endwhile; else: ?>

		<?php include('frontend/inc/no-results.php'); ?>

    <?php endif; ?>

    <?php include ("frontend/inc/loop-thumb.php"); ?>   

</div><!--  /.archive-container -->

	<?php include ("frontend/inc/pagination.php"); ?>

<?php get_footer(); ?>
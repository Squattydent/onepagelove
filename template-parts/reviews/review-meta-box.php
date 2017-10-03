<?php
/**
 * @package onepagelove
 * @version 6.11.33
 *
*/ 
?>
<div class="review-meta-right-padding-hack">

	<?php 

		// Modals and SendOwl functionality

		if (in_category('License Templates')) {
			get_template_part('template-parts/include','sendowl');  
			get_template_part('template-parts/reviews/modals/modal','license');             
		} 
		elseif (in_category('Buy Templates')) {
			get_template_part('template-parts/include','sendowl');           
		} 
		elseif (in_category('Pixelarity Templates')) {
			get_template_part('template-parts/reviews/modals/modal','pixelarity');             
		} 	

		// Free WordPress with reddrection link aka legacy listing
	 	elseif ( in_category('WordPress Themes') and in_category('Legacy Templates') ) {
			get_template_part('template-parts/reviews/modals/modal','codeable-free-legacy'); 
		}	
		// Free WordPress with direct download link
		elseif ( in_category('WordPress Themes') and in_category('Free Templates') ) {
			get_template_part('template-parts/reviews/modals/modal','codeable-free'); 
		}	
		// Premium WordPress listing that links out
	 	elseif ( in_category('WordPress Themes')) {
			get_template_part('template-parts/reviews/modals/modal','codeable-premium'); 
		}			

		// Free Templates (Non-WP) but old non-direct download link ie. links out
	 	elseif ( in_category('Free Templates') and in_category('Legacy Templates') ) {
			get_template_part('template-parts/reviews/modals/modal','hosting-free-legacy'); 
		}				
		// Free WordPress Themes
	 	elseif ( in_category('Free Templates')) {
			get_template_part('template-parts/reviews/modals/modal','hosting-free'); 
		}	
		// Free HTML Templates (not WordPress)
		elseif (in_category('Templates')) {
			get_template_part('template-parts/reviews/modals/modal','hosting-premium'); 
		}

		else {
			echo '';
		};
	
	?>

	<div class="review-launch <?php if ( in_category('Buy Templates') ) { echo 'buy-button'; }; ?>">

		<?php 

			// open link
			echo '<a href="';
			$seo_gallery_id = get_cat_ID('Inspiration');
			$siteurl 	 = get_post_meta($post->ID, "site_url", true);
			$buyurl 	 = get_post_meta($post->ID, "buy_url", true);

			if (post_is_in_descendant_category( $seo_gallery_id )) {
				echo $siteurl;
				echo '" target="_blank">';
			}
			elseif ($buyurl != null) {
				echo $buyurl;
				echo '">';
			}
			else {
			    echo 'javascript:void(0);" id="trigger">';
			};  

			// free download or category to buy
			$siteprice = get_post_meta($post->ID, "site_price", true);  

			if (in_category('Free Templates')) {
				echo 'Download Free';  
			}
			elseif (in_category('HTML Templates') || in_category('Muse Templates') || in_category('WordPress Themes') || in_category('Tumblr Themes') || in_category('PSD Templates') || in_category('Unbounce Templates') || in_category('Joomla Templates')  || in_category('Bundle Deals')) {
				echo 'Buy';  

				if (in_category('Bundle Deals')) {
					echo 'Bundle Deal';              
				}  
				elseif (in_category('HTML Templates')) {
					echo ' HTML Template';             
				}   
				elseif (in_category('Muse Templates')) {
					echo ' Muse Template';             
				}          
				elseif (in_category('WordPress Themes')) {
					echo ' WordPress Theme';             
				}   
				elseif (in_category('Tumblr Themes')) {
					echo ' Tumblr Theme';              
				}          
				elseif (in_category('PSD Templates')) {
					echo ' PSD Template';              
				}        
				elseif (in_category('Squarespace Templates')) {
					echo 'Get This Template';              
				}   
				elseif (in_category('Unbounce Templates')) {
					echo 'Unbounce Template';              
				}         
				elseif (in_category('Joomla Templates')) {
					echo 'Joomla Template';              
				};  
			}
			else {
				echo 'Launch Website';            
			};	                                                             

			$siteprice = get_post_meta($post->ID, "site_price", true); 

			if ($siteprice != null) {
				echo ' $'. $siteprice; 
			};

			// close link
			echo '</a>'; 
			
		?>

	</div>

	<?php 

		// If has Demo URL add Demo button

		$demourl = get_post_meta($post->ID, "demo_url", true);

		if ($demourl != null) {
			echo '<div class="review-launch review-demo"><a href="' . $demourl . '" target="_blank">Launch Demo</a></div>';		
		}
		else {
		    echo '';
		}; 

	?>

	<?php 

		// If has License URL add License button

		if ((in_category('License Templates')) OR (in_category('Pixelarity Templates'))) {
          
			$licenseurl = get_post_meta($post->ID, "license_url", true);

			if (($licenseurl != null) and (in_category('Pixelarity Templates'))) {
				echo '<div class="review-launch review-license"><a href="' . $licenseurl . '" target="_blank">Visit Pixelarity To Remove Credit</a></div>';		
			}
			elseif ($licenseurl != null) {
				echo '<div class="review-launch review-license"><a href="' . $licenseurl . '" target="_blank">Buy $5 License To Remove Credit</a></div>';		
			}
			else {
			    echo '';
			}; 

		};	

	?>	

	<ul>

		<li class="hosting"><strong>Need Hosting?</strong> We highly recommend <a href="https://onepagelove.com/go/bluehost">Bluehost</a></li>

		<?php 

			// If a WordPress theme promote Codeable
			if ( in_category('WordPress Themes') ) {
				echo '<li class="hosting"><strong>Setup Help?</strong> Use WordPress experts <a href="https://onepagelove.com/go/codeable">Codeable</a></li>';
			};

		?>	

		<?php 

			// If has extra info

			$buyinfo = get_post_meta($post->ID, "buy_info", true);

			if ( ( $buyinfo != null ) and ( in_category('Buy Templates')) ) {
				echo '<li><strong>Payment Methods:</strong> PayPal or Credit Card</li>';
				echo $buyinfo;		
			}
			elseif ( $buyinfo != null ) {
				echo $buyinfo;	
			};

		?>	

		<?php 

			// If has License, add note about CC3.0 License 

			$licenseurl = get_post_meta($post->ID, "license_url", true);

			if ($licenseurl != null) {
				echo '<li><strong>License:</strong> <a href="https://creativecommons.org/licenses/by/3.0/" title="Creative Commons 3.0 License">CCA 3.0</a> (<a href="' . $licenseurl . '">remove</a>)</li>';		
			}
			else {
			    echo '';
			}; 

		?>	

		<?php

			// If Template credit Template Author, if Inspiration say Built By

			$seo_template_id = get_cat_ID('Templates');
			$dev_name = get_post_meta($post->ID, "dev_name", true);
			$dev_url = get_post_meta($post->ID, "dev_url", true);

			if ( (post_is_in_descendant_category( $seo_template_id )) and ($dev_name != '')) {
				echo '<li><strong>Template Author:</strong> <a href="';
				echo $dev_url;
				echo '" target="_blank">';
				echo $dev_name;
				echo '</a></li>';
			}
			elseif ($dev_name != '') {
				echo '<li><strong>Built by:</strong> <a href="';
				echo $dev_url;
				echo '" target="_blank">';
				echo $dev_name;
				echo '</a></li>';
			};

		?>

		<?php      

			// If in Inspiration, add notice about it not being a template

			$seo_gallery_id = get_cat_ID('Inspiration');

			if (post_is_in_descendant_category( $seo_gallery_id )) {
				echo '<li><strong>Template?</strong> No, this is a custom built website</li>';             
			};  
		?>		

		<li><strong>Reviewed:</strong>  <?php echo get_the_date(); ?> by <a href="https://twitter.com/robhope">Rob Hope</a></li>

	</ul>

	<div class="review-slayer">

		<div class="review-slayer-holder">

			<div class="slayer">

				<?php 

					$ads  = array(
							'ads/templates.php', 
							'ads/feedback.php', 
							'ads/coffee.php', 
							'ads/concierge.php', 															
							'ads/tips.php', 											
							'ads/woo.php' // no comma on last one
						);

					$adfile = $ads[rand(0, count($ads) - 1)];

					include($adfile);

				?>

			</div>

		</div>

	</div>

</div>

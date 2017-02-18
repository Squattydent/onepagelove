<div class="review-meta-right-padding-hack">

	<!-- Template Download Modal -->  
	<div id="modal-content" data-download-url="<?php $downloadurl = get_post_meta($post->ID, "download_url", true); echo $downloadurl; ?>">

		<div class="modal-title">Your download is being prepared...</div>

		<div class="modal-suggestion">
			
			<div class="modal-suggestion-left">
				
				<a href="https://www.bluehost.com/track/onepagelove/modal" title="Host One Page websites for only $2.95/mo"><img src="<?php echo get_template_directory_uri(); ?>/img/hustle/modal-bluehost-retina-logo.png" alt="Exclusive Hosting Special" width="180" height="150" /></a>

			</div>

			<div class="modal-suggestion-right">
				
				<div class="modal-deal-pitch">Need Hosting for this <?php if (in_category('WordPress Themes')) { echo ' WordPress theme?'; } else { echo 'template?'; }; ?></div>

				<p><a href="https://www.bluehost.com/track/onepagelove/modal" title="Host One Page websites for only $2.95/mo">Bluehost</a> has an <a href="https://www.bluehost.com/track/onepagelove/modal" title="Host One Page websites for only $2.95/mo">exclusive deal</a> for One Page Love readers at only $2.95 per month!</p>

				<a href="https://www.bluehost.com/track/onepagelove/modal" title="Host One Page websites for only $2.95/mo" class="modal-deal-button button-fill">See Deal</a>

			</div>

		</div>

	</div>


	<div class="review-launch">

		<a href="<?php 

			$downloadurl = get_post_meta($post->ID, "download_url", true);
			$siteurl 	 = get_post_meta($post->ID, "site_url", 	true);

			if ($downloadurl != null) {
				echo 'javascript:void(0);" id="trigger';
			}
			else {
			    echo $siteurl;
			    echo '" target="_blank';
			}; 

			?>"><?php     

				$siteprice = get_post_meta($post->ID, "site_price", true);  
				if (in_category('Free Templates')) {
					echo 'Download ';  
				}
				elseif (in_category('HTML Templates') || in_category('Muse Templates') || in_category('WordPress Themes') || in_category('Tumblr Themes') || in_category('PSD Templates') || in_category('Unbounce Templates') || in_category('Joomla Templates')  || in_category('Bundle Deals')) {
					echo 'Buy';  
				}                    
				else {
					echo '';           
				};

			?><?php      

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
				}                                               
				else {
					echo 'Launch Website';            
				};

			?></a>

	</div>

	<?php 

		$demourl = get_post_meta($post->ID, "demo_url", true);

		if ($demourl != null) {
			echo '<div class="review-launch review-demo"><a href="' . $demourl . '" target="_blank">Launch Demo</a></div>';		
		}
		else {
		    echo '';
		}; 

	?>

	<ul>

		<li><strong>Need Hosting?</strong> We highly recommend <a href="https://www.bluehost.com/track/onepagelove/reviews">Bluehost</a></li>

		<li><strong>Reviewed:</strong>  <?php echo get_the_date(); ?></li>

		<li>

			<strong>Template?</strong> 

			<?php      

				if (in_category('HTML Templates')) {
					echo 'Yes, this is an HTML template';             
				}   
				elseif (in_category('Muse Templates')) {
					echo 'Yes, this is an Adobe Muse Template';              
				} 
				elseif (in_category('WordPress Themes')) {
					echo 'Yes, this is a WordPress theme';              
				}     
				elseif (in_category('Tumblr Themes')) {
					echo 'Yes, this is a Tumblr theme';              
				}       
				elseif (in_category('PSD Templates')) {
					echo 'Yes, this is a PSD template';              
				}         
				elseif (in_category('Squarespace Templates')) {
					echo 'Yes, this is a Squarespace template';              
				}   
				elseif (in_category('Unbounce Templates')) {
					echo 'Yes, this is an Unbounce Template';              
				}   
				elseif (in_category('Joomla Templates')) {
					echo 'Yes, this is an Joomla Template';              
				}  
				elseif (in_category('Bundle Deals')) {
					echo 'Yes, this is a Bundle Deal';              
				}                  
				else {
					echo 'No, this is a custom built website';           
				};

			?>

		</li>

		<li>

			<?php    

				$siteprice = get_post_meta($post->ID, "site_price", true);  
				if (in_category('Free Templates')) {
					echo '<strong>Price:</strong> ';   
					echo 'Free';  
				}
				elseif (in_category('HTML Templates')) {
					echo '<strong>Price:</strong> $';  
					echo $siteprice;             
				}   
				elseif (in_category('Muse Templates')) {
					echo '<strong>Price:</strong> $';   
					echo $siteprice;              
				}  
				elseif (in_category('WordPress Themes')) {
					echo '<strong>Price:</strong> $';   
					echo $siteprice;              
				}     
				elseif (in_category('Tumblr Themes')) {
					echo '<strong>Price:</strong> $';   
					echo $siteprice;               
				}       
				elseif (in_category('PSD Templates')) {
					echo '<strong>Price:</strong> $';   
					echo $siteprice;    
				} 
				elseif (in_category('Squarespace Templates')) {
					echo '<strong>Price:</strong> Free 14-day trial, then $';   
					echo $siteprice;    
					echo ' per month.';                          
				}     
				elseif (in_category('Unbounce Templates')) {
					echo '<strong>Price:</strong> $';   
					echo $siteprice;    
				}     
				elseif (in_category('Joomla Templates')) {
					echo '<strong>Price:</strong> $';   
					echo $siteprice;    
				}       
				elseif (in_category('Bundle Deals')) {
					echo '<strong>Price:</strong> $';   
					echo $siteprice;    
				}     
				else {
					echo '';           
				};

			?>

		</li>

		<li>

			<?php

				$dev_name = get_post_meta($post->ID, "dev_name", true);
				$dev_url = get_post_meta($post->ID, "dev_url", true);

				if ($dev_name != '') {
					echo '<strong>Built by:</strong> <a href="';
					echo $dev_url;
					echo '" target="_blank">';
					echo $dev_name;
					echo '</a>';
				}
				else {
					echo '';
				};

			?>

		</li>

	</ul>

	<?php include ("review-meta-slayer.php"); ?>

</div>

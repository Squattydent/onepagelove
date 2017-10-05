<?php
/**
 * @package onepagelove
 * @version 6.11.35
 *
*/ 
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
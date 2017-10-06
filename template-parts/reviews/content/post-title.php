<?php
/**
 * @package onepagelove
 * @version 6.11.37
 *
*/ 
?>
<div class="review-title">

	<h1>

		<?php the_title(); ?>

		<?php  			
			if (in_category('HTML Templates')) {
	      		echo 'One Page HTML Template';							
			}		
			elseif (in_category('Muse Templates')) {
	      		echo 'One Page Adobe Muse Template';							
			}	
			elseif (in_category('FullSingle Layouts')) {
	      		echo 'One Page WordPress Layout';							
			}										
			elseif (in_category('WordPress Themes')) {
	      		echo 'One Page WordPress Theme';							
			}		
			elseif (in_category('PSD Templates')) {
	      		echo 'One Page PSD Template';							
			}
	        elseif (in_category('Tumblr Themes')) {
	        	echo 'One Page Tumblr Theme';              
	        }                
	        elseif (in_category('Squarespace Templates')) {
	        	echo 'One Page Squarespace Template';              
	        }  	
	        elseif (in_category('Unbounce Templates')) {
	        	echo 'One Page Unbounce Template';              
	        } 							        		
	        elseif (in_category('Joomla Templates')) {
	        	echo 'One Page Joomla Template';              
	        }  
			elseif (in_category('Bundle Deals')) {
	        	echo 'Bundle Deal';              
	        } 		        							        																					
			else {
	      		echo '';						
			};
		?>
		
	</h1>

</div> 
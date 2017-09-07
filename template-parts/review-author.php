<?php
/**
 * @package onepagelove
 * @version 6.10.22
 *
*/ 
?>

<div class="review-note">

	<div class="note-image">
	    
	    <a href="https://twitter.com/robhope"><img src="<?php echo get_template_directory_uri(); ?>/img/rob-hope-one-page-love.jpg" alt="Rob Hope"/></a>

	</div>

	<div class="note-info">

	    <p class="note-name">This 

			<?php       

			if (in_category('HTML Templates')) {
				echo 'One Page HTML Template';             
			}   
			elseif (in_category('Muse Templates')) {
				echo 'One Page Muse Template';             
			}          
			elseif (in_category('WordPress Themes')) {
				echo 'One Page WordPress Theme';             
			}   
			elseif (in_category('Tumblr Themes')) {
				echo 'One Page Tumblr Theme';              
			}          
			elseif (in_category('PSD Templates')) {
				echo 'One Page PSD Template';              
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
			elseif (in_category('Unbounce Templates')) {
				echo 'Bundle Deal';              
			}                                    
			else {
				echo 'original One Page website ';            
			};

			?>

	    was reviewed by Rob Hope</p>
	    
	    <p class="note-bio">I started One Page Love back in 2008 and want to keep adding more value. Please <a href="https://twitter.com/robhope">tweet</a> or <a href="mailto:rob@onepagelove.com">email me</a> with suggestions or any questions.</p>

	</div>

</div>
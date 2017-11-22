<?php
/**
 * @package onepagelove
 * @version 6.11.49
 *
*/ 
?>
<?php // Modals and SendOwl functionality

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
	// Free WordPress with direct download link "download beginning"
	elseif ( in_category('WordPress Themes') and in_category('Free Templates') ) {
		get_template_part('template-parts/reviews/modals/modal','hosting-free'); 
	}		
	// Free Templates (Non-WP) but old non-direct download link ie. links out "redirecting to download page"
 	elseif ( in_category('Free Templates') and in_category('Legacy Templates') ) {
		get_template_part('template-parts/reviews/modals/modal','hosting-free-legacy'); 
	}				
	// Free WordPress Themes
 	elseif ( in_category('Free Templates')) {
		get_template_part('template-parts/reviews/modals/modal','hosting-free'); 
	}	
	else {
		echo '';
	};

?>
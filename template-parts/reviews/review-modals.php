<?php
/**
 * @package onepagelove
 * @version 6.11.37
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
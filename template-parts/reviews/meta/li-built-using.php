<?php
/**
 * @package onepagelove
 * @version 6.11.51
 *
*/ 
?>
<?php

	$built = '<li><strong>Built Using:</strong> <a href="';

	if ( has_tag( 'WordPress') ) {
    	echo $built .get_home_url(). '/tag/wordpress-cms">WordPress</a></li>';
	} 
	elseif ( has_tag( 'Shopify') ) {
    	echo $built .get_home_url(). '/tag/shopify">Shopify</a></li>';
	}	
	elseif ( has_tag( 'Craft CMS') ) {
    	echo $built .get_home_url(). '/tag/craft-cms">Craft CMS</a></li>';
	}	
	elseif ( has_tag( 'Squarespace') ) {
    	echo $built .get_home_url(). '/tag/squarespace">Squarespace</a></li>';
	}		
	elseif ( has_tag( 'Kirby CMS') ) {
    	echo $built .get_home_url(). '/tag/kirby">Kirby CMS</a></li>';
	}	
	elseif ( has_tag( 'Drupal') ) {
    	echo $built .get_home_url(). '/tag/drupal">Drupal CMS</a></li>';
	}	
	elseif ( has_tag( 'Readymag') ) {
    	echo $built .get_home_url(). '/tag/readymag">Readmag</a></li>';
	}			
	else {
	    echo '';
	};

?>
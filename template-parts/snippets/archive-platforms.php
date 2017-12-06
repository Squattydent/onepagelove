<?php
/**
 * @package onepagelove
 * @version 6.11.60
 *
*/ 
?>
<?php

	$platformIn	 = '<span class="tag-action"><a href="';
	$platformOut = ' &#8594; </a></span>';

	if ( has_tag( 'WordPress') ) {
    	echo $platformIn . 'https://wordpress.org">Visit WordPress' 					. $platformOut;
	} 
	elseif ( has_tag( 'Shopify') ) {
    	echo $platformIn . 'https://onepagelove.com/go/shopify">Visit Shopify' 			. $platformOut;
	}	
	elseif ( has_tag( 'Craft CMS') ) {
    	echo $platformIn . 'https://craftcms.com/">Visit Craft CMS' 					. $platformOut;
	}	
	elseif ( has_tag( 'Squarespace') ) {
    	echo $platformIn . 'https://onepagelove.com/go/squarespace">Visit Squarespace' 	. $platformOut;
	}		
	elseif ( has_tag( 'Kirby CMS') ) {
    	echo $platformIn . 'https://getkirby.com">Visit Kirby CMS' 						. $platformOut;
	}	
	elseif ( has_tag( 'Drupal') ) {
    	echo $platformIn . 'https://www.drupal.org/">Visit Drupal' 						. $platformOut;
	}	
	elseif ( has_tag( 'Readymag') ) {
    	echo $platformIn . 'https://onepagelove.com/go/readymag">Visit Readmag' 		. $platformOut;
	}		
	elseif ( has_tag( 'Webflow') ) {
    	echo $platformIn . 'https://onepagelove.com/go/webflow">Visit Webflow' 			. $platformOut;
	}			
	else {
	    echo '';
	};

?>
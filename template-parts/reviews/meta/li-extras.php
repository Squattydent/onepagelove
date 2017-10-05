<?php
/**
 * @package onepagelove
 * @version 6.11.35
 *
*/ 
?>
<?php 

	$buyinfo = get_post_meta($post->ID, "buy_info", true);

	if ( ( $buyinfo != null ) ) {
		echo $buyinfo;		
	};

?>	
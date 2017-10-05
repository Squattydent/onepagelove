<?php
/**
 * @package onepagelove
 * @version 6.11.35
 *
*/ 
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
<?php
/**
 * @package onepagelove
 * @version 6.11.22
 *
*/ 
?>
<ul>
    <li><a href="<?php print get_home_url(); ?>/gallery" title="Browse Unique One Page Website Design">Browse All</a></li> 
    <li><a href="<?php print get_home_url(); ?>/gallery/most-loved">Top Awards🎖</a></li>
    <?php 
    	$nav_gallery_id = get_cat_ID('Inspiration');
	    $nav_gallery_variable = wp_list_categories('echo=0&title_li=&sort_column=name&exclude=8205,55&optioncount=0&hierarchical=0&child_of=' . $nav_gallery_id . ''); // exclude most loved + submissions category
	    $nav_gallery_variable = preg_replace( '/<a href=\"([^\"]+)\"/', '<a href="$1"', $nav_gallery_variable );
	    echo $nav_gallery_variable; 
    ?>                                      
</ul>   
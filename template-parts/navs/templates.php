<?php
/**
 * @package onepagelove
 * @version 6.10.14
 *
*/ 
?>
<ul>
    <li><a href="<?php print get_home_url(); ?>/templates" title="Browse One Page Website Templates">Browse All</a></li>
    <li><a href="<?php print get_home_url(); ?>/templates/free-templates">Free Templates 🎁</a></li> 
    <?php 
	    $nav_template_id  		= get_cat_ID('Templates');
	    $free_template_id 		= get_cat_ID('Free Templates');
	    $license_template_id 	= get_cat_ID('License Templates');
	    $nav_template_variable 	= wp_list_categories('echo=0&title_li=&sort_column=name&optioncount=0&exclude=' . $free_template_id . ',' . $license_template_id .'&hierarchical=0&child_of=' . $nav_template_id . '');
	    $nav_template_variable 	= preg_replace( '/<a href=\"([^\"]+)\"/', '<a href="$1"', $nav_template_variable );
	    echo $nav_template_variable; 
    ?>      
    <li><a href="<?php print get_home_url(); ?>/submit">Submit Template 📩</a></li>
</ul>  
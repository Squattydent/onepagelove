<ul>

    <li><a href="<?php print get_home_url(); ?>/gallery" title="Browse Unique One Page Website Design">Browse All</a></li> 
    <?php 
    $variable = wp_list_categories('echo=0&title_li=&sort_column=name&optioncount=0&hierarchical=0&child_of=5932'); 
    $variable = preg_replace( '/<a href=\"([^\"]+)\"/', '<a href="$1"', $variable );
    echo $variable; ?>      
    <li><a href="<?php print get_home_url(); ?>/submit" title="Submit One Page Websites">Submit</a></li>    
                                             
</ul>   
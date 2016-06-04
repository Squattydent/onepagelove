<ul>

    <li><a href="<?php print get_home_url(); ?>/templates" title="Browse One Page Website Templates">Browse All</a></li>
    <li><a href="<?php print get_home_url(); ?>/submit">Submit Template</a></li> 
    <?php 
    $variable = wp_list_categories('echo=0&title_li=&sort_column=name&optioncount=0&hierarchical=0&child_of=194'); 
    $variable = preg_replace( '/<a href=\"([^\"]+)\"/', '<a href="$1"', $variable );
    echo $variable; ?>      


</ul>  
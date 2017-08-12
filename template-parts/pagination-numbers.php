<?php
/**
 * @package onepagelove
 * @version 6.10.1
 *
*/ 
?>
<div class="browsing">

    <div class="browsing-nav">

        <div class="browsing-nav-left"><?php previous_posts_link('Previous') ?>&nbsp;</div>
        <div class="browsing-nav-mid"><div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div></div>
        <div class="browsing-nav-right"><?php next_posts_link('Next') ?>&nbsp;</div>
        <div class="clear"></div>
        
    </div>

</div>
<?php
/**
 * @package onepagelove
 * @version 6.11.6
 *
*/ 

#-------------------------------------------------------------------------------
# Add Bluehost Round Up Sponsor Shortcode [bluehost-sponsor]
#-------------------------------------------------------------------------------

function onepagelove_bh_shortcode() {

	return '<a href="https://onepagelove.com/go/bluehost"><img src="https://onepagelove.com/wp-content/uploads/2016/12/bluehost-retina-logo-large.png" alt="one-page-love-hosting-reviews-bh-unlimited" width="300" height="250" class="alignleft size-full" /></a><p>This "Most Loved" One Page website round-up is brought to you by hosting provider, <a href="https://onepagelove.com/go/bluehost">Bluehost</a>.</p> 

<p>Bluehost is the most affordable hosting option to host your One Page websites. They have an <strong><a href="https://onepagelove.com/go/bluehost">incredible $2.95/month deal exclusive to One Page Readers</a></strong> where you can host your website with 50GB diskspace and unlimited bandwidth. They also throw in a free domain!</p>

<p>If you want to get notified about the "Most Loved" awards each month, subscribe to our <a href="#footer-container" class="smoothScroll">Inspiration Newsletter</a>.</p>';

}

add_shortcode('bluehost-sponsor', 'onepagelove_bh_shortcode');

#-------------------------------------------------------------------------------
# Add FullSingle Promo on WordPress theme posts [fullsingle-wp]
#-------------------------------------------------------------------------------

function onepagelove_fullsingle_wp_shortcode() {

	$postTitle = get_the_title();

	return '' . $postTitle . ' is a layout in the free <a href="https://onepagelove.com/go/fullsingle">FullSingle WordPress plugin</a> (the new flagship product by One Page Love that I&#39;ll be announcing in the near future 🎉). All you need is WordPress on your own hosting (<a href="https://onepagelove.com/hosting">recommendations</a>) and this Layout will work with <em>any</em> existing WordPress theme. Watch the <a href="https://onepagelove.com/go/fullsingle-setup">FullSingle 60s setup video</a>.';

}

add_shortcode('fullsingle-wp', 'onepagelove_fullsingle_wp_shortcode');


#-------------------------------------------------------------------------------
# Add FullSingle Promo on HTML templates [fullsingle-html]
#-------------------------------------------------------------------------------

function onepagelove_fullsingle_html_shortcode() {

	$postTitle = get_the_title();
	return 'Want to use WordPress? ' . $postTitle . ' is a layout in the <a href="https://onepagelove.com/go/fullsingle">FullSingle WordPress Plugin</a>.';

}

add_shortcode('fullsingle-html', 'onepagelove_fullsingle_html_shortcode');
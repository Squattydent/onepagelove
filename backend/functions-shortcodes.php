<?php
/**
 * @package onepagelove
 * @version 6.11.39
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

	return ' <strong>Please note:</strong> '. $postTitle .' is a layout in the free <a href="https://onepagelove.com/go/fullsingle">FullSingle WordPress Plugin</a>. This plugin provides One Page layouts that work with any existing WordPress theme 🙌
	<br /><br />
	'. $postTitle .' Installation instructions:

	<ol>
		<li>Download the FullSingle WordPress plugin (pink button top-right)</li>
		<li>Upload and activate the WordPress plugin (in your plugin section)</li>		
		<li>Follow the next steps and activate the recommended plugins</li>		
		<li>Create a new Page (not Post) and give it a Page Title</li>	
		<li>Select the <code>Page Builder</code> tab top-right of your Page content edit area</li>
		<li>Click the <code>Layout</code> button, then select and insert the <code>'. $postTitle .'</code> layout</li>
		<li>In the <code>Page Attibutes</code> block (to the right), set the <code>Template</code> to <code>FullSingle - '. $postTitle .'</code></li>
		<li>Edit accordingly then click <code>Publish</code></li>
		<li>To make Home Page: <code>Settings</code> > <code>Reading</code> > <code>Front Page Displays</code> > <code>Front Page</code> > <code>Select Page</code> > <code>Save</code>
	</ol>
	';

}

add_shortcode('fullsingle-wp', 'onepagelove_fullsingle_wp_shortcode');


#-------------------------------------------------------------------------------
# Add FullSingle Promo on HTML templates [fullsingle-html]
#-------------------------------------------------------------------------------

function onepagelove_fullsingle_html_shortcode() {

	$postTitle = get_the_title();
	$postLink  = strtolower ( $postTitle );

	return '<strong>Want WordPress?</strong> ' . $postTitle . ' is now available as a <a href="https://onepagelove.com/fullsingle-' . $postLink . '">WordPress Layout</a> 🙏';

}

add_shortcode('fullsingle-html', 'onepagelove_fullsingle_html_shortcode');
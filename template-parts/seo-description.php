<?php
/**
 * @package onepagelove
 * @version 6.10.1
 *
*/ 

// Get the variables
include('seo-variables.php');

//---------------------------------------------------------------
// Home
//---------------------------------------------------------------

if (is_home()) {
	echo 'One Page Love is a One Page website design gallery showcasing the best Single Page websites, templates and resources.';
}

//---------------------------------------------------------------
// Archive - Tags
//---------------------------------------------------------------

elseif (function_exists('is_tag') && is_tag()) {

	if ($seo_category_desc != '') {

		echo $seo_category_desc;

	}

	else {

		echo 'A collection of ';
		echo $seo_count;
		echo ' ';
		echo ltrim($seo_title);
		echo $seo_plural;
		echo ' for your design inspiration. One Page Love is the leading resource of Single Page websites.';

	};
						
}

//---------------------------------------------------------------
// Archive - Gallery
//---------------------------------------------------------------

// Gallery - Root			
elseif (is_archive() && is_category('Gallery')) {
	echo 'A collection of ';
	echo $seo_count;
	echo ' beautiful One Page websites for your design inspiration';
}		

	// Gallery - Most Loved			
	elseif (is_archive() && is_category('Most Loved')) {
		echo 'A collection of ';
		echo $seo_count;
		echo ' Top Awarded One Page websites for your design inspiration. These are the cream of the crop.';
	}					

	// Gallery - remaining categories			
	elseif (is_archive() && cat_is_ancestor_of($seo_gallery_id, $cat)) {

		if ($seo_category_desc != '') {

			echo $seo_category_desc;

		}

		else {

			echo 'A collection of ';
			echo $seo_count;
			echo ' ';
			echo ltrim($seo_title);
			echo $seo_plural;
			echo ' for your design inspiration.';

		};

	}

//---------------------------------------------------------------
// Archive - Templates
//---------------------------------------------------------------

// Templates - Root			
elseif (is_archive() && is_category('Templates')) {
		echo 'A collection of ';
	echo $seo_count;
	echo ' One Page Templates. '; // One Page Website Templates?
	echo $seo_temp_blurb;		
}

	// Templates - HTML
	elseif (is_archive() && is_category('HTML Templates')) {
		echo 'A collection of ';
		echo $seo_count;
		echo ' One Page HTML Templates. '; // Beautiful?	
		echo $seo_temp_blurb;							
	}			

	// Template - PSDs
	elseif (is_archive() && is_category('PSD Templates')) {
		echo 'A collection of ';
		echo $seo_count;
		echo ' One Page PSD Templates. '; 
		echo $seo_temp_blurb;											
	}

	// Templates - Free
	elseif (is_archive() && is_category('Free Templates')) {	
		echo 'A collection of ';
		echo $seo_count;
		echo ' Free One Page Templates. Each template includes a review, long screenshot, live demo and free download links.'; 
	}	

	// Templates - WordPress 
	elseif (is_archive() && is_category('WordPress Themes')) {		
		echo 'A collection of ';
		echo $seo_count;
		echo ' One Page WordPress Themes. '; 	
		echo $seo_theme_blurb;										
	}						

	// Templates - Tumblr
	elseif (is_archive() && is_category('Tumblr Themes')) {
		echo 'A collection of ';
		echo $seo_count;
		echo ' One Page Tumblr Themes '; 
		echo $seo_theme_blurb;									
	}	

	// Templates - Squarespace
	elseif (is_archive() && is_category('Squarespace Templates')) {
		echo 'A collection of ';		
		echo $seo_count;
		echo ' One Page Squarespace Templates. '; 
		echo $seo_temp_blurb;				
	}		

	// Templates - Bootstrap Framework 
	elseif (is_archive() && is_category('Bootstrap Framework')) {
		echo 'A collection of ';
		echo $seo_count;
		echo ' One Page Templates using the Bootstrap Framework.'; 
		echo $seo_temp_blurb;		
	}		

	// Templates - Sub-Category			
	elseif (is_archive() && in_category('Templates')) {

		if ($seo_category_desc != '') {

			echo $seo_category_desc;

		}

		else {

			echo 'A collection of ';
			echo $seo_count;
			echo ' ';
			echo ltrim($seo_title);
			echo ' to get your business online quicker. ';
			echo $seo_temp_blurb;

		};
		
	}											

//---------------------------------------------------------------
// Archive - Blog
//---------------------------------------------------------------

// Blog	- Root	
elseif (is_archive() && is_category('Blog')) {
	echo 'An archive of ';
	echo $seo_count;	
	echo ' blog posts by One Page Love';		
}	

	// Blog - Journal			
	elseif (is_archive() && is_category('Journal')) {
		echo 'An archive of ';
		echo $seo_count;						
	  	echo '  One Page Love Journal posts';	
	}	

	// Blog - Articles			
	elseif (is_archive() && is_category('Articles')) {
		echo 'An archive of ';
		echo $seo_count;	  	
		echo ' Articles on Design & Development by One Page Love';		
	}	

	// Blog - Interviews			
	elseif (is_archive() && is_category('Interviews')) {
		echo 'An archive of ';
		echo $seo_count;							
	  	echo ' Interviews with leading Designers and Developers';		
	}	

	// Blog - Resources			
	elseif (is_archive() && is_category('Resources')) {
		echo 'An archive of ';
		echo $seo_count;  	
		echo ' useful Design & Development Resources';								
	}		

	// Blog - Hosting		
	elseif (is_archive() && is_category('Hosting')) {	
		echo 'One Page Website Hosting Reviews by One Page Love.';								
	}						

	// Blog - Round ups			
	elseif (is_archive() and is_category('Round Ups')) {
		echo 'An archive of ';
		echo $seo_count;
	  	echo ' awesome Design and Development Round Ups for Inspiration';								
	}											

//---------------------------------------------------------------
// Archive - Sponsored Posts
//---------------------------------------------------------------
		
elseif (is_archive() && is_category('Sponsored')) {
	echo $seo_count;
	echo ' Sponsored Posts on One Page Love';														
}

//---------------------------------------------------------------
// Pages
//---------------------------------------------------------------

elseif (is_page()) {
	echo $seo_excerpt;
}

//---------------------------------------------------------------
// Single Posts
//---------------------------------------------------------------

elseif (is_single() && ( post_is_in_descendant_category( $seo_gallery_id ) ) ||  post_is_in_descendant_category( $seo_templates_id ) ) {

	$seo_review_raw = get_post_meta($post->ID, "opl_review", true);

		if ($seo_review_raw != '') {

			$seo_review_strip = strip_tags($seo_review_raw);

			if (strlen($seo_review_strip) > 180) {

	   			$seo_review_trunc = substr($seo_review_strip, 0, 177) . '...'; 
				echo $seo_review_trunc;

			}

			else {

				echo $seo_review_strip;

			};

		}

		else {
			 
			echo 'Review of';
			echo $seo_title;
			echo ' - includes screenshots and highlighted features.';		
		};

}

// Blog posts
elseif (is_single()) {

	if (strlen($seo_excerpt) > 180) {
		$seo_excerpt_trimmed = substr($seo_excerpt, 0, 177) . '...';
		echo $seo_excerpt_trimmed;
	}
	else {
		echo $seo_excerpt;
	};
}

//---------------------------------------------------------------
// Else
//---------------------------------------------------------------

else {

	echo '';
	
};

?>
<?php 

// Get the variables
include('variables.php');

//---------------------------------------------------------------
// Home
//---------------------------------------------------------------

if (is_home()) {
	echo 'One Page Love';
}

//---------------------------------------------------------------
// Archive - Tags
//---------------------------------------------------------------

elseif (function_exists('is_tag') && is_tag()) {
	echo ltrim($seo_title);
	echo $seo_plural;						
}

//---------------------------------------------------------------
// Archive - Gallery
//---------------------------------------------------------------

// Gallery - Root			
elseif (is_archive() && is_category('Gallery')) {
	echo 'Beautiful'; // No need for 6k count before
	echo $seo_plural;	
}		

	// Gallery - Most Loved			
	elseif (is_archive() && is_category('Most Loved')) {
		echo 'The Top One Page Website Awards';
	}					

	// Gallery - Submissions		
	elseif (is_category('Submissions')) {
  	echo 'Community Submissions';		
	}	

	// Gallery - remaining categories			
	elseif (is_archive() && cat_is_ancestor_of($seo_gallery_id, $cat)) {
		echo ltrim($seo_title);
		echo $seo_plural;	
	}

//---------------------------------------------------------------
// Archive - Templates
//---------------------------------------------------------------

// Templates - Root			
elseif (is_archive() && is_category('Templates')) {
	echo 'One Page Templates'; // One Page Website Templates?
}

	// Templates - HTML
	elseif (is_archive() && is_category('HTML Templates')) {
		echo 'One Page HTML Templates'; // Beautiful?					
	}			

	// Template - PSDs
	elseif (is_archive() && is_category('PSD Templates')) {
		echo 'One Page PSD Templates'; 								
	}

	// Templates - Free
	elseif (is_archive() && is_category('Free Templates')) {	
		echo 'Free One Page Templates'; 								
	}	

	// Templates - WordPress 
	elseif (is_archive() && is_category('WordPress Themes')) {		
		echo 'One Page WordPress Themes'; 								
	}						

	// Templates - Tumblr
	elseif (is_archive() && is_category('Tumblr Themes')) {
		echo 'One Page Tumblr Themes'; 								
	}	

	// Templates - Squarespace
	elseif (is_archive() && is_category('Squarespace Templates')) {
		echo 'One Page Squarespace Templates'; 		
	}		

	// Templates - Bootstrap Framework 
	elseif (is_archive() && is_category('Bootstrap Framework')) {
		echo 'One Page Templates using the Bootstrap Framework'; 
	}		

	// Templates - Sub-Category			
	elseif (is_archive() && in_category('Templates')) {
		echo 'One Page ';
		echo ltrim($seo_title);				
	}											

//---------------------------------------------------------------
// Archive - Blog
//---------------------------------------------------------------

// Blog	- Root	
elseif (is_archive() && is_category('Blog')) {
	echo 'Blogs, articles and interviews by One Page Love';		
}	

	// Blog - Journal			
	elseif (is_archive() && is_category('Journal')) {					
  	echo 'One Page Love Journal posts';	
	}	

	// Blog - Articles			
	elseif (is_archive() && is_category('Articles')) {
		echo 'Articles on Design & Development by One Page Love';		
	}	

	// Blog - Interviews			
	elseif (is_archive() && is_category('Interviews')) {
	  	echo 'Interviews with leading Designers and Developers';		
	}	

	// Blog - Resources			
	elseif (is_archive() && is_category('Resources')) {	
		echo 'Design & Development Resources';								
	}		

	// Blog - Hosting		
	elseif (is_archive() && is_category('Hosting')) {
		echo 'One Page Website Hosting Reviews';								
	}						

	// Blog - Round ups			
	elseif (is_archive() and is_category('Round Ups')) {
  	echo 'Design and Development Round Ups for Inspiration';								
	}											

//---------------------------------------------------------------
// Archive - Sponsored Posts
//---------------------------------------------------------------
		
elseif (is_archive() && is_category('Sponsored')) {
	echo 'Sponsored Posts on One Page Love';														
}

//---------------------------------------------------------------
// Pages
//---------------------------------------------------------------

elseif (is_page()) {
	echo ltrim($seo_title);
	echo ' - One Page Love';	
}

//---------------------------------------------------------------
// Single Posts
//---------------------------------------------------------------

elseif (is_single() && in_category('Most Loved')) {
	echo $seo_title;
	echo ' - Most Loved Website Award';
}

elseif (is_single() && ( post_is_in_descendant_category( $seo_gallery_id ) )) {
	echo ltrim($seo_title);
	echo ' - One Page Website Award';
}

elseif (is_single() && in_category('Free Templates') && in_category('WordPress Themes')) {
	echo $seo_title;
	echo ' - Free One Page WordPress Theme Download and Review';
}

elseif (is_single() && in_category('Free Templates')) {
	echo $seo_title;
	echo ' - Free One Page Template Download and Review';
}

elseif (is_single() && in_category('WordPress Themes')) {
	echo $seo_title;
	echo ' - One Page WordPress Theme Review'; // incl demo, screenshots in description part
}

elseif (is_single() && in_category('Templates')) {
	echo $seo_title;
	echo ' - One Page Template Review';
}

elseif (is_single() && in_category('Interviews')) {
	echo 'Interview:';
	echo $seo_title;
}

// Blog posts
elseif (is_single()) {
	echo ltrim($seo_title);
}

//---------------------------------------------------------------
// Else
//---------------------------------------------------------------

else {
	echo ltrim($seo_title);
}

//---------------------------------------------------------------
// If deep in archives
//---------------------------------------------------------------

if ($paged > 1) {
	echo ' - Page ' .$paged. ' of ' .$wp_query->max_num_pages. '';
}
else {
	echo '';
};?>
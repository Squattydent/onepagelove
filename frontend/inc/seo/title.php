<?php 

//---------------------------------------------------------------
// Variables
//---------------------------------------------------------------

// Total results count
$seo_count = ($wp_query->found_posts);

// ID of Gallery category
$seo_gallery_id = get_cat_ID('Gallery');

// If more than one result, use plural
if ($seo_count > 1) {
	$seo_plural = ' One Page Websites';
}
else {
	$seo_plural = ' One Page Website';
};

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
	echo $seo_count;
	wp_title('',true,'');
	echo $seo_plural;						
}

//---------------------------------------------------------------
// Archive - Gallery
//---------------------------------------------------------------

// Gallery - Root			
elseif (is_archive() && is_category('Gallery')) {
	echo $seo_count;
	echo ' Beautiful';
	echo $seo_plural;	
}		

	// Gallery - Most Loved			
	elseif (is_archive() && is_category('Most Loved')) {
		echo 'The Best';
		echo $seo_plural;	
		echo ' - ';
		echo $seo_count;	
		echo ' "Most Loved" Awards';
	}					

	// Gallery - remaining categories			
	elseif (is_archive() && cat_is_ancestor_of($seo_gallery_id, $cat)) {
		echo $seo_count;
		wp_title('',true,'');
		echo $seo_plural;	
	}

//---------------------------------------------------------------
// Archive - Templates
//---------------------------------------------------------------

// Tempaltes - Root			
elseif (is_archive() && is_category('Templates')) {
	echo $seo_count;
	echo ' One Page Templates'; // One Page Website Templates?
}

	// Templates - HTML
	elseif (is_archive() && is_category('HTML Templates')) {
		echo $seo_count;
		echo ' One Page HTML Templates'; // Beautiful?					
	}			

	// Template - PSDs
	elseif (is_archive() && is_category('PSD Templates')) {
		echo $seo_count;
		echo ' One Page PSD Templates'; 								
	}

	// Templates - Free
	elseif (is_archive() && is_category('Free Templates')) {	
		echo $seo_count;
		echo ' Free One Page Templates'; 								
	}	

	// Templates - WordPress 
	elseif (is_archive() && is_category('WordPress Themes')) {		
		echo $seo_count;
		echo ' One Page WordPress Themes'; 								
	}						

	// Templates - Tumblr
	elseif (is_archive() && is_category('Tumblr Themes')) {
		echo $seo_count;
		echo ' One Page Tumblr Themes'; 								
	}	

	// Templates - Squarespace
	elseif (is_archive() && is_category('Squarespace Templates')) {
		echo $seo_count;
		echo ' One Page Squarespace Templates'; 		
	}		

	// Templates - Bootstrap Framework 
	elseif (is_archive() && is_category('Bootstrap Framework')) {
		echo $seo_count;
		echo ' One Page Templates using the Bootstrap Framework'; 
	}		

	// Templates - Sub-Category			
	elseif (is_archive() && in_category('Templates')) {
		echo $seo_count;	
		echo ' One Page';
	  	wp_title('',true,'');				
	}											

//---------------------------------------------------------------
// Archive - Blog
//---------------------------------------------------------------

// Blog	- Root	
elseif (is_archive() && is_category('Blog')) {
	echo $seo_count;	
	echo ' blog posts by One Page Love';		
}	

	// Blog - Journal			
	elseif (is_archive() && is_category('Journal')) {
	echo $seo_count;						
  	echo '  One Page Love Journal posts';	
	}	

	// Blog - Articles			
	elseif (is_archive() && is_category('Articles')) {
		echo $seo_count;	  	
		echo ' Articles on Design & Development by One Page Love';		
	}	

	// Blog - Interviews			
	elseif (is_archive() && is_category('Interviews')) {
		echo $seo_count;							
	  	echo ' Interviews with leading Designers and Developers';		
	}	

	// Blog - Resources			
	elseif (is_archive() && is_category('Resources')) {
		echo $seo_count;  	
		echo ' Design & Development Resources';								
	}		

	// Blog - Hosting		
	elseif (is_archive() && is_category('Hosting')) {
		echo $seo_count;  	
		echo ' One Page Hosting Reviews';								
	}						

	// Blog - Round ups			
	elseif (is_archive() and is_category('Round Ups')) {
	echo $seo_count;
  	echo ' Design and Development Round Ups for Inspiration';								
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
	wp_title('',true,'');
	echo ' - One Page Love';	
}

//---------------------------------------------------------------
// Single Posts
//---------------------------------------------------------------

elseif (is_single() && ( post_is_in_descendant_category( $seo_gallery_id ) )) {
	wp_title('',true,'');
	echo ' - One Page Website Award';
}

elseif (is_single() && in_category('WordPress Themes')) {
	wp_title('',true,'');
	echo ' - One Page WordPress Theme Review'; // incl demo, screenshots in description part
}

elseif (is_single() && in_category('Templates')) {
	wp_title('',true,'');
	echo ' - One Page Template Review';
}

// Blog posts
elseif (is_single()) {
	wp_title('',true,'');
}

//---------------------------------------------------------------
// Else
//---------------------------------------------------------------

else {
	wp_title('',true,'');
}

//---------------------------------------------------------------
// If deep in archives
//---------------------------------------------------------------

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 

if ($paged > 1) {
	echo ' - Page ' .$paged. ' of ' .$wp_query->max_num_pages. '';
}
else {
	echo '';
};?>
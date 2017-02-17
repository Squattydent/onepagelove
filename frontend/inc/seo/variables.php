<?php 

//---------------------------------------------------------------
// Variables used in all SEO php files and archive titles
//---------------------------------------------------------------

// Titles
$seo_title = wp_title("", false);

// Total results count
$seo_count = ($wp_query->found_posts);

// ID of Parent categories
$seo_gallery_id = get_cat_ID('Gallery');
$seo_templates_id = get_cat_ID('Templates');

// If more than one result, use plural
if ($seo_count > 1) {
	$seo_plural = ' One Page Websites';
}
else {
	$seo_plural = ' One Page Website';
};

// Strip tags in category description
$seo_category_desc_raw = category_description();
$seo_category_desc = strip_tags($seo_category_desc_raw);

// Strip tags in excerpt
$seo_excerpt_raw = get_the_excerpt();
$seo_excerpt = strip_tags($seo_excerpt_raw);

// Template generic blurb
$seo_temp_blurb = 'Each template includes a review, long screenshot, live demo and purchase links.';
$seo_theme_blurb = 'Each theme includes a review, long screenshot, live demo and purchase links.';

// If deep in archives
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 

?>
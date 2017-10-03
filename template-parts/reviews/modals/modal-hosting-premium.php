<?php
/**
 * @package onepagelove
 * @version 6.11.31
 *
*/ 
?>

<!-- Hosting Modal on Premium HTML or PSD Template -->  
<div id="modal-content" data-download-url="<?php 

											$downloadurl = get_post_meta($post->ID, "download_url", true); 
											$siteurl = get_post_meta($post->ID, "site_url", true); 

											if ($downloadurl != null) {
												echo $downloadurl; 
											}
											else {
												echo $siteurl; 
											};
											?>">

	<div class="modal-title">Directing you to the <?php the_title(); ?> purchase page in 5 seconds...</div>

	<div class="modal-suggestion">
		
		<div class="modal-suggestion-left">
			
			<a href="https://www.bluehost.com/track/onepagelove/modal" title="Host One Page websites for only $2.95/mo"><img src="<?php echo get_template_directory_uri(); ?>/img/hustle/modals/bluehost.png" alt="Exclusive Hosting Special" width="180" height="150" /></a>

		</div>

		<div class="modal-suggestion-right">
			
			<div class="modal-deal-pitch">Need Hosting for this <?php if (in_category('WordPress Themes')) { echo ' WordPress theme?'; } else { echo 'template?'; }; ?></div>

			<p><a href="https://www.bluehost.com/track/onepagelove/modal" title="Host One Page websites for only $2.95/mo">Bluehost</a> has an <a href="https://www.bluehost.com/track/onepagelove/modal" title="Host One Page websites for only $2.95/mo">Exclusive <?php echo date("F"); ?> Deal</a> for One Page Love readers at only $2.95 per month 🎉</p>

			<a href="https://www.bluehost.com/track/onepagelove/modal" title="Host One Page websites for only $2.95/mo" class="modal-deal-button button-fill">See Deal</a>

		</div>

	</div>

</div>

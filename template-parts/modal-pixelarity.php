<?php
/**
 * @package onepagelove
 * @version 6.10.15
 *
*/ 
?>

<!-- Pixelarity Upgrade Modal -->  
<div id="modal-content" data-download-url="<?php $downloadurl = get_post_meta($post->ID, "download_url", true); echo $downloadurl; ?>">

	<div class="modal-title">Your download is being prepared...</div>

	<div class="modal-suggestion">
		
		<div class="modal-suggestion-left">
			
			<a href="<?php $licenseurl = get_post_meta($post->ID, "license_url", true); echo $licenseurl; ?>" title="Buy a $5 Premium License">
				<img src="<?php $thumburl = get_post_meta($post->ID, "screenshot_sm", true); echo $thumburl; ?>" alt="<?php get_the_title(); ?> Screenshot" width="180" height="95" />
			</a>

		</div>

		<div class="modal-suggestion-right">
			
			<div class="modal-deal-pitch">Want to remove credit or get support?</div>

			<p><?php the_title(); ?> has a <a href="https://creativecommons.org/licenses/by/3.0/" title="Creative Commons 3.0 License">CC3.0 License</a> meaning you have to keep the footer credit to HTML5UP. When you join <a href="<?php $licenseurl = get_post_meta($post->ID, "license_url", true); echo $licenseurl; ?>" title="Visit Pixelarity">Pixelarity</a> (the Premium Tier of HTML5UP) you can legally remove the credit, get support and access another 96 beautiful HTML templates.</p>

			<a href="<?php $licenseurl = get_post_meta($post->ID, "license_url", true); echo $licenseurl; ?>" title="Visit Pixelarity" class="modal-license-button button-fill">Visit Pixelarity</a>

		</div>

	</div>

</div>

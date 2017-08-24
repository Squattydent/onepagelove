<?php
/**
 * @package onepagelove
 * @version 6.10.14
 *
*/ 
?>

<!-- Include Sendowl magic needed for PayPal payments -->
<script type="text/javascript" src="https://transactions.sendowl.com/assets/sendowl.js" ></script>

<!-- License Upgrade Modal -->  
<div id="modal-content" data-download-url="<?php $downloadurl = get_post_meta($post->ID, "download_url", true); echo $downloadurl; ?>">

	<div class="modal-title">Your download is being prepared...</div>

	<div class="modal-suggestion">
		
		<div class="modal-suggestion-left">
			
			<a href="<?php $licenseurl = get_post_meta($post->ID, "license_url", true); echo $licenseurl; ?>" title="Buy a $5 Premium License">
				<img src="<?php $thumburl = get_post_meta($post->ID, "screenshot_sm", true); echo $thumburl; ?>" alt="<?php get_the_title(); ?> Screenshot" width="180" height="95" />
			</a>

		</div>

		<div class="modal-suggestion-right">
			
			<div class="modal-deal-pitch">Remove the footer credit for only $5</div>

			<p><?php the_title(); ?> has a <a href="https://creativecommons.org/licenses/by/3.0/" title="Creative Commons 3.0 License">CC3.0 License</a> meaning you have to keep the footer link back to One Page Love. Simply buy a Premium License to legally remove it... and help support One Page Love 🙏</p>

			<a href="<?php $licenseurl = get_post_meta($post->ID, "license_url", true); echo $licenseurl; ?>" title="Buy a $5 Premium License" class="modal-license-button button-fill">Buy $5 License</a>

		</div>

	</div>

</div>

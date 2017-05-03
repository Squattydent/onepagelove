<!-- Template Newsletter Modal -->  
<div id="modal-content" data-download-url="<?php $downloadurl = get_post_meta($post->ID, "download_url", true); echo $downloadurl; ?>">

	<div class="modal-title">Your free download is being prepared.....</div>

	<div class="modal-suggestion">
		
		<div class="modal-suggestion-left">
			
			<img src="<?php echo get_template_directory_uri(); ?>/img/hustle/modal-template-newsletter.jpg" alt="Free Template Newsletter" width="200" height="100" />

		</div>

		<div class="modal-suggestion-right">
			
			<div class="modal-deal-pitch">Get notified of new free templates 💌</div>

			<p>You only get emailed with direct download links to new free templates. Unsubscribe instantly.</p>

		</div>

	</div>

	<div class="modal-newsletter-bottom">
		
		<div class="newsletter-lower-wrapper">

			<div class="newsletter-form">
				
				<div class="email-octopus-form-wrapper">

					<p class="email-octopus-success-message"></p>
					<p class="email-octopus-error-message"></p>

					<form method="post" action="https://emailoctopus.com/lists/4a832efc-2e6f-11e7-b170-0244cade5e89/members/external-add" class="email-octopus-form">

						<div class="email-octopus-form-row fn" style="display: block;">
							<input type="text" name="firstName" class="email-octopus-first-name" placeholder="First Name">
						</div>

						<div class="email-octopus-form-row ea">
							<input type="email" name="emailAddress" class="email-octopus-email-address" placeholder="Email Address">
						</div>

						<div class="email-octopus-form-row-hp">
							<input type="text" name="hp4a832efc-2e6f-11e7-b170-0244cade5e89" autocomplete="off" value="">
						</div>

						<div class="email-octopus-form-row-subscribe">
						<input type="hidden" name="successRedirectUrl" class="email-octopus-success-redirect-url" value="https://onepagelove.com/cheers">
							<button type="submit">Subscribe</button>
						</div>

						<div class="clear"></div>

					</form>
				
				</div>

			</div>

		</div>

	</div>

</div>

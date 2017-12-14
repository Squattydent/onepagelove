<?php 
/* 
Template Name: Explainer Videos
*/ 
?>

<?php
/**
 * @package onepagelove
 * @version 6.11.67
 *
*/ 
get_header(); ?>

<?php get_template_part('template-parts/include','sendowl'); ?>
		
<div class="pages currl-bundle private-feedback" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/feedback/footer.jpg');">	


	<div class="section section-padding section-intro bundle-intro" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/explainer-videos/intro.jpg');">

		<div>

			<div class="section-tagline">A One Page Love &amp; MediaLuv Collaboration</div>
			<div class="section-title">Explainer Videos</div>
			<div class="section-description">A beautiful 45 second explainer video of your website, business, product or idea.</div>

			<div class="section-buttons">
				
				<div class="button"><a href="#" class="modal-hero">Video Example</a></div>
				<div class="button"><a href="#title-form" class="maverick smoothScroll">Get Free Quote</a></div>

			</div>

			<div class="button-paypal">100% Money Back Guarantee - <a href="#title-faq"  class="smoothScroll">Read FAQs</a></div>

		</div>
		
	</div>


	<div class="section section-padding section-faq" id="title-faq">

		<div class="section-gradient">
				
			<div class="section-tagline">A few more details</div>				
			<div class="section-title">FAQs</div>

			<div class="faqs">

				<div class="faqs-col faqs-left">

					<div class="faq">
						<div class="question">
							<h3>Why do I need a video for my website?</h3>
						</div>
						<div class="answer">
							<p>The statistics are overwhelming toward how consumers are shifting to video consumption online opposed to tradition text and images. (<a href="#title-stats"  class="smoothScroll">See Statistics</a>)</p>
						</div>
					</div>

					<div class="faq">
						<div class="question">
							<h3>How does the process work?</h3>
						</div>
						<div class="answer">
							<p>We begin with a brief online questionaie to assess the scope of the project. If we think we can deliver an excellent video, we continue with a quote. Once agreed upon, we start with script writing, then voiceover recording, storyboard, design, animation, 2 rounds of revisions, proofing and finally file hand off.</p>
						</div>
					</div>

					<div class="faq">
						<div class="question">
							<h3>How long does this process generally take?</h3>
						</div>
						<div class="answer">
							<p>From questionaire to final file hand off is approximately 3-4 weeks.</p>
						</div>
					</div>

				</div>

				<div class="faqs-col faqs-right">

					<div class="faq">
						<div class="question">
							<h3>Where can I integrate my video?</h3>
						</div>
						<div class="answer">
							<p>The website header background hero area, in the foreground as a standalone explainer video, within features, website section dividers and of course your social media channels.</p>
						</div>
					</div>

					<div class="faq">
						<div class="question">
							<h3>Who is MediaLuv?</h3>
						</div>
						<div class="answer">
							<p>MediaLuv is an established design and animation studio specialising in website videos. The Explainer Video collaboration with One Page Love launched in 2017 to help One Page Love readers add intro videos to their Landing Pages.</p>
						</div>
					</div>

					<div class="faq">
						<div class="question">
							<h3>I have a pre-sale question not answered here?</h3>
						</div>
						<div class="answer">
							<p>Please email <a href="mailto:support@onepagelove.com">support@onepagelove.com</a> and we'd be happy to answer your questions:)</p>
						</div>
					</div>

				</div>

				<div class="clear"></div>

			</div>

			<div class="section-buttons"  id="title-stats">
				
				<div class="button"><a href="#" class="modal-hero">Video Example</a></div>
				<div class="button"><a href="#title-form" class="maverick smoothScroll">Get Free Quote</a></div>

			</div>

			<div class="button-paypal">100% Money Back Guarantee - <a href="#title-faq"  class="smoothScroll">Read FAQs</a></div> 

			<div class="quote">
				
				<div class="quoted">"Over 50% of internet users looked for videos related to a product or service before visiting a store."</div>
				<div class="quoter">Think With Google <a href="https://www.thinkwithgoogle.com/data-gallery/detail/internet-users-product-service-videos/" class="source">(Source)</a></div>
					
			</div>

			<div class="quote">
				
				<div class="quoted">"By 2019, video consumption will represent 80% of global internet traffic, and 85% in the US."</div>
				<div class="quoter">Cisco <a href="https://www.cisco.com/c/en/us/solutions/collateral/service-provider/visual-networking-index-vni/complete-white-paper-c11-481360.html" class="source">(Source)</a></div>

			</div>

			<div class="quote">
				
				<div class="quoted">"Companies who use marketing videos grow revenue 49% faster year-on-year than those which don't."</div>
				<div class="quoter">Aberdeen Group <a href="http://awesome.vidyard.com/rs/273-EQL-130/images/Vidyard_Aberdeen_Impact_of_Video_Marketing.pdf" class="source">(Source)</a></div>
					
			</div>

			<div class="quote">
				
				<div class="quoted">"Online shoppers who watch demo videos are 1.8x more likely to purchase products and services than non-viewers."</div>
				<div class="quoter">DMB Adobe <a href="https://blogs.adobe.com/digitalmarketing/search-marketing/seo-for-success-in-video-marketing/" class="source">(Source)</a></div>
					
			</div>

		</div>

	</div>	

	<div class="section section-padding section-form" id="title-form">

		<div class="section-gradient">
				
			<div class="section-tagline">We need more information to quote</div>				
			<div class="section-title">Questionnaire</div>

			<div class="questionnaire">

				<?php echo do_shortcode('[gravityform id=10 title=false description=false]'); // local is 3, online is 10 ?>

			</div>

			<div class="quote">
				
				<div class="quoted">By emailing the questionnaire, you can answer in your own time with more detail. This allows us to quote more accurately.</div>
					
			</div>

		</div>

	</div>	

</div><!-- /.pages -->

<?php get_footer(); ?>
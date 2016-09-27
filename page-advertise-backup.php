<?php 
/* 
Template Name: Advertise
*/ 
?>

<!-- Include Gumroad magic needed for payment overlays -->
<script src="https://gumroad.com/js/gumroad.js"></script>

<?php get_header(); ?>
 
	<div class="pages sponsored-posts">

		<div class="section section-padding">

			<div class="section-gradient">

			    <div class="section-tagline">Advertise on One Page Love with</div>				
				<div class="section-title"><h1><?php the_title(); ?></h1></div>
				<div class="section-description">
					
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php the_content('Read more...'); ?>

					<?php endwhile; else: ?>

						<p>Nope, no pages matched your criteria.</p>

					<?php endif; ?>

				</div>

			</div>

			<div class="section-buttons">
				
				<div class="button"><a href="#title-features">Learn More</a></div>
				<div class="button"><a class="maverick" href="https://gumroad.com/l/opl-sponsored-post" target="_blank" data-gumroad-single-product="true">Book A Week $199</a></div>

			</div>

		</div>

		<img src="<?php echo get_template_directory_uri(); ?>/img/sponsored/intro.jpg" alt="One Page Love Sponsored Post" />
	           
		<div class="section section-padding section-features"  id="title-features">

			<div class="section-grey">
					
				<div class="section-tagline">A Sponsored Post include these</div>				
				<div class="section-title">Features</div>

				<div class="quote">
					
					<div class="quoted">"Ad blocking grew by 41% globally in the last 12 months. US ad blocking grew by 48% to reach 45 million active users in 12 months."</div>
					<div class="quoter">June 2015 - PageFair Ad Blocking Report</div>
						
				</div>

				<div class="features">
					
					<div class="feature">
						<div class="feature-image"><img src="<?php echo get_template_directory_uri(); ?>/img/sponsored/features/1.jpg" /></div>
						<div class="feature-copy"><h3>1 x Dedicated Blog Post</h3><p>The article will say you are this weeks sponsor, talking about brand and why our readers would benefit using your product or service. <a href="<?php print get_home_url(); ?>/sponsored">See Examples</a></p></div>
					</div>

					<div class="feature">
						<div class="feature-copy"><h3>1 x Facebook Post to 6k Fans</h3><p>A thank you including the Sponsored Post topic and tags your companies Facebook account username. <a href="https://www.facebook.com/OnePageLove/photos/a.450627268301735.104158.184345618263236/1056726457691810/" target="_blank">See Example</a></p></div>
						<div class="feature-image"><img src="<?php echo get_template_directory_uri(); ?>/img/sponsored/features/2.jpg" /></div>
					</div>

					<div class="feature">			
						<div class="feature-image"><img src="<?php echo get_template_directory_uri(); ?>/img/sponsored/features/3.jpg" /></div>
						<div class="feature-copy"><h3>1 x Tweet to 4k Followers</h3><p>A thank you Tweet including the Sponsored Post topic using your companies Twitter handle. <a href="https://twitter.com/OnePageLove/status/667346681239879680" target="_blank">See Example</a></p></div>
					</div>

					<div class="feature">			
						<div class="feature-copy"><h3>1 x Bonus Ad on Review Pages</h3><p>We create an ad we think our readers will engage with most. This ad links to the Sponsored Post and rotates for 30 days on website review pages.</p></div>
						<div class="feature-image"><img src="<?php echo get_template_directory_uri(); ?>/img/sponsored/features/4.jpg" /></div>

					</div>

					<div class="feature">			
						<div class="feature-image"><img src="<?php echo get_template_directory_uri(); ?>/img/sponsored/features/5.jpg" /></div>
						<div class="feature-copy"><h3>1 Week on our Home Page</h3><p>The Sponsored Post sits in our highest traffic area for one week. After that the Sponsored Post is still searchable in our archives forever!</p></div>
					</div>

					<div class="feature">		
						<div class="feature-copy"><h3>Exposure to 4k RSS Readers</h3><p>Your Sponsored Post will arrive in the feed of 4k RSS Readers. These stats are according to Feedly.com</p></div>
						<div class="feature-image"><img src="<?php echo get_template_directory_uri(); ?>/img/sponsored/features/6.jpg" /></div>
					</div>

				</div>

				<div class="section-buttons">

					<div class="button"><a href="#title-stats">See Statistics</a></div>
					<div class="button"><a href="#title-faq">Read FAQs</a></div>
					<div class="button"><a class="maverick" href="https://gumroad.com/l/opl-sponsored-post" target="_blank" data-gumroad-single-product="true">Book A Week $199</a></div>

				</div>

			</div>

		</div>

		<div class="section section-padding section-stats" id="title-stats">

			<div class="section-gradient">	

				<div class="section-tagline">One Page Love website</div>
				<div class="section-title">Statistics</div>

				<div class="section-description">The One Page Love website has a loyal readership of approximately 200k monthly readers. In May we had almost 300k visitors, generating 1.2 million page impressions.</div>		

				<div class="section-buttons">
					
					<div class="button"><a href="<?php echo get_template_directory_uri(); ?>/img/sponsored/onepagelove-analytics.pdf" target="_blank">Download PDF</a></div>
					<div class="button"><a href="#title-demographics">See Demographics</a></div>
					<div class="button"><a class="maverick" href="https://gumroad.com/l/opl-sponsored-post" target="_blank" data-gumroad-single-product="true">Book A Week $199</a></div>

				</div>

			</div>

		</div>	

		<img src="<?php echo get_template_directory_uri(); ?>/img/sponsored/stats.jpg" alt="One Page Love statistics" />

		<div class="section section-padding section-demographics" id="title-demographics">

			<div class="section-gradient">	

				<div class="section-tagline">One Page Love reader</div>
				<div class="section-title">Demographics</div>

				<div class="section-description">One Page Love is mainly frequented by English-speaking designers, developers, project managers and entrepreneurs that browse via a Desktop device.</div>		

				<div class="section-buttons">
					
					<div class="button"><a href="<?php echo get_template_directory_uri(); ?>/img/sponsored/onepagelove-demographics.pdf" target="_blank">Download PDF</a></div>
					<div class="button"><a href="https://gum.co/currl-elon" target="_blank" data-gumroad-single-product="true">Previous Campaigns</a></div>
					<div class="button"><a class="maverick" href="https://gumroad.com/l/opl-sponsored-post" target="_blank" data-gumroad-single-product="true">Book A Week $199</a></div>

				</div>

			</div>

		</div>			

		<img src="<?php echo get_template_directory_uri(); ?>/img/sponsored/demographics.jpg" alt="One Page Love statistics" />

		<div class="section section-padding section-features"  id="title-stats">

			<div class="section-grey">
					
				<div class="section-tagline">Previous Advertiser</div>				
				<div class="section-title">Campaigns</div>
					
				<div class="quote">
					
					<div class="quoted">"We've got 400 clicks so far and we're still getting a few clicks each day. And the best thing is that your readers spend about 3 minutes on our site, which means they're interested in our content. So, thank you for this opportunity!"</div>
					<div class="quoter">Helen, Template Monster - after 1 month</div>
						
				</div>

				<div class="features">
					
					<div class="feature">
						<div class="feature-image"><a href="https://onepagelove.com/optimizer-landing-page-builder"><img src="<?php echo get_template_directory_uri(); ?>/img/sponsored/features/7.jpg" /></a></div>
						<div class="feature-copy"><h3>Optimizer Landing Page Builder</h3>3783 Reads<br />1439 Clicks <a href="https://onepagelove.com/optimizer-landing-page-builder">See post</a></div>
					</div>

					<div class="feature">
						<div class="feature-copy"><h3>Zerif Lite Theme by ThemeIsle</h3></h3>4055 Reads<br />1149 Clicks <a href="https://onepagelove.com/zerif-lite-by-themeisle">See post</a></div>
						<div class="feature-image"><a href="https://onepagelove.com/zerif-lite-by-themeisle"><img src="<?php echo get_template_directory_uri(); ?>/img/sponsored/features/8.jpg" /></a></div>
					</div>

					<div class="feature">			
						<div class="feature-image"><a href="https://onepagelove.com/how-to-build-a-landing-page-in-less-than-an-hour-with-wix"><img src="<?php echo get_template_directory_uri(); ?>/img/sponsored/features/9.jpg" /></a></div>
						<div class="feature-copy"><h3>Wix Website Builder</h3>2360 Reads<br />620 Clicks <a href="https://onepagelove.com/how-to-build-a-landing-page-in-less-than-an-hour-with-wix">See post</a></div>
					</div>

					<div class="feature">
						<div class="feature-copy"><h3>WooCommerce One Page Checkout</h3></h3>2238 Reads<br />490 Clicks <a href="https://onepagelove.com/woocommerce-one-page-checkout">See post</a></div>
						<div class="feature-image"><a href="https://onepagelove.com/woocommerce-one-page-checkout"><img src="<?php echo get_template_directory_uri(); ?>/img/sponsored/features/10.jpg" /></a></div>
					</div>

					<div class="feature">			
						<div class="feature-image"><a href="https://onepagelove.com/why-we-host-with-wp-engine"><img src="<?php echo get_template_directory_uri(); ?>/img/sponsored/features/11.jpg" /></a></div>
						<div class="feature-copy"><h3>WP Engine Hosting</h3>3447 Reads<br />312 Clicks <a href="https://onepagelove.com/why-we-host-with-wp-engine">See post</a></div>
					</div>

				</div>

				<div class="section-buttons">

					<div class="button"><a href="#title-faq">Read FAQs</a></div>
					<div class="button"><a class="maverick" href="https://gumroad.com/l/opl-sponsored-post" target="_blank" data-gumroad-single-product="true">Book A Week $199</a></div>

				</div>

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
								<h3>How is payment handled?</h3>
							</div>
							<div class="answer">
								<p>Payment is handled with PayPal or Credit Card via <a href="https://twitter.com/gumroad" target="_blank">Gumroad</a>. When going through the check-out process, you select the week you want to be featured in the drop-down menu.</p>
							</div>
						</div>

						<div class="faq">
							<div class="question">
								<h3>Can we provide the Bonus Ad on review pages?</h3>
							</div>
							<div class="answer">
								<p>No. We have a lot of experience with ad media around our site and know what works with our readers. We also keep the ad within our style guidelines so the reader experience isn't compromised. By sending readers to the Sponsored Posts opposed directly to an external company actually increases conversion as the article is set in our familiar tone.</p>
							</div>
						</div>

						<div class="faq">
							<div class="question">
								<h3>Why does the Bonus Ad link to the Sponsored Post?</h3>
							</div>
							<div class="answer">
								<p>By sending readers to the Sponsored Posts instead of directly to an external company in actually increases conversion as the article is written in our familiar tone. The user is "educated" about the product, service or brand before leaving, so the traffic arriving is all good traffic.</p>
							</div>
						</div>

					</div>

					<div class="faqs-col faqs-right">

						<div class="faq">
							<div class="question">
								<h3>What happens after one week?</h3>
							</div>
							<div class="answer">
								<p>The Sponsored Post moves to the second page in our archives so there is still lots of traffic on the article. The content within the post is still searchable so you can still get traffic and conversions months down the line.</p>
							</div>
						</div>

						<div class="faq">
							<div class="question">
								<h3>Can anyone secure a Sponsored Post?</h3>
							</div>
							<div class="answer">
								<p>No. If we do not feel your brand is a suitable fit for our readers we will refund you the full amount. We really want to keep the quality high and care about our reader experience. Please do not try book if you are part of the gambling, casino or fiancing industry.</p>
							</div>
						</div>

						<div class="faq">
							<div class="question">
								<h3>Can I promote my Multi-Page WordPress theme?</h3>
							</div>
							<div class="answer">
								<p>We cannot promote a Template or Theme that does not include at least one "One Page" layout option. This means we will not promote a "Multiple Page" template to our readers. One Page Love only promotes "Single Page" content and we need to stay true to our niche. </p>
							</div>
						</div>

						<div class="faq">
							<div class="question">
								<h3>I have a question not answered here?</h3>
							</div>
							<div class="answer">
								<p>Please feel free to email us on <a href="mailto:advertising@onepagelove.com">advertising@onepagelove.com</a> and we'd be happy to answer your questions:)</p>
							</div>
						</div>

					</div>

					<div class="clear"></div>

				</div>

				<div class="section-buttons">
					
					<div class="button"><a href="#container-outer">Back To Top</a></div>	
					<div class="button"><a class="maverick" href="https://gumroad.com/l/opl-sponsored-post" target="_blank" data-gumroad-single-product="true">Book A Week $199</a></div>

				</div>

				<div class="quote">
					
					<div class="quoted">"Ad blocking estimated to cost publishers nearly $22 billion during 2015."</div>
					<div class="quoter">PageFair Ad Blocking Report</div>
						
				</div>

			</div>

		</div>
           
	</div><!-- /.pages -->

<?php get_footer(); ?>
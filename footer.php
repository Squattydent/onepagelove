		</div><!-- content end -->		
		
		<div class="clear"></div>

	</div><!-- container end -->

	<div id="footer-container">
		
		<div id="footer-quote-container">
			
			<div id="footer-quote">	

				<div class="quote"><?php include("frontend/inc/random-quotes.php"); ?></div>

			</div><!-- /#footer-quote -->		
			
		</div><!-- /#footer-quote-container -->

		<div id="footer-promo-container">
			
			<div id="footer-promo">	

				<div class="promo-info">

					<span class="promo-info-title"><a href="https://onepagelove.com/currl-bundle">The Personal Theme Bundle</a></span>

					<span class="promo-info-description"><a href="https://onepagelove.com/currl-bundle">3 minimal One Page WordPress themes to create a beautiful online presence.</a></span>

				</div>

				<div class="promo-image"><a href="https://onepagelove.com/currl-bundle"><img src="<?php echo get_template_directory_uri(); ?>/img/currl-bundle.jpg" alt="Personal Theme Bundle" /></a></div>

				<div class="promo-buttons"><a href="https://onepagelove.com/currl-bundle">View Demo</a>  <a href="https://onepagelove.com/currl-bundle">See Features</a></div>

			</div><!-- /#footer-promo -->		
			
		</div><!-- /#footer-top-container -->

		<div id="footer-bottom-container">

			<div id="footer-lists">

				<div class="footer-column col-one">	

					<h3>Browse</h3>
					<?php include('frontend/inc/nav-browse.php'); ?>

				</div><!-- .footer-column -->		

				<div class="footer-column col-two">

					<h3>Trending</h3>
					<?php include('frontend/inc/nav-popular.php'); ?>

				</div><!-- .footer-column -->

				<div class="footer-column col-three">

					<h3>Resources</h3>
					<?php include('frontend/inc/nav-resources.php'); ?>

				</div><!-- .footer-column -->	

				<div class="footer-column col-four">

					<h3>Connect</h3>
					<?php include('frontend/inc/nav-subscribe.php'); ?>

				</div><!-- .footer-column -->	

				<div class="clear"></div>

			</div><!-- #footer-lists -->

			<div id="footer-credits">

				<div class="copyright">
						
					&copy; 2008-<?php echo date("Y") ?> <a href="<?php print get_home_url(); ?>">One Page Love</a>. All Rights Reserved.

				</div>

				<div class="hitdelete">
					
					Made with <span class="heart">&#x2764;</span> in South Africa by <a href="http://hitdelete.com" target="_blank">Hit Delete</a>

				</div>
				
			</div>

		</div><!-- #footer-bottom-container -->  

	</div><!-- #footer-container -->  

</div><!-- /#container-outer -->  

<?php do_action('wp_footer'); ?>

</body>
</html>
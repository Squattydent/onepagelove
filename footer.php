		</div><!-- content end -->		
		
		<div class="clear"></div>

	</div><!-- container end -->

	<div id="footer-container">
		
		<div id="footer-quote-container">
			
			<div id="footer-quote">	

				<div class="footer-quote-single"><?php include("frontend/inc/random-quotes.php"); ?></div>

			</div><!-- /#footer-quote -->		
			
		</div><!-- /#footer-quote-container -->

		<div id="footer-bottom-container">

			<div id="footer-lists">

				<div class="footer-column">	

					<h3>Browse</h3>
					<?php include('frontend/inc/nav-browse.php'); ?>

				</div>	

				<div class="footer-column">	

					<h3>Information</h3>
					<?php include('frontend/inc/nav-info-footer.php'); ?>

				</div>	

				<div class="footer-column" id="trending">

					<h3>Trending</h3>
					<?php include('frontend/inc/nav-trending.php'); ?>

				</div>

				<div class="footer-column">

					<h3>Blog</h3>
					<?php include('frontend/inc/nav-blog.php'); ?>

				</div>

				<div class="footer-column">

					<h3>Connect</h3>
					<?php include('frontend/inc/nav-subscribe.php'); ?>

				</div>

				<div class="clear"></div>

			</div><!-- #footer-lists -->

		</div><!-- #footer-bottom-container -->  

	</div><!-- #footer-container -->  

</div><!-- /#container-outer -->  

<?php do_action('wp_footer'); ?>

</body>
</html>
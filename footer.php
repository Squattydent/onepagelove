		</div><!-- content end -->		
		
		<div class="clear"></div>

	</div><!-- container end -->
	
	<div id="footer-top-container">
		
	  <div id="footer-top">	
		
		<?php echo adManager::ad_zone( 6 ); ?>
	
      </div><!-- /#footer-top -->		
		
	</div><!-- /#footer-top-container -->

	<div id="footer-container">
	
	  <div id="footer">
		
	    <div class="footer-column col-one">	

		      <h3>Subscribe</h3>
			  <?php include('inc/nav-subscribe.php'); ?>

		</div><!-- .footer-column -->		
    
	    <div class="footer-column col-two">
      
	      <h3>Browse</h3>
	      <ul>
	        <li><a href="<?php print get_home_url(); ?>" title="Go to One Page Love home page">Home</a></li>
	        <li><a href="<?php print get_home_url(); ?>/gallery" title="Unique One Page Website Designs">Gallery</a></li>
	        <li><a href="<?php print get_home_url(); ?>/templates" title="One Page Website Templates">Templates</a></li> 
	        <li><a href="<?php print get_home_url(); ?>/resources" title="One Page website Resources for design and development inspiration">Resources</a></li>  		
	        <li><a href="<?php print get_home_url(); ?>/themes" title="Themes created by One Page Love">OPL Themes</a></li>
	      </ul>
      
	    </div><!-- .footer-column -->
	
	    <div class="footer-column col-three">
      
	      <h3>Information</h3>
	      <ul>
		    <li><a href="<?php print get_home_url(); ?>/about" title="More about One Page Love">About</a></li>	
		    <li><a href="<?php print get_home_url(); ?>/what-exactly-is-a-one-page-website">Why One Page?</a></li>	
	        <li><a href="<?php print get_home_url(); ?>/blog" title="The One Page Love Blog">OPL Blog</a></li>	
			<li><a href="http://www.producthunt.com/posts/onepagelove " target="_blank">Product Hunt</a></li> 
	        <li><a href="<?php print get_home_url(); ?>/advertise" title="Advertise on One Page Love">Advertise</a></li>            
	        <li><a href="<?php print get_home_url(); ?>/submit" title="Submit your website or template to One Page Love">Submit</a></li>  
	        <li><a href="<?php print get_home_url(); ?>/awards" title="Add a One Page Love award ribbon to your website">Award Ribbons</a></li>	
	        <li><a href="<?php print get_home_url(); ?>/roadmap" title="An overview of what has changed and what has launched on the One Page Love website">Roadmap</a></li>	
	      </ul>
      
	    </div><!-- .footer-column -->	
	
	    <div class="footer-column col-four">
      
	      <h3>Resources</h3>
		  <?php include('inc/nav-resources.php'); ?>
      
	    </div><!-- .footer-column -->	
	
	    <div class="footer-column col-five">
      
	      <h3>Trending</h3>
		  <?php include('inc/nav-popular.php'); ?>
      
	    </div><!-- .footer-column -->
	
	    <div class="footer-column col-six">
		
	      <h3>OPL Themes</h3>		
		  <?php include('inc/nav-themes.php'); ?>      
      
	    </div><!-- .footer-column -->	
    
	    <div class="clear"></div>
    
	  </div><!-- #footer -->
  
	</div><!-- #footer-container -->  

</div><!-- /#container-outer -->  

<?php do_action('wp_footer'); ?>

<!-- disqus  -->
<script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'oplblog'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function () {
            var s = document.createElement('script'); s.async = true;
            s.type = 'text/javascript';
            s.src = '//' + disqus_shortname + '.disqus.com/count.js';
            (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
        }());
</script>

</body>
</html>
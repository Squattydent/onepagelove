<ul>
						
	<li><a href="#">Browse</a>

		<ul>

			<li><a href="<?php print get_home_url(); ?>">Home</a>	
			<li><a href="<?php print get_home_url(); ?>/about">About OPL</a></li>  
			<li><a href="<?php print get_home_url(); ?>/gallery">Gallery</a></li>		
			<li><a href="<?php print get_home_url(); ?>/templates">Templates</a></li>	
			<li><a href="<?php print get_home_url(); ?>/resources">Resources</a></li>	
			<li><a href="<?php print get_home_url(); ?>/what-exactly-is-a-one-page-website">What is One Page?</a></li>  
			<li><a href="<?php print get_home_url(); ?>/submit">Submit</a></li>		
			<li><a href="<?php print get_home_url(); ?>/awards">Award Banners</a></li>        	
			<li><a href="<?php print get_home_url(); ?>/roadmap">Roadmap</a></li>			
			<li><a href="<?php print get_home_url(); ?>/blog">OPL Blog</a></li>		

		</ul>	

	</li> 

	<li><a href="<?php print get_home_url(); ?>/gallery">One Page Website Gallery</a>

		<ul>

			<li><a href="<?php print get_home_url(); ?>/gallery" title="Browse Unique One Page Website Design">Browse All</a></li> 
			<?php 
			$variable = wp_list_categories('echo=0&title_li=&sort_column=name&optioncount=0&hierarchical=0&child_of=5932'); // 1319 Local 752 Live
			$variable = preg_replace( '/<a href=\"([^\"]+)\"/', '<a href="$1"', $variable );
			echo $variable; ?>	

		</ul>            

	</li>

	<li><a href="#">One Page Website Templates</a>

		<ul>

			<li><a href="<?php print get_home_url(); ?>/templates" title="Browse One Page Website Templates">Browse All</a></li>
			<?php 
			$variable = wp_list_categories('echo=0&title_li=&sort_column=name&optioncount=0&hierarchical=0&child_of=194'); // 17 Local 194 Live
			$variable = preg_replace( '/<a href=\"([^\"]+)\"/', '<a href="$1"', $variable );
			echo $variable; ?>      

		</ul>                      

	</li> 

	<li><a href="#">Resources</a>

		<?php include('nav-resources.php'); ?>	

	</li>		

	<li><a href="#">Subscribe to One Page Love</a>

		<?php include('nav-subscribe.php'); ?>

	</li>														

</ul>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- SEO Yo! -->
	<title><?php include('frontend/inc/seo/title.php'); ?></title>
	<meta name="description" content="<?php include('frontend/inc/seo/description.php'); ?>" />
	<meta name="author" content="One Page Love" />
	<meta name="robots" content="<?php include('frontend/inc/seo/robots.php'); ?>" />
	<meta name="referrer" content="always" />

	<!-- Social -->
	<meta property="og:title" content="<?php include('frontend/inc/seo/title.php'); ?>" />
	<meta property="og:description" content="<?php include('frontend/inc/seo/description.php'); ?>" />
	<meta property="og:image" content="<?php include('frontend/inc/seo/image.php'); ?>">
	<meta property="og:url" content="<?php include('frontend/inc/seo/permalink.php'); ?>" />
	<meta name="twitter:title" content="<?php include('frontend/inc/seo/title.php'); ?>" >
	<meta name="twitter:description" content="<?php include('frontend/inc/seo/description.php'); ?>" />
	<meta name="twitter:image" content="<?php include('frontend/inc/seo/image.php'); ?>" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@onepagelove" />
	<meta name="twitter:creator" content="@robhope" />

	<!-- Typekit Fonts -->
	<script type="text/javascript" src="//use.typekit.net/spx0udh.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<!-- Pingbacks -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- Google Tracking Code -->
	<meta name="google-site-verification" content="nitxY7qwsSPA9sdMZB48BxmsU3lsE0Fl2pN5Q_A342s" />

	<!-- Favicons Bitches! -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicons/manifest.json">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicons/safari-pinned-tab.svg" color="#151515">
	<meta name="theme-color" content="#151515">

	<!-- WordPress Regulars  -->
	<?php indented_wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="container-outer">

	<div id="header-container">
			
		<div id="header">
			
			<div id="header-logo">

				<div class="header-logo-heart"><a href="<?php print get_home_url(); ?>" title="Go to the home page"></a></div>
				<div class="header-logo-name"><a href="<?php print get_home_url(); ?>" title="Go to the home page">One Page Love</a></div>	

			</div>
			
			<div id="header-navigation">
				
				<ul>
				
				    <li id="nav-info"><a href="#">Home</a>
						
						<?php include('frontend/inc/nav/home.php'); ?>	

				 	</li>	
	
					<li id="nav-insp" class="nav-wider"><a href="#">Inspiration</a>

    					<?php include('frontend/inc/nav/gallery.php'); ?>

		            </li>
		             					
		            <li id="nav-temp" class="nav-wide"><a href="#">Templates</a>

    					<?php include('frontend/inc/nav/templates.php'); ?>     

		            </li> 

		            <li id="nav-reso" class="nav-wide-single"><a href="#">Services</a>

    					<?php include('frontend/inc/nav/services.php'); ?>     

		            </li> 		            

		            <li id="nav-read"><a href="#">Read</a>

						<?php include('frontend/inc/nav/read.php'); ?>	

				 	</li>			
											   
		            <li id="nav-subs"><a href="#">Subscribe</a>

						<?php include('frontend/inc/nav/subscribe.php'); ?>

		            </li>

		            <li id="nav-free"><a href="#">Free</a>

    					<?php include('frontend/inc/nav/free.php'); ?>     

		            </li> 
		            
	           </ul>
				
		    </div>
			
			<div id="header-search">
				
				<form class="search" action="<?php print get_site_url(); ?>/" method="get">
                    <div class="search-icon"><svg enable-background="new 0 0 512 512" height="512px" version="1.1" class="svg-search-icon" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M497.913,497.913c-18.782,18.782-49.225,18.782-68.008,0l-84.862-84.863c-34.889,22.382-76.13,35.717-120.659,35.717  C100.469,448.767,0,348.312,0,224.383S100.469,0,224.384,0c123.931,0,224.384,100.452,224.384,224.383  c0,44.514-13.352,85.771-35.718,120.676l84.863,84.863C516.695,448.704,516.695,479.131,497.913,497.913z M224.384,64.109  c-88.511,0-160.274,71.747-160.274,160.273c0,88.526,71.764,160.274,160.274,160.274c88.525,0,160.273-71.748,160.273-160.274  C384.657,135.856,312.909,64.109,224.384,64.109z"/></svg></div>
                    <div class="search-field-holder"><input type="text" class="search-field" name="s" placeholder="Search" /></div>
				</form>
	
			</div>

			<div id="header-button">

				<a id="mobile-nav-button-link" href="javascript:toggleNav();"> 
					<svg class="svg-mobile-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="13px" viewBox="0 0 20 13" enable-background="new 0 0 20 13" xml:space="preserve">
				        <g>
				         	<path d="M1.5,3h17C19.328,3,20,2.329,20,1.5S19.328,0,18.5,0h-17C0.671,0,0,0.671,0,1.5S0.671,3,1.5,3z"/>
				         	<path d="M18.5,5h-17C0.671,5,0,5.671,0,6.5C0,7.328,0.671,8,1.5,8h17C19.328,8,20,7.328,20,6.5C20,5.671,19.328,5,18.5,5z"/>
				         	<path d="M18.5,10h-17C0.671,10,0,10.672,0,11.5S0.671,13,1.5,13h17c0.828,0,1.5-0.672,1.5-1.5S19.328,10,18.5,10z"/>
				        </g>
			        </svg>
				</a>

			</div>
			
			<div class="clear"></div>
			
		</div><!-- /#header -->

		<div id="mobile-navigation-toggle">

			<div class="mobile-navigation">

				<?php include('frontend/inc/nav/mobile.php'); ?>	

			</div>

		</div>

	</div><!-- /#header-container -->

	<div class="clear"></div>

	<div id="container">

    	<div id="content">
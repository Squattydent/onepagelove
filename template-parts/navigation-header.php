<?php
/**
 * @package onepagelove
 * @version 6.10.11
 *
*/ 
?>
<ul>

    <li id="nav-info"><a href="<?php print get_home_url(); ?>">Home</a>
		
        <?php include('navs/home.php'); ?>  	

 	</li>	

	<li id="nav-insp" class="nav-wider"><a href="<?php print get_home_url(); ?>/gallery">Inspiration</a>

        <?php include('navs/gallery.php'); ?>  

    </li>
     					
    <li id="nav-temp" class="nav-wide"><a href="<?php print get_home_url(); ?>/templates">Templates</a>

        <?php include('navs/templates.php'); ?>      

    </li> 

    <li id="nav-reso" class="nav-wide-single"><a href="#">Services</a>

        <?php include('navs/services.php'); ?>         

    </li> 		            

    <li id="nav-read"><a href="#">Read</a>

        <?php include('navs/read.php'); ?>   

 	</li>			
							   
    <li id="nav-subs"><a href="#">Subscribe</a>

        <?php include('navs/subscribe.php'); ?>   

    </li>

    <li id="nav-free" class="nav-wide-single"><a href="<?php print get_home_url(); ?>/hosting">Hosting</a>

        <?php include('navs/hosting.php'); ?>      

    </li> 
    
</ul>

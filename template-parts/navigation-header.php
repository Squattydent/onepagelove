<?php
/**
 * @package onepagelove
 * @version 6.11.22
 *
*/ 
?>
<ul>

	<li id="nav-insp" class="nav-wider"><a href="#">Inspiration</a>

        <?php include('navs/gallery.php'); ?>  

    </li>
     					
    <li id="nav-temp" class="nav-wide"><a href="#">Templates</a>

        <?php include('navs/templates.php'); ?>      

    </li> 

    <li id="nav-serv" class="nav-wide-single"><a href="#">Services</a>

        <?php include('navs/services.php'); ?>         

    </li> 		            

    <li id="nav-read"><a href="#">Read</a>

        <?php include('navs/read.php'); ?>   

 	</li>			

    <li id="nav-host" class="nav-wide-single"><a href="<?php print get_home_url(); ?>/hosting">Hosting</a>

        <?php include('navs/hosting.php'); ?>      

    </li> 

    <li id="nav-abou"><a href="<?php print get_home_url(); ?>/about">About</a></li>    

    <li id="nav-subm"><a href="<?php print get_home_url(); ?>/submit">Submit</a></li>    

    <li id="nav-subs"><a href="#">Subscribe</a>

        <?php include('navs/subscribe.php'); ?>   

    </li>

</ul>

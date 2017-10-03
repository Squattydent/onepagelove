<?php
/**
 * @package onepagelove
 * @version 6.11.30
 *
*/ 
?>
<ul>

    <li id="nav-home"><a href="<?php print get_home_url(); ?>" title="Go to the home page">Home</a></li>

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

    <li id="nav-about"><a href="#">Info</a>

        <?php include('navs/info.php'); ?>      

    </li>  

    <li id="nav-subm"><a href="<?php print get_home_url(); ?>/submit">Submit</a></li>    

    <li id="nav-subs"><a href="#">Subscribe</a>

        <?php include('navs/subscribe.php'); ?>   

    </li>

</ul>

<ul class="account-logged-in"><!-- start of account menu -->
	
    <li><a href="#"><span class="account-name">Hi, <?php global $current_user; get_currentuserinfo(); echo '' . $current_user->display_name . "\n"; ?></span><span class="account-gravatar"><?php global $current_user; get_currentuserinfo(); echo get_avatar( $current_user->ID, 24 ); ?></span></a><ul>
		  <li><a href="<?php print get_home_url(); ?>/dashboard">Dashboard</a></li>	
		  <li><a href="<?php print get_home_url(); ?>/favorites">My Favorites</a></li>	
		  <li><a href="<?php print get_home_url(); ?>/freebies">Freebies</a></li>													  					
		  <li><a href="<?php print get_home_url(); ?>/my-account">Edit Account</a></li>
          <li><a href="<?php echo wp_logout_url( home_url() ); ?>" title="Logout">Log Out</a></li>						
        </ul>

	</li> 
	
</ul><!-- end of account menu -->

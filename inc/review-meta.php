<div class="review-launch">
  <a href="<?php print get_post_meta($post->ID, 'site_url', true) ?>" target="_blank">

    <?php     
      $siteprice = get_post_meta($post->ID, "site_price", true);  
      if (in_category('Free Templates')) {
      echo 'Download ';  
      }
      elseif (in_category('HTML Templates')) {
      echo 'Buy';  
      }   
      elseif (in_category('Muse Templates')) {
      echo 'Buy';  
      }        
      elseif (in_category('WordPress Themes')) {
      echo 'Buy';  
      }     
      elseif (in_category('Tumblr Themes')) {
      echo 'Buy';              
      }       
      elseif (in_category('PSD Templates')) {
      echo 'Buy';                              
      }                
      else {
      echo '';           
      };
    ?>

    <?php       
        if (in_category('HTML Templates')) {
              echo ' HTML Template';             
        }   
        elseif (in_category('Muse Templates')) {
              echo ' Muse Template';             
        }          
        elseif (in_category('WordPress Themes')) {
              echo ' WordPress Theme';             
        }   
        elseif (in_category('Tumblr Themes')) {
              echo ' Tumblr Theme';              
        }          
        elseif (in_category('PSD Templates')) {
              echo ' PSD Template';              
        }        
        elseif (in_category('Squarespace Templates')) {
              echo 'Get This Template';              
        }                               
        else {
              echo 'Launch Website';            
        };
    ?>

  </a>
</div>

<div class="review-date"><strong>Date featured:</strong>  <?php echo get_the_date(); ?></div> 

<div class="review-unique"><strong>Template?</strong>  

<?php  			
if (in_category('HTML Templates')) {
echo 'Yes, this is an HTML template';							
}		
elseif (in_category('Muse Templates')) {
echo 'Yes, this is an Adobe Muse Template';              
} 
elseif (in_category('WordPress Themes')) {
echo 'Yes, this is a WordPress theme';							
}			
elseif (in_category('Tumblr Themes')) {
echo 'Yes, this is a Tumblr theme';              
} 			
elseif (in_category('PSD Templates')) {
echo 'Yes, this is a PSD template';              
}   			
elseif (in_category('Squarespace Templates')) {
echo 'Yes, this is a Squarespace template';              
} 								
else {
echo 'No, this is a unique design';						
};
?>

</div> 

<div class="review-price">  

<?php     
$siteprice = get_post_meta($post->ID, "site_price", true);  
if (in_category('Free Templates')) {
echo '<strong>Price:</strong> ';   
echo 'Free';  
}
elseif (in_category('HTML Templates')) {
echo '<strong>Price:</strong> $';  
echo $siteprice;             
}   
elseif (in_category('Muse Templates')) {
echo '<strong>Price:</strong> $';   
echo $siteprice;              
}  
elseif (in_category('WordPress Themes')) {
echo '<strong>Price:</strong> $';   
echo $siteprice;              
}     
elseif (in_category('Tumblr Themes')) {
echo '<strong>Price:</strong> $';   
echo $siteprice;               
}       
elseif (in_category('PSD Templates')) {
echo '<strong>Price:</strong> $';   
echo $siteprice;    
} 
elseif (in_category('Squarespace Templates')) {
echo '<strong>Price:</strong> Free 14-day trial, then $';   
echo $siteprice;    
echo ' per month.';                          
}                
else {
echo '';           
};
?>

</div> 

<div class="review-developer"><strong>Built by:</strong>  

	<?php
		        //Get post meta
  				$dev_name = get_post_meta($post->ID, "dev_name", true);
  				$dev_url = get_post_meta($post->ID, "dev_url", true);

  				//Echo when they have values
  				if ($dev_name != '') {
  				  echo '<a href="';
  					echo $dev_url;
  					echo '" target="_blank">';
  					echo $dev_name;
  					echo '</a>';
  				}
  				else {
  					echo 'Unknown';
  				}
			?>
</div> 

<div class="review-comments"><strong>Comments:</strong>  <a href="<?php the_permalink(); ?>#disqus_thread">Comments</a></div>  

<div class="review-screenshot-download"><strong>Big screenshot:</strong> <a href="<?php $value = get_post_meta($post->ID, "screenshot", true); echo $value;?>" target="_blank">Download</a></div>

 <div class="review-ad">

  <div class="review-ad-holder"><?php include ('ad-carbon.php'); ?></div>
	<div class="review-ad-holder"><?php echo adManager::ad_zone( 1 ); ?></div>

 </div><!-- /.review-ad -->
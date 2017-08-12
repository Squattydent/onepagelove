<?php
/**
 * @package onepagelove
 * @version 6.10.1
 *
*/ 
?>
<div class="thumb">

	<?php 

		$thumbs  = array(
				'thumbs/hosting.php', 											
				'thumbs/hosting.php' // no comma on last one
			);

		$thumb = $thumbs[rand(0, count($thumbs) - 1)];

		include($thumb);

	?>
          
</div>		
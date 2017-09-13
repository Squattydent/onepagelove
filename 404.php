<?php
/**
 * @package onepagelove
 * @version 6.11.9
 *
*/ 
get_header(); ?>

<div class="pages">

	<div class="section-intro section-padding">

		<div class="section-gradient">

		    <div class="section-tagline">404 Error</div>				
			<div class="section-title"><h1>Oh Rats!</h1></div>
			<div class="section-description">
				
				<p>You stumbled upon a Zero Page site 🤔</p>

			</div>

		</div>

	</div>

	<div class="section-content">

		<?php get_template_part('template-parts/snippets/no','search-results'); ?>

	</div>
      
</div><!-- /.pages  -->

<?php get_footer(); ?>

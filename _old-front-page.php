<?php
/**
 * Template Name: Landing Page
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header( 'landing' ); ?>


	<div id="primary" class="fullwidth-landing">
		<div id="content" role="main">
	        
	            
	            
		            <?php while ( have_posts() ) : the_post(); ?>
		            	<div id="gridContainer" class="landing-page-width">
			            	<div class="landing-page-header"><?php the_field('landing_page_header'); ?></div>
			            	<div class="landing-page-subheader"><?php the_field('landing_page_subheader'); ?></div>
			            	<a href="http://ourtownnashville.org/portraits" class="landing-page-button-top"></a>
		            		<img src="<?php the_field('phase_1_image'); ?>">
		            	<div class="landing-page-slideshow"><?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?></div>
		            	
					<div class="landing-copy"><?php the_field('landing_page_copy'); ?></div>
					<a href="http://ourtownnashville.org" class="landing-page-button-bottom"></a>
					</div>
					<?php endwhile; // end of the loop. ?>
							     
						<div class="clr"></div>
				
			
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
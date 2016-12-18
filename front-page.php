<?php
/**
 * Template Name: Landing Page Phase 2
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header( 'landing' ); ?>
<!--FRONT-PAGE.PHP-->

	<div id="primary" class="fullwidth-landing">
		<div id="content" role="main">
	        
		            <?php while ( have_posts() ) : the_post(); ?>
		            	<div id="gridContainer" class="phase-width">
			            	<div class="landing-page-header" style="text-transform:uppercase"><?php the_field('landing_page_header'); ?></div>
			            	<div class="landing-page-subheader" style="border-bottom:1px #223a54 solid; padding-bottom:20px;margin-top:30px; "><?php the_field('landing_page_subheader'); ?></div>
			            	<a href="<?php the_field('link_to_phase_1'); ?>" style="background-image:url('<?php the_field('phase_1_image'); ?>');" class="phase-1">
			            		<div class="phase-1-background">
			            			<div class="phase-text"><?php the_field('phase_1_title'); ?></div>
		            			</div>
		            		</a>
			            	<a href="<?php the_field('link_to_phase_2'); ?>" style="background-image:url('<?php the_field('phase_2_image'); ?>');" class="phase-2">
			            		<div class="phase-2-background">
			            			<div class="phase-text"><?php the_field('phase_2_title'); ?></div>
		            			</div>
		            		</a>
		            		<div style="clear:both;padding:20px;"></div>
		            		<div class="event-cta" style="background-color: #e03e26;display: block;width: 350px;margin: 0 auto;padding: 15px;margin-bottom: 30px;font-family: 'Contrail One', 'Open Sans', sans-serif; letter-spacing:.1rem !important; font-size:30px;color:#ffffff;text-transform:uppercase;"><?php the_field('next_event_cta'); ?></div>
		            		<div style="margin-bottom:50px;"><img src="<?php the_field('next_event_image'); ?>" width="100%"></div>
		            		
					</div>
					<?php endwhile; // end of the loop. ?>
							     
						
				
			
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
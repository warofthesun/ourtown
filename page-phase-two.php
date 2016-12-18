<?php
/**
 * Template Name: Phase 2 Events
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header( 'phasetwo' ); ?>
<!--PAGE-PHASE-TWO.PHP-->

	<div id="primary" class="fullwidth-landing">
		<div id="content" role="main" class="phase_two">
			<div id="gridContainer" class="landing-page-width" style="text-align:left;">
		        <?php query_posts( array( 'post_type' => 'phase_two_events', ) ); 
		        	if (have_posts()) : while (have_posts()) : the_post(); ?>

		        	<div class="event_count"><?php echo get_post_meta($post->ID,'incr_number',true); ?></div>
		            <div class="title"><?php the_title(); ?></div>
		            <div class="date"><?php the_field('event_date'); ?></div>
		            <div><?php the_field('event_slideshow'); ?></div>
		            <div class="phase_two_content"><?php the_content(); ?></div>

			     <?php
			     	endwhile; else : endif; 
			     	wp_reset_postdata(); 
			     ?>
		     </div>
			<div class="clr"></div>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
<?php
/**
 * Template Name: Full Width for Calendar
 *
 */

get_header('phasetwo'); ?>
	<div id="primary" class="fullwidth-content">
		<div id="calandarContainer" role="main">
        <div class="upcoming"></div>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
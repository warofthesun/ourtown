<?php
/**
 * Template Name: Full Width for Phase Two
 *
 */

get_header('phasetwo'); ?>
	<div id="primary" class="fullwidth-content">
		<div id="textContainer" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
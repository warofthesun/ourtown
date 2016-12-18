<?php
/**
 * Template Name: Candid Gallery
 *

 */

get_header( 'candid' ); ?>
	<div id="primary" class="fullwidth-content">
		<div id="textContainer" role="main">
        <div style="font-family: 'Contrail One', 'Open Sans', Helvetica, Arial, sans-serif;
	text-transform: uppercase;
	font-size: 24px;
	font-size: 1.714rem;
	text-align: center; text-decoration:none; ">
        <a href="<?php echo wp_get_referer(); ?>" style="text-decoration:none; color: #213a55;"><?php
$url = wp_get_referer();
$path_parts = pathinfo($url);
echo 'back to gallery ' ;
?></a></div>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
<div style="font-family: 'Contrail One', 'Open Sans', Helvetica, Arial, sans-serif;
	text-transform: uppercase;
	font-size: 24px;
	font-size: 1.714rem;
	text-align: center; text-decoration:none; ">
        <a href="<?php echo wp_get_referer(); ?>" style="text-decoration:none; color: #213a55;"><?php
$url = wp_get_referer();
$path_parts = pathinfo($url);
echo 'back to gallery ' ;
?></a></div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

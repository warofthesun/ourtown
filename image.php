<?php
/**
 * The Template for displaying image attachments.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
<?php $title = single_post_title(); ?>
				<?php echo $title ?>
                <?php single_post_title(); ?>
                <?php get_posts('post_type=attachment&orderby=rand&posts_per_page=1&post_mime_type=image&media_tags=travel'); ?>
<?php echo "<a href='" . get_permalink($post->post_parent). "'>Go back to ". get_the_title($post->post_parent) ."</a>"; ?>

<div class="navthumb"><?php echo previous_image_link(thumbnail); ?><?php echo next_image_link(thumbnail); ?></div>
<?php echo wp_get_attachment_image( $post->ID, 'large' ); ?>
<?php $media_items = get_attachments_by_media_tags("return_type=li&&numberposts=1&media_tags='.$title"); ?>
<?php 
    echo  $media_items

?>
 <!--?php get_attachments_by_media_tags('media_tags=tag') ?-->
<?php get_template_part( 'content', get_post_format() ); ?>
<?php /*
				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->
*/
?>
				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<!--?php get_sidebar(); ?-->
<?php get_footer(); ?>
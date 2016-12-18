<?php
/**
 * Template Name: Album Archive
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header(); ?>

	

			
	

<div id="primary" class="site-content">
<div id="content" role="main">

<?php while ( have_posts() ) : the_post(); ?>
				
<h1 class="entry-title"><?php the_title(); ?></h1>

<div class="entry-content">

<?php the_content(); ?>


<li class="album-grid"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('album-grid'); ?></a></li>

<?php if ( $post->post_type == 'albums' && $post->post_status == 'publish' ) {
		$attachments = get_posts( array(
			'post_type' => 'attachment',
			'posts_per_page' => -1,
			'post_parent' => $post->ID,
			'exclude'     => get_post_thumbnail_id()
		) );

		if ( $attachments ) {
			foreach ( $attachments as $attachment ) {
				$class = "post-attachment mime-" . sanitize_title( $attachment->post_mime_type );
				$title = wp_get_attachment_link( $attachment->ID, 'album-grid', true );
				echo '<li class="' . $class . ' album-grid">' . $title . '</li>';
			}
			
		}
	}
?>



</div><!-- .entry-content -->

<?php endwhile; // end of the loop. ?>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
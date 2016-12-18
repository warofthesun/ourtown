<?php
/**
 * Template Name: Related Page
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
            <!-- ?php query_posts( 'post_type=albums'); ? -->
            
			<div id="gridContainer">
<?php
query_posts(
    array(
        'post_type' => 'post',
        'posts_per_page' => 9
    )
);
$c = 1; //init counter
$bpr = 3; //boxes per row
if(have_posts()) :
	while(have_posts()) :
		the_post();
?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<!--h1 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1-->
				<div class="postImage">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('grid-post-image'); ?></a>
				</div>
                
				<!--div class="postExcerpt">
					<!--?php the_excerpt(); ?>
				</div-->
			</div>
<?php
if($c == $bpr) :
?>
<div class="clr"></div>
<?php
$c = 0;
endif;
?>
<?php
        $c++;
	endwhile;
endif;
?>
<div class="clr"></div>
</div>
<div><?php print do_shortcode('[mediatag name="'.single_post_title().'" size="thumbnail" number=1]'); ?></div>
<div>[mediatag name="<?php the_title(); ?>" size="thumbnail" number=1]</div>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
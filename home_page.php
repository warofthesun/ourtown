<?php
/**
 * Template Name: Home Page
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header( 'home' ); ?>

	<div id="primary" class="fullwidth-content">
		<div id="content" role="main">
        <div class="mobile_height">
            <div id="gridContainer">
     <?php  query_posts( array( 'post_type' => array( 'events' , 'comingsoon' ), )
     ); 

$c = 1; //init counter
$bpr = 5; //boxes per row
if(have_posts()) :
	while(have_posts()) :
		the_post();
?>
			<div class="post" id="post-<?php the_ID(); ?>">
            
            
				<!--h1 class="title"><a href="<!--?php the_permalink(); ?>" title="<!--?php the_title_attribute(); ?>"><!?php the_title(); ?></a></h1-->
				<div class="postImage imagebox">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('grid-post-image'); ?><div class="featuredcaption"><div class="featuredtitle"><?php the_title(); ?></div><?php the_excerpt(); ?></div></a>
				</div>
                
				
			</div>
<?php
if($c == $bpr) :
?>
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
</div>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
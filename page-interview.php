<?php
/**
 * Template Name: Interviews
 *
 */

get_header(); ?>
<!--interviews-->
	<div id="primary" class="fullwidth-content">
		<div id="gridContainer" role="main">

			<div id="inner-content" class="wrap clearfix interview-container">
			<div id="main" role="main">
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<section class="entry-content clearfix" itemprop="articleBody">
						<ul class="interviews">
							<?php query_posts( array( 'post_type' => 'interview', ) ); ?>
							<?php while ( have_posts() ) : the_post(); ?>
							<li>
							<div id="single-post-container">
							
								<?php the_post_thumbnail('medium'); ?>
								<?php the_content(); ?>
								<h4><?php the_title(); ?></h4>
							</div>
							</li>
							<?php endwhile; ?>
						</ul>
						</section> <?php // end article section ?>

						
						

				</article> <?php // end article ?>

			</div> <?php // end #main ?>

		</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
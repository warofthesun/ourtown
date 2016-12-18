<?php
/**
 * Single Interview
 *
 */

get_header(); ?>
	<div id="primary" class="fullwidth-content">
		<div id="gridContainer" role="main">

			<div id="inner-content" class="wrap clearfix faq-container">
			<div id="main" role="main">
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<section class="entry-content clearfix" itemprop="articleBody">

							<?php query_posts( array( 'post_type' => 'interview', ) ); ?>
							<?php while ( have_posts() ) : the_post(); ?>
						
							<div id="single-post-container">
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>
							</div>

							<?php endwhile; ?>

						</section> <?php // end article section ?>

						
						

				</article> <?php // end article ?>

			</div> <?php // end #main ?>

		</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
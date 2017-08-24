<?php
/**
 * The template for displaying the about page
 *
 *
 * @package WordPress
 * @subpackage Rock Star Child
 * @since Rock Star Child
 */


get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

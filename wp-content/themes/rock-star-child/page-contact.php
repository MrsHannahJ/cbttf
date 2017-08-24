<?php
/**
 * The template for displaying the contact page
 *
 *
 */

get_header(); ?>

	<div id="primary" class="site-content contact-page">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
            <section class="contact-details">
              <?php echo do_shortcode("[menu name=”social-media-menu”]"); ?>
              <h4>info@CBTTF.com</h4>
            </section>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

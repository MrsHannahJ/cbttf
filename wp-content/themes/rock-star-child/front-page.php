<?php
/**
 * The template for displaying the homepage
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Rock Star Child
 * @since Rock Star Child
 */

get_header(); ?>

		<div id="content" role="main" class="home-page">

<!--Featured Work Section-->
<section class="featured-work">
			<h2>Featured Work</h2>
			<ul>
				<?php query_posts('posts_per_page=3&post_type=albums'); ?>
				<?php
					while ( have_posts() ) : the_post();
					$image= get_field("album_cover");
					$size= array("400px", "300px");
                    $album_title = get_field('album_title');
                    $artist = get_field('artist_name');
				?>
				<li>
				  <a href="<?php the_permalink(); ?>">
				    <?php echo wp_get_attachment_image( $image, $size );?>
				  </a>
				  <a class="album-link" href="<?php the_permalink(); ?>">
				    <p class="artist-name">
				      <?php echo $artist ;?>
				    </p>
                    <p class="album-name">
                      <?php echo $album_title ;?>
                    </p></a>
				</li>
			 <?php endwhile; ?>
			 <?php wp_reset_query(); ?>
    </ul>
<a class="more-link" href="<?php echo home_url(); ?>/albums">View Our Work</a>
</section>
<!--Services Section-->
<section class="services">
    <h2>Services</h2>
    <ul>
      <?php query_posts('posts_per_page=3&post_type=services'); ?>
      <?php
          while ( have_posts() ) : the_post();
          $image = get_field('service_image');
          $service = get_field('service');
      ?>
        <li style="background: url(<?php the_field('service_image'); ?>) no-repeat bottom; background-size: cover;">
          <h3 class="service-type">
            <?php echo $service ;?>
          </h3>
        </li>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </ul>
    <div class="services-specialties">
      <?php the_content(); ?>
    </div>
    <a class="more-link" href="<?php echo home_url(); ?>/about">About CBTTF</a>
</section>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

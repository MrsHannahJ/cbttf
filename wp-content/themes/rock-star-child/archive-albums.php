<?php
/**
 * The template for displaying all albums
 *
 * @package WordPress
 * @subpackage Rock Star Child Theme
 * @since Rock Star Child Theme
 */

get_header(); ?>

<h1>Our Albums</h1>
<section>
  <ul class="all-albums">
  <?php query_posts('posts_per_page=3&post_type=albums'); ?>
  <?php while ( have_posts() ) : the_post();
    $image= get_field("album_artwork");
    $size= "medium_large";
    $album_title = get_field('album_title');
    $artist = get_field('artist_name');
    $release_date = get_field('release_date');
    $genre = get_field('genre');
    $album_length = get_field('album_length');
  ?>

    <li>
      <div>
        <a href="<?php the_permalink(); ?>">
          <?php echo wp_get_attachment_image( $image, $size );?>
        </a>
        <a class="album-link" href="<?php the_permalink(); ?>">
          <h3 class="artist-name">
            <?php echo $artist ;?>
          </h3>
          <h4 class="album-name">
            <?php echo $album_title ;?>
          </h4>
          <ul class="album-subdetails">
              <?php if($release_date) { ?>
              <li>
                <h5>
               <?php echo $release_date; ?>
            </h5>
              </li>
             <?php } ?>
             <?php if($genre) { ?>
              <li>
                <h5>
               <?php echo $genre ;?>
            </h5>
              </li>
             <?php } ?>
             <?php if($album_length) { ?>
              <li>
                <h5>
               <?php echo $album_length; ?>
            </h5>
              </li>
             <?php } ?>
          </ul>
        </a>
        </div>
      </li>
  <?php endwhile; ?>
  <?php wp_reset_query(); ?>
  </ul>
</section>


<?php get_footer(); ?>

<?php
/**
 * The template for displaying individual album pages.

 *
 * @package WordPress
 * @subpackage Rock Star Child
 * @since Rock Star Child
 */

get_header(); ?>


<?php
  while ( have_posts() ) : the_post();
  $album_cover = get_field('album_cover');
  $artist = get_field('artist_name');
  $album_title = get_field('album_title');
  $album_artwork = get_field('album_artwork');
  $release_date = get_field('release_date');
  $genre = get_field('genre');
  $album_length = get_field('album_length');
  $specs = get_field('specs');
  $specs2 = get_field('specs_2');
  $specs3 = get_field('specs_3');
  $specs4 = get_field('specs_4');
  $paypal = get_field('paypal');
  $amazon = get_field('amazon');
  $recording_notes = get_field('recording_notes');
  $description = get_field('album_description');
  $artist_pic = get_field('artist_image');
  $other_img_1 = get_field('additional_image_1');
  $other_img_2 = get_field('additional_image_2');
  $size_thumb = "thumbnail";
  $size_small = "medium";
  $size_large = "full";
  $size_wide = "Rock Star Landscape";
?>
<!--
  <div class="img-banner">
    <?php if($album_cover) { ?>
      <?php echo wp_get_attachment_image ($album_cover, $size_wide); ?>
    <?php } ?>
  </div>
-->

  <section class="album-details">
    <h2><?php echo $artist ;?>: <?php echo $album_title ;?></h2>
    <ul class="album-subdetails">
      <?php if($release_date) { ?>
        <li>
          <h5><?php echo $release_date; ?></h5>
        </li>
      <?php } ?>
      <?php if($genre) { ?>
        <li>
          <h5><?php echo $genre ;?></h5>
        </li>
      <?php } ?>
      <?php if($album_length) { ?>
        <li>
          <h5><?php echo $album_length; ?></h5>
        </li>
      <?php } ?>
    </ul>
<!--artwork-->
    <?php if($album_artwork) { ?>
      <?php echo wp_get_attachment_image ($album_artwork, $size_small); ?>
    <?php } ?>
<!--specs-->
    <ul class="specs-list">
      <?php if($specs) { ?>
        <li>
          <?php echo $specs; ?>
        </li>
      <?php } ?>
      <?php if($specs2) { ?>
        <li>
          <?php echo $specs2; ?>
        </li>
      <?php } ?>
      <?php if($specs3) { ?>
        <li>
         <?php echo $specs3; ?>
        </li>
      <?php } ?>
      <?php if($specs4) { ?>
        <li>
          <?php echo $specs4; ?>
        </li>
      <?php } ?>
    </ul>

<!--        buy now links-->
    <div class="purchase-btns">
      <?php if($paypal) { ?>
        <div class="paypal-link">
          <?php echo $paypal; ?>
        </div>
      <?php } ?>
<!--
      <?php if($amazon) { ?>
        <div class="amazon-link">
         <a href="<?php echo $amazon; ?>" target="blank">
           <img src="http://cbttf.com/wp-content/uploads/2017/08/amazon_buyNow-1.jpg" alt="buy on Amazon">
         </a>
        </div>
      <?php } ?>
-->
    </div>
  </section>
  <section class="album-details-2">
    <?php if($recording_notes) { ?>
      <?php echo $recording_notes; ?>
    <?php } ?>

    <div class="album-photos">
      <?php if($other_img_1) { ?>
        <?php echo wp_get_attachment_image ($other_img_1, $size_thumb); ?>
      <?php } ?>
      <?php if($other_img_2) { ?>
        <?php echo wp_get_attachment_image ($other_img_2, $size_thumb); ?>
      <?php } ?>
      <?php if($artist_pic) { ?>
        <?php echo wp_get_attachment_image ($artist_pic, $size_thumb); ?>
      <?php } ?>
    </div>
    <p><?php echo $description ;?></p>
    <p><?php the_content(); ?></p>
  </section>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>

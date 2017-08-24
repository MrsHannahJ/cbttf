<?php
/**
 * Rock Star Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Rock Star
 * @since Rock Star Child 1.0
 */




//Create Custom Post Types
function create_custom_post_types() {
  
  
//Create Case Study Post Type
    register_post_type( 'albums',
        array(
            'labels' => array(
                'name' => __( 'Albums' ),
                'singular_name' => __( 'Album' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'albums' ),
        )
    );

//Create Case Study Post Type
    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array( 'slug' => 'services' ),
        )
    );
  
}

add_action( 'init', 'create_custom_post_types' );

// Register widget area
function rock_star_child_widgets_init() {
//  Register Left Prefooter
	register_sidebar(
      array(
		'name'          => __( 'Pre-Footer Left', 'rock-star-child' ),
		'id'            => 'prefooter-left',
		'description'   => __( 'Add widgets here to appear on the left half of the page, above the footer.', 'rock_star_child' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
      )
    );
  //  Register Right Prefooter
  register_sidebar( array(
		'name'          => __( 'Pre-Footer Right', 'rock-star-child' ),
		'id'            => 'prefooter-right',
		'description'   => __( 'Add widgets here to appear on the right half of the page, above the footer.', 'rock-star-child' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  //  Register Center Prefooter
  register_sidebar( array(
		'name'          => __( 'Pre-Footer Centered', 'rock-star-child' ),
		'id'            => 'prefooter-center',
		'description'   => __( 'Add widgets here to appear in the center of the page, above the footer.', 'rock-star-child' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'rock_star_child_widgets_init' );


//Remove Parent Function for Footer
function child_remove_parent_function() {
    remove_action( 'rock_star_footer', 'rock_star_footer_content' );
}
add_action( 'wp_loaded', 'child_remove_parent_function' );


//Add New Function for Child Footer
function rock_star_child_footer_content() {
	//rock_star_flush_transients();
	if ( ( !$footer_content = get_transient( 'rock_star_child_footer_content' ) ) ) {
		$theme_data = wp_get_theme();
		$year       =  esc_attr( date_i18n( __( 'Y', 'rock-star' ) ) );
		$site_link  = '<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a>';

		$footer_content =  '
          <div id="site-generator" class="site-info" role="contentinfo">
            <div class="wrapper">
              <span>Copyright CBTTF Records &copy; 2017. All Rights Reserved.</span>
            </div><!-- .wrapper -->
          </div><!-- .site-info -->
        ';

	    set_transient( 'rock_star_child_footer_content', $footer_content, 86950 );
    }

    echo $footer_content;
}
add_action( 'rock_star_child_footer', 'rock_star_child_footer_content', 110 );


//Allows Menus to be Placed anywhere by using shortcode
function menu_function($atts, $content = null) {
  extract(
    shortcode_atts(
      array( 'name' => null, ),
      $atts
    )
  );
  return wp_nav_menu(
    array(
      'menu' => $name,
      'echo' => false
    )
  );
}
add_shortcode('menu', 'menu_function');
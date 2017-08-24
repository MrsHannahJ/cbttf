<?php
/**
 * The Footer Sidebar containing the footer widget areas.
 *
 * @package Catch Themes
 * @subpackage Rock Star
 * @since Rock Star 0.3
 */

/* The footer widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if (   ! is_active_sidebar( 'prefooter-left'  )
	&& ! is_active_sidebar( 'prefooter-right' )
	&& ! is_active_sidebar( 'prefooter-center'  )
) {
	return;
}

// If we get this far, we have widgets. Let do this.
?>
    <aside id="prefooter">
        <div class="wrapper">
            <div class="prefooter-widget-wrapper clearfix">
                <?php if ( is_active_sidebar( 'prefooter-left' ) ) : ?>
                <div id="prefooter-left">
                    <?php dynamic_sidebar( 'prefooter-left' ); ?>
                </div><!-- #prefooter-left .widget-area -->
                <?php endif; ?>
            
                <?php if ( is_active_sidebar( 'prefooter-right' ) ) : ?>
                <div id="prefooter-right">
                    <?php dynamic_sidebar( 'prefooter-right' ); ?>
                </div><!-- #prefooter-right .widget-area -->
                <?php endif; ?>
            
                <?php if ( is_active_sidebar( 'prefooter-center' ) ) : ?>
                <div id="prefooter-center">
                    <?php dynamic_sidebar( 'prefooter-center' ); ?>
                </div><!-- #prefooter-center .widget-area -->
                <?php endif; ?>
            </div><!-- .prefooter-widget-wrapper -->
        </div><!-- .wrapper -->
    </aside><!-- #prefooter -->
<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ashayen
 */
?>
  <div class="widget-area" role="complementary">
    <?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

      <aside id="widget-search" class="widget widget_search">
        <?php get_search_form(); ?>
      </aside>

      <aside id="widget-archives" class="widget">
        <h1 class="widget-title"><?php _e( 'Archives', 'ashayen' ); ?></h1>
        <ul>
          <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
        </ul>
      </aside>

      <aside id="widget-meta" class="widget">
        <h1 class="title"><?php _e( 'Meta', 'ashayen' ); ?></h1>
        <ul>
          <?php wp_register(); ?>
          <li><?php wp_loginout(); ?></li>
          <?php wp_meta(); ?>
        </ul>
      </aside>

    <?php endif; // end sidebar widget area ?>
  </div><!-- ./widget-area -->

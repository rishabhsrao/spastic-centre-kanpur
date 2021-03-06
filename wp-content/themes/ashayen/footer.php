<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package ashayen
 */
?>
      <footer class="page-footer">
        <div class="legal-info">
          <div class="footer-menu-wrap">
            <?php
              wp_nav_menu(array(
                "container_class" => "footer-menu",
                "container" => "nav",
                "theme_location" => "footer-menu"
              ));
            ?>
          </div>
          <p>&copy; <?php echo get_option('gcf-copyright-notice'); ?></p>
        </div>

        <div class="contact-info">
          <div class="social-media-wrap">
            <?php
              wp_nav_menu(array(
                "container_class" => "social-media-menu",
                "container" => "nav",
                "theme_location" => "social-media-menu",
                /* "items_wrap" => '<ul><li id="item-id">Follow us on: </li>%3$s</ul>' */
              ));
            ?>
          </div>
          <?php /* FIXME Instead of directly printing the values, check if the value exists and then print it. */ ?>
          <div class="address">
            <p>
              <span class="title"><?php echo get_option('gcf-address-title'); ?></span><br />
              <span class="subtitle"><?php echo get_option('gcf-address-subtitle'); ?></span><br />
              <span class="line1"><?php echo get_option('gcf-address-line1'); ?></span><br />
              <span class="line2"><?php echo get_option('gcf-address-line2'); ?></span><br />
              <span class="city"><?php echo get_option('gcf-address-city'); ?></span>
              <span class="state"><?php echo get_option('gcf-address-state'); ?></span>
              <span class="country"><?php echo get_option('gcf-address-country'); ?></span>
              <span class="postal-code"><?php echo get_option('gcf-address-postal-code'); ?></span><br />

              <a class="phone" href="tel:<?php echo get_option('gcf-address-phone'); ?>"><i class="icon-phone"></i> <?php echo get_option('gcf-address-phone'); ?></a><br />
              <a class="email" href="mailto:<?php echo get_option('gcf-address-email'); ?>"><i class="icon-mail"></i> <?php echo get_option('gcf-address-email'); ?></a><br />

            </p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->
  </div> <!-- /.outer-container -->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="<?php bloginfo("template_url"); ?>/js/vendor/jquery-1.9.1.min.js"></script>
  <script src="<?php bloginfo("template_url"); ?>/js/vendor/foundation/foundation.min.js"></script>
  <script src="<?php bloginfo("template_url"); ?>/js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src='//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

  <?php wp_footer(); ?>
</body>
</html>

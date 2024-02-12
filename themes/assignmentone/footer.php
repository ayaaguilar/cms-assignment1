<footer>
  <section class="top-footer">
    <!-- about footer -->
    <div class="first widget-area">
      <a href="<?php echo esc_url( home_url() ); ?>">
        <?php dynamic_sidebar( 'footer-about-section' ); ?>
      </a>
    </div>
    <!-- contact footer -->
    <div class="second quarter widget-area">
      <?php dynamic_sidebar( 'footer-contact-info' ); ?>
    </div><!-- .second .widget-area -->
    <!-- social links footer -->
    <div class="third widget-area">
      <?php dynamic_sidebar( 'footer-social-links' ); ?>
    </div>
    <!-- extra footer section -->
    <div class="fourth widget-area">
      <?php dynamic_sidebar( 'footer-extra-section' ); ?>
    </div>
  </section>
</footer>

  </body>
</html>
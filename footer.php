<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "footer" tag and all content after.
 *
 * @package WordPress
 * @subpackage DAREVA
 * @since DAREVA 1.0
 */
?>


  <section class="msg-container newsletter-subscription-container">
    <div class="row">
      <div class="eight columns">
        <div class="msg-inner-container">
          <p class="lead">
            Welcome to the DAREVA Subscription Center. Sign up here to receive the latest news and updates from the DAREVA conveniently via e-mail. Subscribe by entering your e-mail.
          </p>
        </div>
      </div>
      <div class="four columns">
        <form action="" class="newsletter-subscription">
          <div class="row">
            <div class="twelve columns">
              <div class="row collapse">
                <div class="eight mobile-three columns">
                  <input type="email" placeholder="info@dareva.com" required />
                </div>
                <div class="four mobile-one columns">
                  <button class="postfix btn btn-large btn-danger expand subscription-button">Subscribe</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

<footer>
  <div class="footer-container">
      <div class="footer-inner-container">
          <div class="row">
          <div class="twelve columns">
            <div class="subfooter">
              <div class="row">
              <div class="six columns">
                <div class="subfooter-widgets">
                  <?php
                    /**
                     * Fires before the DAREVA footer text for footer customization.
                     *
                     * @since DAREVA 1.0
                     */
                    do_action( 'dareva_credits' );
                  ?>
                  <p><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'dareva' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'dareva' ), 'WordPress' ); ?></a>.</p>
                </div>
              </div>
              <div class="six columns right">
                <div class="subfooter-widgets">
                  <ul class="right">
                    <li><a href="#" data-width="90" title="Twitter" class="twitter has-tip tip-top"><i class="social foundicon-twitter"></i></a></li>
                    <li><a href="#" data-width="90" title="Facebook" class="facebook has-tip tip-top"><i class="social foundicon-facebook"></i></a></li>
                    <li><a href="#" data-width="90" title="Pinterest" class="pinterest has-tip tip-top"><i class="social foundicon-pinterest"></i></a></li>
                    <li><a href="#" data-width="90" title="Dribbble" class="dribbble has-tip tip-top"><i class="social foundicon-dribbble"></i></a></li>
                    <li><a href="#" data-width="90" title="Path" class="path has-tip tip-top"><i class="social foundicon-path"></i></a></li>
                     <li><a href="#" data-width="90" title="Google+" class="path has-tip tip-top"><i class="social foundicon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div> <!-- end row -->
            </div> <!-- end subfooter -->
          </div> <!-- end twelve -->
          </div><!-- end row -->
        </div> <!-- end footer-container -->
  </div> <!-- end footer-container -->
  </footer>

	<?php wp_footer(); ?>

</body>
</html>
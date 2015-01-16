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

<footer>
  <div class="footer-container">
      <div class="footer-inner-container">
        <div class="row">
        <div class="four columns">
          <div class="footer-widgets">
            <h4><span>&nbsp;</span>Twitter Timeline</h4>
            <!-- <address>
                  <strong>Foundation, Inc.</strong><br>
                  795 Folsom Ave, Suite 600<br>
                  San Francisco, CA 94107<br>
                  <abbr title="Phone">P:</abbr> (123) 456-7890
                </address> -->
                 <div id="twitter-feed">&nbsp;</div>
          </div>
        </div>
        <div class="two columns">
          <div class="footer-widgets">
            <h4><span>&nbsp;</span>Support</h4>
            <ul>
              <li><a href="#">Iphone</a></li>
              <li><a href="#">Ipad</a></li>
              <li><a href="#">Ipod</a></li>
              <li><a href="#">Other</a></li>
            </ul>
          </div>
        </div>
        <div class="two columns">
          <div class="footer-widgets">
            <h4><span>&nbsp;</span>About</h4>
            <ul>
              <li><a href="#">Press</a></li>
              <li><a href="#">Sell Products</a></li>
              <li><a href="#">Careers</a></li>
            </ul>
          </div>
        </div>
        <div class="two columns">
          <div class="footer-widgets">
            <h4><span>&nbsp;</span>Contact</h4>
            <ul>
              <li><a href="#">Customer Service</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Sell Products</a></li>
              <li><a href="#">FAQs</a></li>
            </ul>
          </div>
        </div>
        <div class="two columns">
          <div class="footer-widgets">
            <h4><span>&nbsp;</span>Legal</h4>
            <ul>
              <li><a href="#">Warranty</a></li>
              <li><a href="#">Shipping &amp; Returns</a></li>
              <li><a href="#">Legal, Privacy &amp; Terms</a></li>
            </ul>
          </div>
        </div>
      </div> <!-- end row -->
          <div class="row">
          <div class="twelve columns">
            <div class="subfooter">
              <div class="row">
              <div class="six columns">
                <div class="subfooter-widgets">
                  <p>&copy; Fire Design Studio Inc. All rights Reseved.</p>
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
	<!-- Included JS Files (Uncompressed) -->
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>///ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/foundation/jquery.js"><\/script>')</script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/isotope.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/sequence.jquery-min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.hoverdir.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/twitter.js"></script>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/foundation/jquery.foundation.tabs.js"></script>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/foundation/jquery.foundation.tooltips.js"></script>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/foundation/jquery.foundation.reveal.js"></script>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/foundation/jquery.foundation.mediaQueryToggle.js"></script>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/foundation/jquery.foundation.buttons.js"></script>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/foundation/jquery.foundation.forms.js"></script>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/foundation/jquery.foundation.navigation.js"></script>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/foundation/jquery.foundation.orbit.js"></script>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/foundation/jquery.foundation.alerts.js"></script>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/foundation/jquery.placeholder.js"></script>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/foundation/jquery.foundation.topbar.js"></script>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/foundation/jquery.foundation.accordion.js"></script>


  <!-- Application Javascript, safe to override -->
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/foundation/app.js"></script>
</body>
</html>
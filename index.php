<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage DAREVA
 * @since DAREVA 1.0
 */

get_header(); ?>

       <div class="nav-container">
        <div class="row">
            <div class="twelve columns">
              <nav class="top-bar">
                <ul>
                  <!-- Title Area -->
                  <li class="name">
                    <h1>
                      <a href="index.html">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt="logo">
                      </a>
                    </h1>
                  </li>
                  <li class="toggle-topbar"><a href="#"></a></li>
                </ul>

              <section>
                  <!-- Right Nav Section -->
                  <ul class="right">
                    <li class="nav-divider">&nbsp;</li>
                    <li class="has-dropdown">
                      <a class="active" href="index.html">Home</a>
                      <ul class="dropdown">
                        <li>
                          <a href="index2.html">Home Different Style</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-divider">&nbsp;</li>
                    <li><a href="work.html">Work</a></li>
                    <li class="nav-divider">&nbsp;</li>
                    <li class="has-dropdown"><a href="blog.html">Blog</a>
                      <ul class="dropdown">
                        <li>
                          <a href="blog.html">Blog </a>
                        </li>
                        <li><a href="blog-commertial.html">Blog commertial style</a></li>
                        <li><a href="single-post.html">Single Post</a></li>
                        <li><a href="single-post-commertial.html">Single commertial style</a></li>
                        <li><a href="single-post-slider.html">Single slider</a></li>
                        <li><a href="single-post-commertial-slider.html">Single commertial slider</a></li>
                      </ul>

                    </li>
                    <li class="nav-divider">&nbsp;</li>
                    <li class="has-dropdown"><a href="#">Pages</a>
                      <ul class="dropdown">
                            <li><a href="pricingtables.html">Pricing Table</a></li>
                            <li><a href="pricingtables-commertial.html">Pricing Table Commertial</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="aboutus.html">About Us</a></li>
                            <li><a href="shortcodes.html">Shortcodes</a></li>
                            <li class="has-dropdown">
                              <a href="#">Has Dropdown</a>
                              <ul class="dropdown">
                                <li><a href="#">Level 3</a></li>
                                <li><a href="#">Level 3</a></li>
                                <li><a href="#">Level 3</a></li>
                              </ul>
                            </li>
                          </ul>
                    </li>
                    <li class="nav-divider">&nbsp;</li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul>

                </section>
              </nav>
            </div>
          </div>
      </div>
    </div> <!-- end nav-container -->

<section class="page-head">
  <div class="row">
    <div class="twelve columns">
      <h2>&#8211;Our <span>Blog.</span></h2>
      <h4 class="subheader">This is a smaller subheader.</h4>
    </div>
  </div>
</section>

<section class="row">
  <div class="nine columns">
    <section class="blog-container">
      <article class="blog-inner-container">
        <a href="#" class="th">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/blog-1.jpg" alt="blog">
        </a>
        <div class="row">
          <header class="offset-by-three nine columns"><a href="#">
              <h3 class="blog-title">The Nokia brand new edition</h3>
            </a></header>
        </div>
        <div class="row">
          <aside class="three columns">
            <ul class="blog-information">
              <li class="blog-date"><a href="#">FEBRUARY 9, 2012</a></li>
              <li class="blog-comments-count"><a href="#">3 Comments</a></li>
              <li class="blog-tags"><a href="#">Design,</a><a href="#" > Web</a></li>
            </ul>
          </aside>
          <div class="nine columns">
            <div class="blog-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. </p>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <a href="#" class="more-link">Read more &nbsp;&#8594;</a>
            </div>
          </div>
        </div>
      </article>
      <article class="blog-inner-container">
        <div id="featured">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/blog-1.jpg" />
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/blog-2.jpg" />
        </div>
        <div class="row">
          <header class="offset-by-three nine columns"><a href="#">
              <h3 class="blog-title">The Nokia brand new edition</h3>
            </a></header>
        </div>
        <div class="row">
          <aside class="three columns">
            <ul class="blog-information">
              <li class="blog-date"><a href="#">FEBRUARY 9, 2012</a></li>
              <li class="blog-comments-count"><a href="#">3 Comments</a></li>
              <li class="blog-tags"><a href="#">Design,</a><a href="#" > Web</a></li>
            </ul>
          </aside>
          <div class="nine columns">
            <div class="blog-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. </p>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <a href="#" class="more-link">Read more &nbsp;&#8594;</a>
            </div>
          </div>
        </div>
      </article>
      <article class="blog-inner-container">
       <div class="flex-video widescreen vimeo">
          <iframe src="<?php echo esc_url( get_template_directory_uri() ); ?>/http://player.vimeo.com/video/31136236?title=0&amp;byline=0&amp;portrait=0&amp;color=ff3579" width="220" height="124" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
        <div class="row">
          <header class="offset-by-three nine columns"><a href="#">
              <h3 class="blog-title">The Nokia brand new edition</h3>
            </a></header>
        </div>
        <div class="row">
          <aside class="three columns">
            <ul class="blog-information">
              <li class="blog-date"><a href="#">FEBRUARY 9, 2012</a></li>
              <li class="blog-comments-count"><a href="#">3 Comments</a></li>
              <li class="blog-tags"><a href="#">Design,</a><a href="#" > Web</a></li>
            </ul>
          </aside>
          <div class="nine columns">
            <div class="blog-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. </p>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <a href="#" class="more-link">Read more &nbsp;&#8594;</a>
            </div>
          </div>
        </div>
      </article>
      <article class="blog-inner-container">
        <div class="row">
          <aside class="three columns">
            <ul class="blog-information">
              <li class="blog-date"><a href="#">FEBRUARY 9, 2012</a></li>
              <li class="blog-comments-count"><a href="#">3 Comments</a></li>
              <li class="blog-tags"><a href="#">Design,</a><a href="#" > Web</a></li>
            </ul>
          </aside>
          <div class="nine columns">
            <div class="blog-content">
              <blockquote>
                I do not fear computers. I fear the lack of them.
                <cite>Isaac Asimov</cite>
              </blockquote>
            </div>
          </div>
        </div>
      </article>
  </section>
  </div>
 
</section>

<section class="pagination-outer-container">
  <div class="row">
  <div class="four columns centered">
    <div class="pagination-container">
      <ul class="pagination" role="menubar" aria-label="Pagination">
        <li class="arrow unavailable" aria-disabled="true"><a href="">&laquo; Previous</a></li>
        <li class="current"><a href="">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
        <li class="unavailable" aria-disabled="true"><a href="">&hellip;</a></li>
        <li><a href="">12</a></li>
        <li><a href="">13</a></li>
        <li class="arrow"><a href="">Next &raquo;</a></li>
      </ul>
    </div>

  </div>
</div>
</section>

<section class="msg-container newsletter-subscription-container">
  <div class="row">
    <div class="eight columns">
      <div class="msg-inner-container">
        <p class="lead">
  Welcome to the FireStudio Subscription Center. Sign up here to receive the latest news and updates from the FireStudio conveniently via e-mail. Subscribe by entering your e-mail.
</p>

      </div>
    </div>
    <div class="four columns">
      <form action="" class="newsletter-subscription">
        <div class="row">
          <div class="twelve columns">
            <div class="row collapse">
              <div class="eight mobile-three columns">
                <input type="email" placeholder="Hello@FireStudio.us" required />
              </div>
              <div class="four mobile-one columns">
                <button class="postfix btn btn-large btn-danger expand subscription-button">Subscribe</buttton>
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
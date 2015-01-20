<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage DAREVA
 * @since DAREVA 1.0
 */

get_header(); ?>

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
          <img src="img/blog/blog-1.jpg" alt="blog">
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
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. </p>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <blockquote>
                Design is a plan for arranging elements in such a way as best to accomplish a particular purpose.
                <cite>Charles Eames</cite>
              </blockquote>

              <p>Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. <a href="#">Cras mattis consectetur purus</a> sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>


                <div class="row">
                  <div class="seven columns">
                    <a href="#" class="th">
                      <img src="img/blog/blog-2.jpg" alt="blog">
                    </a>
                  </div>
                  <div class="five columns">
                    <div class="blog-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. </p>
                      <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.</p>
                  </div>
                </div>

              </div>
              <br>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. </p>

               <div class="row">
                  <div class="seven columns">
                    <div class="blog-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. </p>
                      <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.</p>
                    </div>
                  </div>
                  <div class="five columns">
                    <a href="#" class="th">
                      <img src="img/blog/blog-2.jpg" alt="blog">
                    </a>
                  </div>

              </div>
          </div>
        </div>
      </article>
  </section> <!-- end blog-container -->

<?php
// If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
?>



</div> <!-- end nine columns -->

  <?php get_sidebar(); ?>

</section> <!-- end row -->


<?php get_footer(); ?>
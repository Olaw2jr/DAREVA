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
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/blog-2.jpg" alt="blog">
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
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/blog-2.jpg" alt="blog">
                    </a>
                  </div>

              </div>
          </div>
        </div>
      </article>
  </section> <!-- end blog-container -->
<div class="row">
  <div class="offset-by-three nine columns">
    <ul class="comments-information">
      <li class="comments-amount">4 RESPONSES</li>
    </ul>
  </div>
</div>
<div class="row">
  <div class="twelve columns">
    <section class="comments">
   <!-- Feed Entry -->
      <div class="row">
        <div class="two  columns mobile-four">
          <div class="post-info comment-avatar parent ">

                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/fella2-post.png" alt="">

              </div>
           <div class="comment-reply">
                  <ul>
                    <li>John Doe</li>
                    <li><a href="">Reply</a></li>
                  </ul>
            </div>
        </div>

        <div class="nine columns offset-by-one mobile-four">
          <div class="panel">
            <span class="comment-arrow parent">&nbsp;</span>
      <p>Come Back, Little Sheba is a videotaped television production of the play of the same name by William Inge made by Granada Television as part of the anthology series Laurence Olivier Presents Omg a Link transmitted in the UK by ITV on 1 January 1978. The selected plays were intended to represent "the best" in 20th Century theatre, staged for television.</p>
    </div>
    <br>
          <div class="row">
            <div class="two columns mobile-two">
              <div class="post-info comment-avatar child">

                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/fella2-post.png" alt="">

              </div>
               <div class="comment-reply">
                  <ul>
                    <li>Mary Doe</li>
                    <li><a href="">Reply</a></li>
                  </ul>
              </div>
            </div>
            <div class="nine columns offset-by-one mobile-two">
              <div class="panel">
                <span class="comment-arrow">&nbsp;</span>
      <p>Olivier Presents Omg a Link transmitted in the UK by ITV on 1 January 1978. The selected plays were intended to represent "the best" in 20th Century theatre, staged for television.</p>
      <p>Little Sheba is a videotaped television production of the play of the same name by William Inge made by Granada Television as part of the anthology series Laurence Olivier Presents Omg a Link transmitted in the UK</p>
    </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="two columns mobile-two">
              <div class="post-info comment-avatar child">

                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/fella2-post.png" alt="">

              </div>
              <div class="comment-reply">
                  <ul>
                    <li>John Doe</li>
                    <li><a href="">Reply</a></li>
                  </ul>
              </div>
            </div>
            <div class="nine columns offset-by-one mobile-two">
              <div class="panel">
                <span class="comment-arrow">&nbsp;</span>
      <p>William Inge made by Granada Television as part of the anthology series Laurence Olivier Presents Omg a Link transmitted in the UK by ITV on 1 January 1978. The selected plays were intended to represent "the best" in 20th Century theatre, staged for television.</p>
    </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Feed Entry -->
      <!-- Feed Entry -->
      <br>
      <div class="row">
        <div class="two columns  mobile-four">
          <div class="post-info comment-avatar parent">

                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/fella2-post.png" alt="">

              </div>
           <div class="comment-reply">
                  <ul>
                    <li>Mary Doe</li>
                    <li><a href="">Reply</a></li>
                  </ul>
              </div>
        </div>
        <div class="nine columns offset-by-one mobile-four">
          <div class="panel">
            <span class="comment-arrow parent parent">&nbsp;</span>
      <p>Come Back, Little Sheba is a videotaped television production of the play of the same name by William Inge made by Granada Television as part of the anthology series Laurence Olivier Presents Omg a Link transmitted in the UK by ITV on 1 January 1978. The selected plays were intended to represent "the best" in 20th Century theatre, staged for television.</p>
    </div>
        </div>
      </div>
      <!-- End Feed Entry -->
      <!-- Feed Entry -->
      <div class="row">
        <div class="two columns  mobile-four">
          <div class="post-info comment-avatar parent">

                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/fella2-post.png" alt="">

              </div>
           <div class="comment-reply">
                  <ul>
                    <li>John Doe</li>
                    <li><a href="">Reply</a></li>
                  </ul>
              </div>
        </div>
        <div class="nine columns offset-by-one mobile-four">
          <div class="panel">
            <span class="comment-arrow parent">&nbsp;</span>
      <p>Presents Omg a Link transmitted in the UK by ITV on 1 January 1978. The selected plays were intended to represent "the best" in 20th Century theatre, staged for television.</p>
      <p>Little Sheba is a videotaped television production of the play of the same name by William Inge made by Granada Television as part of the anthology series Laurence Olivier Presents Omg a Link transmitted in the UK</p>
    </div>

          <div class="row">
            <div class="two columns mobile-two">
              <div class="post-info comment-avatar child">

                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/fella2-post.png" alt="">

              </div>
               <div class="comment-reply">
                  <ul>
                    <li>Mary Doe</li>
                    <li><a href="">Reply</a></li>
                  </ul>
              </div>
            </div>
            <div class="nine columns offset-by-one mobile-two">
              <div class="panel">
                <span class="comment-arrow">&nbsp;</span>
      <p>It has an easy to override visual style, and is appropriately subdued.
              Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit</p>
    </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Feed Entry -->
</section> <!-- end comments -->
  </div> <!-- end offset -->
</div><!-- end row -->

<div class="row">
  <div class="offset-by-three nine columns">
    <div class="row">
      <div class="comments-form">

                   <form>
                    <legend>Leave a reply
                      <p>Want to join the discusion? <br>Feel free to contribute!
                      </p>
                    </legend>
                    <div class="row">
                      <div class="twelve mobile-four columns">
                        <input type="text" id="inputName" placeholder="Name" required class="four left" /> <label for="inputName">Name *</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="twelve mobile-four columns">
                        <input type="email" id="inputEmail" placeholder="Email" required class="four left" /> <label for="inputEmail">Email *</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="twelve mobile-four columns">
                        <input type="url" id="inputUrl" placeholder="Website" class="four left" /> <label for="inputUrl">Website</label>
                      </div>
                    </div>
                     <div class="row">
                      <div class="twelve mobile-four columns">
                        <textarea rows="8" class="ten" placeholder="Your comment"></textarea>
                      </div>
                      </div>
                      <div class="row">
                        <div class="eight columns">
                          <p class="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code></p>
                        </div>
                      </div>

                    <button type="submit" class="btn btn-danger">Post Comment</button>
                </form>



      </div> <!-- end comments-form -->
    </div> <!-- end row -->
  </div> <!-- offset-by-three nine columns -->
</div>

</div> <!-- end nine columns -->
  
  <?php get_sidebar(); ?>
  
</section> <!-- end row -->


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
                <button class="postfix btn btn-large btn-danger expand subscription-button">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>
<?php 
/**
 * front-page.php
 *
 * The template for displaying Home page.
 *
 * @package WordPress
 * @subpackage WeDesign
 * @since wedesign 1.0
 */


get_header(); ?>

<!-- slider-start -->
  <div id="header-container">
  <div class="row">
    <div class="header">
        <img class="prev" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bt-prev.png" alt="Previous Frame" />
        <img class="next" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bt-next.png" alt="Next Frame" />
      <div id="sequence">
        <ul id="sequence-slides">
          <li>
            <div class="slider-bg"></div>
          <img class="sky " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slider-patterns/overlay2.png" alt="Blue Sky" />
        </li>
          <li>
            <div class="slider-bg"></div>
            <img class="sky " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slider-patterns/space_background2.jpg" alt="Blue Sky" />
          </li>
          <li>
            <div class="slider-bg"></div>
            <img class="sky " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slider-patterns/overlay2.png" alt="Blue Sky" />
        </li>
        <li>
          <div class="slider-bg"></div>
          <img class="sky " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slider-patterns/overlay1.png" alt="Blue Sky" />
        </li>
        <li>
          <div class="slider-bg"></div>
          <img class="sky " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slider-patterns/overlay3.png" alt="Blue Sky" />
        </li>
          <li>
            <div class="slider-bg"></div>
            <img class="sky " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slider-patterns/space_background2.jpg" alt="Blue Sky" />
          </li>
          <li>
            <div class="slider-bg"></div>
            <img class="sky " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slider-patterns/overlay2.png" alt="Blue Sky" />
          </li>
          <li>
            <div class="slider-bg"></div>
            <img class="sky " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slider-patterns/overlay2.png" alt="Blue Sky" />
          </li>
        </ul>
      </div>
    </div>
    </div>
  </div>
<!-- slider end -->
<div class="tagline-container">
  <div class="row">
  <div class="twelve columns">
    <div class="tagline">
      <h1><span>DAREVA</span> Dar es Salaam Regional Volleyball Association<br> is a volleyball association in Dar es Salaam Region, Thats responsible Volleyball.</h1>
    </div>
  </div>
</div>
</div>

<div class="row">
  <div class="twelve columns">
    <div class="home-tagline">
      <h2>Our <span>Functions.</span></h2>
    </div>
  </div>
</div>

<section class="expertise-section">
  <div class="row">
    <div class="three columns">
      <figure class="ca-menu">
          <a href="#" class="th">
              <span class="ca-icon"><i class="general foundicon-website"></i></span>
              <div class="ca-content">
                  <h3 class="ca-main">Function <br>One</h3>
                  <h6 class="ca-sub">Personalized for your</h6>
              </div>
          </a>
      </figure>
    </div>
    <div class="three columns">
      <figure class="ca-menu">
          <a href="#" class="th">
              <span class="ca-icon"><i class="general foundicon-graph"></i></span>
              <div class="ca-content">
                  <h3 class="ca-main">Function <br>Two</h3>
                  <h6 class="ca-sub">Advanced technology</h6>
              </div>
          </a>
      </figure>
    </div>
    <div class="three columns">
      <figure class="ca-menu">
          <a href="#" class="th">
              <span class="ca-icon" id="heart"><i class="general foundicon-heart"></i></span>
                <div class="ca-content">
                    <h3 class="ca-main">Function <br> Three</h3>
                    <h6 class="ca-sub">Understanding visually</h6>
                </div>
          </a>
      </figure>
    </div>
    <div class="three columns">
      <figure class="ca-menu">
          <a href="#" class="th">
           <span class="ca-icon"><i class="general foundicon-phone"></i></span>
            <div class="ca-content">
                <h3 class="ca-main">Function <br> Four</h3>
                <h6 class="ca-sub">24/7 for your needs</h6>
            </div>
          </a>
      </figure>
    </div>
  </div> <!-- end row -->
</section>


<div class="row">
  <div class="twelve columns">
    <div class="home-tagline">
      <h2>Recent <span>News.</span></h2>
    </div>
  </div>
</div>

<section>
  <div class="recent-article-container">
    <div class="row">
      <div class="twelve columns">
        <section class="recent">
        </section>
        <ul class="row">
      <li class="four columns">
        <div class="recent-article">
          <a href="#" class="th">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/work/work-1.jpg" alt="work1">

            <div class="recent-article-content">
             <div class="recent-article-inner">
                <h4>Content <span>Creation</span> </h4>
                <p>TV shows, culture, entertainment and the environment — very interesting and fascinating content for visual people.</p>
              </div>
            </div>
          </a>
        </div>
      </li>
      <li class="four columns">
        <div class="recent-article">
          <a href="#" class="th">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/work/work-2.jpg" alt="work2">
            <div class="recent-article-content">
              <div class="recent-article-inner">
                <h4>Start <span>New</span> Things</h4>
                <p>Featuring illustrators, graphic artists, short fiction authors and written text. Ferocious Quarterly calls itself an ongoing exercise.</p>
              </div>
            </div>
          </a>
        </div>
      </li>
      <li class="four columns">
        <div class="recent-article">
          <a href="#" class="th">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/work/work-3.jpg" alt="work3">
            <div class="recent-article-content-last">
              <div class="recent-article-inner">
                <h4>Portfolio <span>Review</span> Week</h4>
                <p>Asked to leading designers from the fields of Web design, print design, illustration and type design.</p>
              </div>
            </div>
          </a>
        </div>
      </li>
    </ul>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
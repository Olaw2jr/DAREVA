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
    <div class="header">
        <img class="prev" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bt-prev.png" alt="Previous Frame" />
        <img class="next" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bt-next.png" alt="Next Frame" />
      <div id="sequence">
        <ul id="sequence-slides">
          <li>
            <div class="slider-bg"></div>
           <h2 class="slider-title">Responsive Web Design.</h2>
             <h3 class="subtitle">Create unique sliders using CSS3 transitions</h3>
             <button type="button" class="btn btn-large btn-inverse slider-button">Buy my App now</button>
          <img class="sky " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slider-patterns/overlay2.png" alt="Blue Sky" />
        </li>
          <li>
            <div class="slider-bg"></div>
            <h2 class="slider-title ">Start buying this theme.</h2>
            <h3 class="subtitle ">The Responsive Slider with Advanced CSS3 Transitions</h3
              >
              <button type="button" class="btn btn-large btn-info slider-button">Buy my App now</button>
            <img class="sky " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slider-patterns/space_background2.jpg" alt="Blue Sky" />
          </li>
          <li>
            <div class="slider-bg"></div>
             <h2 class="slider-title">This could be your Product.</h2>
             <h3 class="subtitle ">Responsive Slider with Advanced CSS3 Transitions</h3>
             <button type="button" class="btn btn-large btn-danger slider-button">Buy my Theme</button>
            <img class="sky " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slider-patterns/overlay2.png" alt="Blue Sky" />
        </li>
        <li>
          <div class="slider-bg"></div>
             <h2 class="slider-title">This could be your App.</h2>
             <h3 class="subtitle">Image credit to this amazing photographer Mark Sebastian.</h3>
             <a href="http://www.flickr.com/photos/markjsebastian/" class="btn btn-large btn-inverse slider-button">Check it Here</a>
          <img class="sky " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slider-patterns/overlay1.png" alt="Blue Sky" />
        </li>
        <li>
          <div class="slider-bg"></div>
          <h2 class="slider-title">Powered with HTML5 &amp; CSS3.</h2>
            <h3 class="subtitle">Supports modern browsers, old browsers (IE8+), touch devices.</h3>
            <button type="button" class="btn btn-large btn-info slider-button">Check your phone</button>
          <img class="sky " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slider-patterns/overlay3.png" alt="Blue Sky" />
        </li>
          <li>
            <div class="slider-bg"></div>
            <h2 class="slider-title ">Built using Sequence</h2>
               <h3 class="subtitle ">The Responsive Slider with Advanced CSS3 Transitions</h3>
               <button type="button" class="btn btn-large btn-info slider-button">Amazing buttons</button>
            <img class="sky " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slider-patterns/space_background2.jpg" alt="Blue Sky" />
          </li>
          <li>
            <div class="slider-bg"></div>
            <h2 class="slider-title">Powered with HTML5 &amp; CSS3.</h2>
            <h3 class="subtitle">Create unique sliders using CSS3 transitions</h3>
            <button type="button" class="btn btn-large btn-warning slider-button">Buy my App now</button>
            <img class="sky " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slider-patterns/overlay2.png" alt="Blue Sky" />
          </li>
          <li>
            <div class="slider-bg"></div>
            <h2 class="slider-title">Responsive Web Design.</h2>
            <h3 class="subtitle">Supports modern browsers, old browsers (IE8+), touch devices.</h3>
            <button type="button" class="btn btn-large btn-success slider-button">Buy my App now</button>
            <img class="sky " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slider-patterns/overlay2.png" alt="Blue Sky" />
          </li>
        </ul>
      </div>
    </div>
  </div>
<!-- slider end -->
<div class="tagline-container">
  <div class="row">
  <div class="twelve columns">
    <div class="tagline">
      <h1>Fire Studio <span>Loves</span> crafting new concepts and experiences, <br>reaching people through design &amp; web development.</h1>
    </div>
  </div>
</div>
</div>

<div class="row">
  <div class="twelve columns">
    <div class="home-tagline">
      <h2>Our <span>Expertise.</span></h2>
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
                  <h3 class="ca-main">Exceptional <br>Service</h3>
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
                  <h3 class="ca-main">Creative <br>Storytelling</h3>
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
                    <h3 class="ca-main">Infographical Education</h3>
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
                <h3 class="ca-main">Unlimited <br> Support</h3>
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
      <h2>Our <span>Articles.</span></h2>
    </div>
  </div>
</div>

<section class="recent-content-tabs diff">
<section class="row">
  <div class="twelve columns">

<div class="tabs-content-container">

<ul class="tabs-content ">
  <li class="active" id="simple1Tab">
    <div class="row">
      <div class="eight columns">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/blog-4.png" alt="blog">
      </div>
      <div class="four columns">
        <header class="tab-title">
              <a href="#">
                 <h3 class="blog-title">HTML5 &amp; CSS3 Features</h3>
              </a>
          </header>
         <div class="blog-content">
              <p>How can I start using HTML5 if older browsers don’t support it? But the question itself is misleading. HTML5 is not one big thing.</p>
              <p>
                You may well ask: “How can I start using HTML5 if older browsers don’t support it?” But the question itself is misleading.
              </p>


              <a href="#" class="more-link">Read more &nbsp;&#8594;</a>
            </div>
      </div>
    </div>
  </li>
  <li id="simple2Tab">
    <div class="row">
      <div class="eight columns">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/blog-3.png" alt="blog">
      </div>
      <div class="four columns">
        <header class="tab-title">
              <a href="#">
                 <h3 class="blog-title">The Nokia new edition</h3>
              </a>
          </header>
         <div class="blog-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              <p>
                You may well ask: “How can I start using HTML5 if older browsers don’t support it?” But the question itself is misleading.
              </p>

              <a href="#" class="more-link">Read more &nbsp;&#8594;</a>
            </div>
      </div>
    </div>
  </li>
  <li id="simple3Tab">
    <div class="row">
      <div class="eight columns">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/blog-5.png" alt="blog">
      </div>
      <div class="four columns">
        <header class="tab-title">
              <a href="#">
                 <h3 class="blog-title">Bright ideas up here.</h3>
              </a>
          </header>
         <div class="blog-content">
              <p>
                You may well ask: “How can I start using HTML5 if older browsers don’t support it?” But the question itself is misleading.
              </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

              <a href="#" class="more-link">Read more &nbsp;&#8594;</a>
            </div>
      </div>
    </div>
  </li>
  <li id="simple4Tab">
    <div class="row">
      <div class="eight columns">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/blog-6.png" alt="blog">
      </div>
      <div class="four columns">
        <header class="tab-title">
              <a href="#">
                 <h3 class="blog-title">Even more bright ideas</h3>
              </a>
          </header>
         <div class="blog-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              <p>
                You may well ask: “How can I start using HTML5 if older browsers don’t support it?” But the question itself is misleading.
              </p>

              <a href="#" class="more-link">Read more &nbsp;&#8594;</a>
            </div>
      </div>
    </div>
  </li>
</ul>
<div class="row">
  <div class="eight columns">
    <div class="recent-tabs-icons">
      <dl class="tabs">
        <dd class="active"><a href="#simple1"><i class="general foundicon-website"></i></a></dd>
        <dd><a href="#simple2"><i class="general foundicon-photo"></i></a></dd>
        <dd><a href="#simple3"><i class="general foundicon-cloud"></i></a></dd>
        <dd><a href="#simple4"><i class="general foundicon-idea"></i></a></dd>
      </dl>
    </div>
  </div>
</div>
</div>
  </div>
</section>
</section> <!-- end section-tabs -->

<div class="row">
  <div class="twelve columns">
    <div class="home-tagline">
      <h2>Our <span>Work.</span></h2>
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



<section class="msg-container diff-msg">
  <div class="row">
    <div class="twelve columns">
      <div class="msg-inner-container">
        <h3>I’ve always held to the belief that the practice of
        creating compelling <br> graphic design occurs employing.</h3>
        <h5 class="check-us"><a href="#" > Check our Story </a></h5>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
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

<section class="page-head">
  <div class="row">
    <div class="twelve columns">
      <h2><?php _e( '&#8211;Our <span>Blog.</span>', 'dareva' ); ?></h2>
      <h4 class="subheader"><?php //_e( 'This is a smaller subheader.', 'dareva' ); ?></h4>
    </div>
  </div>
</section>

<section class="row">
  <div class="nine columns">
    <section class="blog-container">
      
        <?php if ( have_posts() ) : 

        // Start the loop.
        while ( have_posts() ) : the_post();

          /*
           * Include the Post-Format-specific template for the content.
           * If you want to override this in a child theme, then include a file
           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
           */
          get_template_part( 'content', get_post_format() );

        // End the loop.
        endwhile;

      // If no content, include the "No posts found" template.
      else :
        get_template_part( 'content', 'none' );

      endif;
      ?>
        
    </section>
  </div>
  
  <?php get_sidebar(); ?>

</section>

<section class="pagination-outer-container">
  <div class="row">
  <div class="four columns centered">
    
    <?php dareva_pagination(); ?>
    
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

<?php get_footer(); ?>
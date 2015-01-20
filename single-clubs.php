<?php
/**
 * The template for displaying all single posts and attachments
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
      <h2><?php _e( '&#8211;Our <span>Club.</span>', 'dareva' ); ?></h2>
      <h4 class="subheader"><?php //_e( 'This is a smaller subheader.', 'dareva' ); ?></h4>
    </div>
  </div>
</section>

<section class="row">
    <div class="twelve columns">
      <section class="blog-container">
       <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

          // Include the page content template.
          get_template_part( 'content', 'about' );

          /* 
          If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
          */

        // End the loop.
        endwhile;
        ?>
    </section>
    </div>
  </section>


<?php get_footer(); ?>
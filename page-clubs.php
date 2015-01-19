<?php
/**
 * The template for displaying pages
 *
 * Template Name: Clubs
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage DAREVA
 * @since DAREVA 1.0
 */

get_header(); ?>

	<section class="page-head">
	  <div class="row">
	    <div class="twelve columns">
	      <h2>&#8211;Our <span>Clubs.</span></h2>
	      <h4 class="subheader">Get involved, Keep the ball flying.</h4>
	    </div>
	  </div>
	</section>

	<section class="row">
	  <div class="twelve columns">
	    <section class="blog-container">
	      <?php if ( have_posts() ) : 

	        // Start the loop.
	        while ( have_posts() ) : the_post();

	          /*
	           * Include the Post-Format-specific template for the content.
	           * If you want to override this in a child theme, then include a file
	           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
	           */
	          get_template_part( 'content', 'clubs' );

	        // End the loop.
	        endwhile;

	      // If no content, include the "No posts found" template.
	      else :
	        get_template_part( 'content', 'none' );

	      endif;
	      ?>
	  </section>
	  </div>
	</section>

<?php get_footer(); ?>

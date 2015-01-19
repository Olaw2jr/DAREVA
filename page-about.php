<?php
/**
 * The template for displaying pages
 *
 * Template Name: About
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
	      <h2>&#8211;About<span> Us.</span></h2>
	      <h4 class="subheader">This is a smaller subheader.</h4>
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

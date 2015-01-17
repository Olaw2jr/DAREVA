<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<section class="page-head">
  <div class="row">
    <div class="twelve columns">
    <?php if ( have_posts() ) : ?>

      <h2><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h2>
      <h4 class="subheader"><?php //_e( 'This is a smaller subheader.', 'dareva' ); ?></h4>
    </div>
  </div>
</section>

<section class="row">
  <div class="nine columns">
    <section class="blog-container">
    
      <?php
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>

          <?php
          /*
           * Run the loop for the search to output the results.
           * If you want to overload this in a child theme then include a file
           * called content-search.php and that will be used instead.
           */
          get_template_part( 'content', 'search' );

        // End the loop.
        endwhile;

        // Previous/next page navigation.
        the_posts_pagination( array(
          'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
          'next_text'          => __( 'Next page', 'twentyfifteen' ),
          'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
        ) );

        // If no content, include the "No posts found" template.
        else :
          get_template_part( 'content', 'none' );

        endif;
      ?>
        
    </section>
  </div>
  
  <?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>

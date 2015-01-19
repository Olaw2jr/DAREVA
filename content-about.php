<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage DAREVA
 * @since DAREVA 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-inner-container'); ?> >

	<?php
		// Post thumbnail.
		//dareva_post_thumbnail();
   	?>
<div class="row">
  <header class="offset-by-two eight columns">
  	<?php
			//the_title( '<h1 class="blog-title entry-title">', '</h1>' );
	?>
   </header>
</div>
<div class="row">
  <div class="offset-by-two eight columns">
    <div class="blog-content">
      <?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Read more %s', 'dareva' ),
			the_title( '<span class="screen-reader-text">', '</span>', false )
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'dareva' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'dareva' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
	?>
    </div>
  </div>
</div>
</article>
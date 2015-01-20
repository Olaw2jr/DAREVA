<?php
/**
 * The default template for displaying about content
 *
 * Used for about page.
 *
 * @package WordPress
 * @subpackage DAREVA
 * @since DAREVA 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-inner-container'); ?> >

	<?php
		// Post thumbnail.
    if ( is_single() );
	   dareva_post_thumbnail(); 
     echo '<br><br>'
   	?>
  <div class="row">
    <header class="offset-by-two eight columns">
    	<?php
  			the_title( '<h1 class="blog-title entry-title">', '</h1>' );
  	?>
     </header>
  </div>
  <div class="row">
    <div class="offset-by-two eight columns">
      <div class="blog-content">
        <?php
  		the_content();
  	?>
      </div>
    </div>
  </div>
</article>
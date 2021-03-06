<article class="blog-inner-container">
  <div class="row">
    <div class="seven columns">
      <?php
        // Post thumbnail.
        dareva_post_thumbnail();
     ?>
    </div>
    <div class="five columns">
       <header>
           <?php the_title( sprintf( '<a href="%s" rel="bookmark"><h2 class="blog-title">', esc_url( get_permalink() ) ), '</h2></a>' );?>
    </header>

    <div class="blog-content">
        <?php
        /* translators: %s: Name of current post */
        the_content( sprintf(
          __( 'Read more %s', 'dareva' ),
          the_title( '<span class="screen-reader-text">', '</span>', false )
        ) );
      ?>
      </div>
    </div>
  </div>
</article>
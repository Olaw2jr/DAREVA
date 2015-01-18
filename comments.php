<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage DAREVA
 * @since DAREVA 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
  return;
}
?>

<?php if ( have_comments() ) : ?>
<div class="row">
  <div class="offset-by-three nine columns">
    <ul class="comments-information">
      <li class="comments-amount">
        <?php
          printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'dareva' ),
            number_format_i18n( get_comments_number() ), get_the_title() );
        ?>
      </li>
    </ul>
  </div>
</div>

<div class="row">
  <div class="twelve columns">
    <section class="comments">

      <ol class="comment-list">
        <?php wp_list_comments('type=comment&callback=dareva_comments'); ?>
      </ol>

      <?php endif; // have_comments() ?>

      <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
      ?>
        <p class="no-comments"><?php _e( 'Comments are closed.', 'dareva' ); ?></p>
      <?php endif; ?>

    </section> <!-- end comments -->
  </div> <!-- end offset -->
</div><!-- end row -->

<div class="row">
  <div class="offset-by-three nine columns">
    <div class="row">
      <div class="comments-form">

                   <form>
                    <legend>Leave a reply
                      <p>Want to join the discusion? <br>Feel free to contribute!
                      </p>
                    </legend>
                    <div class="row">
                      <div class="twelve mobile-four columns">
                        <input type="text" id="inputName" placeholder="Name" required class="four left" /> <label for="inputName">Name *</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="twelve mobile-four columns">
                        <input type="email" id="inputEmail" placeholder="Email" required class="four left" /> <label for="inputEmail">Email *</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="twelve mobile-four columns">
                        <input type="url" id="inputUrl" placeholder="Website" class="four left" /> <label for="inputUrl">Website</label>
                      </div>
                    </div>
                     <div class="row">
                      <div class="twelve mobile-four columns">
                        <textarea rows="8" class="ten" placeholder="Your comment"></textarea>
                      </div>
                      </div>
                      <div class="row">
                        <div class="eight columns">
                          <p class="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code></p>
                        </div>
                      </div>

                    <button type="submit" class="btn btn-danger">Post Comment</button>
                </form>



      </div> <!-- end comments-form -->
    </div> <!-- end row -->
  </div> <!-- offset-by-three nine columns -->
</div>
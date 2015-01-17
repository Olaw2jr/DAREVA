<?php
/**
 * Custom template tags for DAREVA
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage DAREVA
 * @since DAREVA 1.0
 */

if ( ! function_exists( 'dareva_comment_nav' ) ) :
/**
 * Display navigation to next/previous comments when applicable.
 *
 * @since DAREVA 1.0
 */
function dareva_comment_nav() {
	// Are there comments to navigate through?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
	<nav class="navigation comment-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'dareva' ); ?></h2>
		<div class="nav-links">
			<?php
				if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'dareva' ) ) ) :
					printf( '<div class="nav-previous">%s</div>', $prev_link );
				endif;

				if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'dareva' ) ) ) :
					printf( '<div class="nav-next">%s</div>', $next_link );
				endif;
			?>
		</div><!-- .nav-links -->
	</nav><!-- .comment-navigation -->
	<?php
	endif;
}
endif;

if ( ! function_exists( 'dareva_entry_meta' ) ) :
/**
 * Prints HTML with meta information for the categories, tags.
 *
 * @since DAREVA 1.0
 */
function dareva_entry_meta() {
	
	if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			get_the_date()
		);

		printf( '<li class="blog-date"><a href="%2$s" rel="bookmark">%3$s</a></li>',
			_x( '', 'Used before publish date.', 'dareva' ),
			esc_url( get_permalink() ),
			$time_string
		);
	}


	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<li class="blog-comments-count">';
		comments_popup_link( __( 'Leave a comment', 'dareva' ), __( '1 Comment', 'dareva' ), __( '% Comments', 'dareva' ) );
		echo '</li>';
	}

	if ( 'post' == get_post_type() ) {

		$categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'dareva' ) );
		if ( $categories_list && dareva_categorized_blog() ) {
			printf( '<li class="blog-tags"><span class="screen-reader-text">%1$s </span>%2$s</li>',
				_x( '', 'Used before category names.', 'dareva' ),
				$categories_list
			);
		}

		$tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'dareva' ) );
		if ( $tags_list ) {
			printf( '<li class="blog-tags"><span class="screen-reader-text">%1$s </span>%2$s</li>',
				_x( '', 'Used before tag names.', 'dareva' ),
				$tags_list
			);
		}
	}

}
endif;

/**
 * Determine whether blog/site has more than one category.
 *
 * @since DAREVA 1.0
 *
 * @return bool True of there is more than one category, false otherwise.
 */
function dareva_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'dareva_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'dareva_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so dareva_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so dareva_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in {@see dareva_categorized_blog()}.
 *
 * @since DAREVA 1.0
 */
function dareva_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'dareva_categories' );
}
add_action( 'edit_category', 'dareva_category_transient_flusher' );
add_action( 'save_post',     'dareva_category_transient_flusher' );

if ( ! function_exists( 'dareva_post_thumbnail' ) ) :
/**
 * Display an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 *
 * @since DAREVA 1.0
 */
function dareva_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
	?>

	<div class="">
		<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<a href="<?php the_permalink(); ?>" class="th" aria-hidden="true">
		<?php
			the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title() ) );
		?>
	</a>

	<?php endif; // End is_singular()
}
endif;

if ( ! function_exists( 'dareva_get_link_url' ) ) :
/**
 * Return the post URL.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 * @since DAREVA 1.0
 *
 * @see get_url_in_content()
 *
 * @return string The Link format URL.
 */
function dareva_get_link_url() {
	$has_url = get_url_in_content( get_the_content() );

	return $has_url ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}
endif;

if ( ! function_exists( 'dareva_excerpt_more' ) && ! is_admin() ) :
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a 'Continue reading' link.
 *
 * @since DAREVA 1.0
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function dareva_excerpt_more( $more ) {
	$link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading %s', 'dareva' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
		);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'dareva_excerpt_more' );
endif;

if (! function_exists('dareva_pagination') && ! is_admin()):
/**
 * Out puts foundation built in pagination for WorPress.
 * Thanks to: https://gist.github.com/croemmich/5830094
 *
 * @since DAREVA 1.0
 *
 * @return string pagination links.
 */

	 function dareva_pagination($arrows = true, $ends = true, $pages = 2)
{
    if (is_singular()) return;

    global $wp_query, $paged;
    $pagination = '';

    $max_page = $wp_query->max_num_pages;
    if ($max_page == 1) return;
    if (empty($paged)) $paged = 1;

    if ($arrows) $pagination .= dareva_pagination_link($paged - 1, 'arrow' . (($paged <= 1) ? ' unavailable' : ''), '&laquo;', 'Previous Page');
    if ($ends && $paged > $pages + 1) $pagination .= dareva_pagination_link(1);
    if ($ends && $paged > $pages + 2) $pagination .= dareva_pagination_link(1, 'unavailable', '&hellip;');
    for ($i = $paged - $pages; $i <= $paged + $pages; $i++) {
        if ($i > 0 && $i <= $max_page)
            $pagination .= dareva_pagination_link($i, ($i == $paged) ? 'current' : '');
    }
    if ($ends && $paged < $max_page - $pages - 1) $pagination .= dareva_pagination_link($max_page, 'unavailable', '&hellip;');
    if ($ends && $paged < $max_page - $pages) $pagination .= dareva_pagination_link($max_page);

    if ($arrows) $pagination .= dareva_pagination_link($paged + 1, 'arrow' . (($paged >= $max_page) ? ' unavailable' : ''), '&raquo;', 'Next Page');

    $pagination = '<ul class="pagination" role="menubar" aria-label="Pagination">' . $pagination . '</ul>';
    $pagination = '<div class="pagination-container">' . $pagination . '</div>';

    echo $pagination;
}

function dareva_pagination_link($page, $class = '', $content = '', $title = '')
{
    $id = sanitize_title_with_dashes('pagination-page-' . $page . ' ' . $class);
    $href = (strrpos($class, 'unavailable') === false && strrpos($class, 'current') === false) ? get_pagenum_link($page) : "#$id";

    $class = empty($class) ? $class : " class=\"$class\"";
    $content = !empty($content) ? $content : $page;
    $title = !empty($title) ? $title : 'Page ' . $page;

    return "<li$class><a id=\"$id\" href=\"$href\" title=\"$title\">$content</a></li>\n";
}

endif;

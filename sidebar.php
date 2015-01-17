<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage DAREVA
 * @since DAREVA 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

<aside class="three columns">
	<div class="widgets-container">
	  <?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</aside>

<?php endif; ?>
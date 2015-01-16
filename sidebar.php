<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage DAREVA
 * @since DAREVA 1.0
 */

if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>

<aside class="three columns">
	<div class="widgets-container">

	  <div class="widgets">
	    <form class="search-widget">
	      <input type="text" placeholder="To search hit enter..." />
	    </form>
	  </div>
	  <div class="widgets">
	    <h5>Our Categories</h5>
	    <ul class="widget-list">
	      <li><a href="#">Responsive</a></li>
	      <li><a href="#">Web Design</a></li>
	      <li><a href="#">Illustrations</a></li>
	      <li><a href="#">Typography</a></li>
	      <li><a href="#">Project Snippets</a></li>
	    </ul>
	  </div>

	  <div class="widgets">
	    <h5>Latest Posts</h5>
	    <br>
	    <ul class="block-grid three-up">
	        <li><a href="#" data-width="90" title="Futuristic Glasses" class="th has-tip tip-top"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/pop-1.jpg" alt="pop"></a></li>
	        <li><a href="#" data-width="90" title="Living Room" class="th has-tip tip-top"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/pop-2.jpg" alt="pop"></a></li>
	        <li><a href="#" data-width="90" title="Futuristic Bird" class="th has-tip tip-top"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/pop-3.jpg" alt="pop"></a></li>
	        <li><a href="#" data-width="90" title="Fire-Fox" class="th has-tip tip-top"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/pop-4.jpg" alt="pop"></a></li>
	        <li><a href="#" data-width="90" title="Awwward Mag" class="th has-tip tip-top"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/pop-5.jpg" alt="pop"></a></li>
	        <li><a href="#" data-width="90" title="Misc" class="th has-tip tip-top"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog/pop-6.jpg" alt="pop"></a></li>
	      </ul>
	  </div>
	  <div class="widgets">
	    <h5>Videos</h5>
	    <br>
	      <div class="flex-video widescreen vimeo">
	        <iframe src="http://player.vimeo.com/video/31136236?title=0&amp;byline=0&amp;portrait=0&amp;color=ff3579" width="220" height="124" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	      </div>
	      <strong><a href="#">A Sweet Vimeo Video</a></strong>
	  </div>

	   <div class="widgets">
	    <h5>Our Text</h5>
	   <p>Huge Trees and You: How to live in a giant tree.This is a website for people who live in gigantic trees. Learn about</p>
	  </div>
	</div>
</aside>

<?php endif; ?>
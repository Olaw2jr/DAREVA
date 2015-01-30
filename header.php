<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "body" tag.
 *
 * @package WordPress
 * @subpackage DAREVA
 * @since DAREVA 1.0
 */
?><!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>	<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>	<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />
  
  	<link rel="profile" href="http://gmpg.org/xfn/11">
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/sequencejs-theme.modern-slide-in.ie.css" />
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body>

<div class="nav-container">
  <div class="row">
    <div class="twelve columns">
      <nav class="top-bar">
        <ul>
          <!-- Title Area -->
          <li class="name">
            <h1>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt="logo">
              </a>
            </h1>
          </li>
          <li class="toggle-topbar"><a href="#"></a></li>
        </ul>

        <?php if ( has_nav_menu( 'primary' ) ) : ?>
          <section>
              <!-- Right Nav Section -->
            <?php
              // Primary navigation menu.
              wp_nav_menu( array(
                'menu_class'     => 'right',
                'theme_location' => 'primary',
              ) );
            ?>
          </section><!-- .Right Nav Section -->
        <?php endif; ?>

      </nav>
    </div>
  </div>
</div> <!-- end nav-container -->

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
	<link rel="profile" href="<?php echo esc_url( get_template_directory_uri() ); ?>/http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php echo esc_url( get_template_directory_uri() ); ?>/<?php bloginfo( 'pingback_url' ); ?>">

	<title>Fire Studio</title>
	
  <!-- Social icon fonts -->
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/social_foundicons.css" />
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/general_enclosed_foundicons.css" />
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/general_foundicons.css" />
  
  <!-- Google fonts -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/fonts.css" />

	<!-- Included CSS Files -->
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/sequencejs-theme.modern-slide-in.css" />
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" />

	<script src="js/foundation/modernizr.foundation.js"></script>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/sequencejs-theme.modern-slide-in.ie.css" />
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body>
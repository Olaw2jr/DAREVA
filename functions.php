<?php
/**
 * DAREVA functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage DAREVA
 * @since DAREVA 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since DAREVA 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 848;
}
/**
 * 
 * Define theme constants.
 * 
 */
define( 'THEMEROOT', get_stylesheet_directory_uri() );
define( 'IMAGES', THEMEROOT . '/images' );
define( 'SCRIPTS', THEMEROOT . '/assets/js' );

/**
 * DAREVA only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'dareva_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since DAREVA 1.0
 */
function dareva_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on dareva, use a find and replace
	 * to change 'dareva' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'dareva', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 848, 304, true );
	add_image_size( 'dareva-latest', 70, 70, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'dareva' ),
		'social'  => __( 'Social Links Menu', 'dareva' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'audio'
	) );

	$color_scheme  = dareva_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'dareva_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', dareva_fonts_url() ) );
}
endif; // dareva_setup
add_action( 'after_setup_theme', 'dareva_setup' );

/**
 * Register widget area.
 *
 * @since DAREVA 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function dareva_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'dareva' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'dareva' ),
		'before_widget' => '<div id="%1$s"  class="widgets %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5><br>',
	) );
}
add_action( 'widgets_init', 'dareva_widgets_init' );

if ( ! function_exists( 'dareva_fonts_url' ) ) :
/**
 * Register Google fonts for DAREVA.
 *
 * @since DAREVA 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function dareva_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Noto Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'dareva' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/* translators: If there are characters in your language that are not supported by Noto Serif, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'dareva' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'dareva' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/* translators: To add an additional character subset specific to your language, translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language. */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'dareva' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), '//fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Enqueue scripts and styles.
 *
 * @since DAREVA 1.0
 */
function dareva_scripts() {
	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/assets/css/dareva.css', array(), '3.2' );

// Register style
	// Social icon fonts 
	wp_register_style( 'social_foundicons', THEMEROOT . '/assets/css/social_foundicons.css');
	wp_register_style( 'general_enclosed_foundicons', THEMEROOT . '/assets/css/general_enclosed_foundicons.css');
	wp_register_style( 'general_foundicons', THEMEROOT . '/assets/css/general_foundicons.css');
	  
	// Google fonts 
	wp_register_style( 'font', THEMEROOT . '/assets/css/fonts.css');

	// Included CSS Files 
	wp_register_style( 'sequencejs-theme', THEMEROOT . '/assets/css/sequencejs-theme.modern-slide-in.css');
	wp_register_style( 'dareva', THEMEROOT . '/assets/css/style.css');

// Load the stylesheets
	wp_enqueue_style( 'social_foundicons' );
	wp_enqueue_style( 'general_enclosed_foundicons' );
	wp_enqueue_style( 'general_foundicons' );
	wp_enqueue_style( 'font' );
	wp_enqueue_style( 'sequencejs-theme' );
	wp_enqueue_style( 'dareva' );

// Register scripts

	wp_register_script( 'modernizr.foundation', SCRIPTS . '/foundation/modernizr.foundation.js', array( 'jquery' ), false, false );

	// Included JS Files (Uncompressed)

  	wp_register_script( 'isotope', SCRIPTS . '/isotope.js', array( 'jquery' ), false, true );
  	wp_register_script( 'sequence.jquery-min', SCRIPTS . '/sequence.jquery-min.js', array( 'jquery' ), false, true );
  	wp_register_script( 'jquery.hoverdir', SCRIPTS . '/jquery.hoverdir.js', array( 'jquery' ), false, true );
  	wp_register_script( 'twitter', SCRIPTS . '/twitter.js', array( 'jquery' ), false, true );

	wp_register_script( 'foundation.tabs', SCRIPTS . '/foundation/jquery.foundation.tabs.js', array( 'jquery' ), false, true );
	wp_register_script( 'foundation.tooltips', SCRIPTS . '/foundation/jquery.foundation.tooltips.js', array( 'jquery' ), false, true );
	wp_register_script( 'foundation.reveal', SCRIPTS . '/foundation/jquery.foundation.reveal.js', array( 'jquery' ), false, true );
	wp_register_script( 'foundation.mediaQueryToggle', SCRIPTS . '/foundation/jquery.foundation.mediaQueryToggle.js', array( 'jquery' ), false, true );
	wp_register_script( 'foundation.buttons', SCRIPTS . '/foundation/jquery.foundation.buttons.js', array( 'jquery' ), false, true );
	wp_register_script( 'foundation.forms', SCRIPTS . '/foundation/jquery.foundation.forms.js', array( 'jquery' ), false, true );
	wp_register_script( 'foundation.navigation', SCRIPTS . '/foundation/jquery.foundation.navigation.js', array( 'jquery' ), false, true );
	wp_register_script( 'foundation.orbit', SCRIPTS . '/foundation/jquery.foundation.orbit.js', array( 'jquery' ), false, true );
	wp_register_script( 'foundation.alerts', SCRIPTS . '/foundation/jquery.foundation.alerts.js', array( 'jquery' ), false, true );
	wp_register_script( 'jquery.placeholder', SCRIPTS . '/foundation/jquery.placeholder.js', array( 'jquery' ), false, true );
	wp_register_script( 'foundation.topbar', SCRIPTS . '/foundation/jquery.foundation.topbar.js', array( 'jquery' ), false, true );
	wp_register_script( 'foundation.accordion', SCRIPTS . '/foundation/jquery.foundation.accordion.js', array( 'jquery' ), false, true );

	// Application Javascript, safe to override 
  	wp_register_script( 'dareva', SCRIPTS . '/foundation/app.js', array( 'jquery' ), false, true );

  	wp_enqueue_script('isotope');
	wp_enqueue_script('sequence.jquery-min');
	wp_enqueue_script('jquery.hoverdir');
	wp_enqueue_script('twitter');
	wp_enqueue_script('foundation.tabs');
	wp_enqueue_script('foundation.tooltips');
	wp_enqueue_script('foundation.reveal');
	wp_enqueue_script('foundation.mediaQueryToggle');
	wp_enqueue_script('foundation.buttons');
	wp_enqueue_script('foundation.forms');
	wp_enqueue_script('foundation.navigation');
	wp_enqueue_script('foundation.orbit');
	wp_enqueue_script('foundation.alerts');
	wp_enqueue_script('jquery.placeholder');
	wp_enqueue_script('foundation.topbar');
	wp_enqueue_script('foundation.accordion');
	wp_enqueue_script('dareva');
}
add_action( 'wp_enqueue_scripts', 'dareva_scripts' );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since DAREVA 1.0
 *
 * @see wp_add_inline_style()
 */
function dareva_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'dareva-style', $css );
}
add_action( 'wp_enqueue_scripts', 'dareva_post_nav_background' );

/**
 * Display descriptions in main navigation.
 *
 * @since DAREVA 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function dareva_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'dareva_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since DAREVA 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function dareva_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'dareva_search_form_modify' );

/**
 * Implement the Custom Header feature.
 *
 * @since DAREVA 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since DAREVA 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since DAREVA 1.0
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customized Widgets.
 *
 * @since DAREVA 1.0
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Add Register Custom Widgets.
 *
 * @since DAREVA 1.0
 */
add_action( 'widgets_init', 'dareva_load_widgets' );
function dareva_load_widgets() {
	register_widget( 'Dareva_Latest_Posts' );
	register_widget( 'Dareva_Categories' );
}
<?php
/**
 * DAREVA back compat functionality
 *
 * Prevents DAREVA from running on WordPress versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 *
 * @package WordPress
 * @subpackage DAREVA
 * @since DAREVA 1.0
 */

/**
 * Prevent switching to DAREVA on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since DAREVA 1.0
 */
function dareva_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'dareva_upgrade_notice' );
}
add_action( 'after_switch_theme', 'dareva_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * DAREVA on WordPress versions prior to 4.1.
 *
 * @since DAREVA 1.0
 */
function dareva_upgrade_notice() {
	$message = sprintf( __( 'DAREVA requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'dareva' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 4.1.
 *
 * @since DAREVA 1.0
 */
function dareva_customize() {
	wp_die( sprintf( __( 'DAREVA requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'dareva' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'dareva_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 4.1.
 *
 * @since DAREVA 1.0
 */
function dareva_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'DAREVA requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'dareva' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'dareva_preview' );

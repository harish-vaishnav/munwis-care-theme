<?php
/**
 * Theme functions and definitions
 *
 * @package MunwisTheme
 */

// Fallback removed in favor of native Meta Boxes

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * PSR-4 Autoloader
 * 
 * Automatically loads classes from the 'classes' directory
 * based on the MunwisTheme namespace.
 */
spl_autoload_register( function ( $class ) {
	// Project-specific namespace prefix
	$prefix = 'MunwisTheme\\';

	// Base directory for the namespace prefix
	$base_dir = __DIR__ . '/classes/';

	// Does the class use the namespace prefix?
	$len = strlen( $prefix );
	if ( strncmp( $prefix, $class, $len ) !== 0 ) {
		// no, move to the next registered autoloader
		return;
	}

	// Get the relative class name
	$relative_class = substr( $class, $len );

	// Replace the namespace prefix with the base directory, replace namespace
	// separators with directory separators in the relative class name, append
	// with .php
	$file = $base_dir . str_replace( '\\', '/', $relative_class ) . '.php';

	// If the file exists, require it
	if ( file_exists( $file ) ) {
		require $file;
	}
} );

/**
 * Initialize the Theme
 */
function munwis_theme_init() {
	// Ensure the core Theme class exists before initializing
	if ( class_exists( 'MunwisTheme\\Theme' ) ) {
		\MunwisTheme\Theme::get_instance();
	}
}
add_action( 'after_setup_theme', 'munwis_theme_init', 0 );

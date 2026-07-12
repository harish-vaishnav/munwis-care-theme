<?php
namespace MunwisTheme\Setup;

/**
 * Theme Support Class
 * 
 * Handles core WordPress theme features like title tags, HTML5, etc.
 */
class ThemeSupport {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'after_setup_theme', [ $this, 'setup' ] );
	}

	/**
	 * Register theme supports
	 */
	public function setup() {
		// Load translation files
		load_theme_textdomain( 'munwis-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Switch default core markup to output valid HTML5.
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			]
		);

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			[
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			]
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Register default menus
		register_nav_menus(
			[
				'primary-left'  => esc_html__( 'Primary Menu (Left)', 'munwis-theme' ),
				'primary-right' => esc_html__( 'Primary Menu (Right)', 'munwis-theme' ),
				'footer'        => esc_html__( 'Footer Menu', 'munwis-theme' ),
			]
		);

		add_filter( 'nav_menu_link_attributes', [ $this, 'add_nav_link_class' ], 10, 3 );
	}

	/**
	 * Add nav-link class to menu anchors
	 */
	public function add_nav_link_class( $atts, $item, $args ) {
		if ( isset( $args->theme_location ) && in_array( $args->theme_location, [ 'primary-left', 'primary-right' ] ) ) {
			if ( empty( $atts['class'] ) ) {
				$atts['class'] = 'nav-link';
			} else {
				$atts['class'] .= ' nav-link';
			}
		}
		return $atts;
	}
}

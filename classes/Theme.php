<?php
namespace MunwisTheme;

/**
 * Main Theme Bootstrap Class
 * 
 * Uses the Singleton pattern to ensure only one instance of the theme runs.
 */
class Theme {

	/**
	 * Instance of the class
	 *
	 * @var Theme
	 */
	private static $instance = null;

	/**
	 * Get the singleton instance
	 *
	 * @return Theme
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Constructor
	 */
	private function __construct() {
		$this->define_constants();
		$this->init_components();
	}

	/**
	 * Define theme constants
	 */
	private function define_constants() {
		// Use filemtime for dev cache-busting
		$version = file_exists( get_template_directory() . '/style.css' ) ? filemtime( get_template_directory() . '/style.css' ) : '1.0.1';
		define( 'MUNWIS_THEME_VERSION', $version );
		define( 'MUNWIS_THEME_DIR', get_template_directory() );
		define( 'MUNWIS_THEME_URI', get_template_directory_uri() );
	}

	/**
	 * Initialize theme components
	 */
	private function init_components() {
		// Initialize Theme Support (Title tag, HTML5, etc)
		new Setup\ThemeSupport();

		// Initialize Customizer
		new Customizer\Setup();
		new Customizer\CSSGenerator();

		// Initialize Assets
		new Assets\Enqueue();

		// Setup Admin Meta Boxes
		new Admin\MetaBoxes();

		// Carbon Fields removed in favor of WordPress Customizer
		// Register Custom Post Types
		new PostTypes\Registrar();

		// Hook SEO functionality
		add_action( 'wp_head', [ 'MunwisTheme\SEO\Breadcrumbs', 'schema' ] );

		// Initialize Security Hardening
		new Security\Hardening();
	}
}

<?php
namespace MunwisTheme\Assets;

/**
 * Enqueue Class
 * 
 * Handles enqueuing of frontend and backend scripts and styles.
 */
class Enqueue {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_frontend_assets' ] );
		add_action( 'enqueue_block_editor_assets', [ $this, 'enqueue_editor_assets' ] );
	}

	/**
	 * Enqueue frontend scripts and styles
	 */
	public function enqueue_frontend_assets() {
		$theme_version = defined( 'MUNWIS_THEME_VERSION' ) ? MUNWIS_THEME_VERSION : time();

		// Core theme stylesheet
		wp_enqueue_style(
			'munwis-style',
			get_stylesheet_uri(),
			[],
			$theme_version
		);

		// Preconnect to Google Fonts
		wp_enqueue_style( 'google-fonts-preconnect-1', 'https://fonts.googleapis.com', [], null );
		wp_enqueue_style( 'google-fonts-preconnect-2', 'https://fonts.gstatic.com', [], null );
		wp_style_add_data( 'google-fonts-preconnect-2', 'crossorigin', true );

		// Load Google Fonts (Inter is just an example default, ideally this is dynamic)
		wp_enqueue_style(
			'munwis-fonts',
			'https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700;800&family=Petit+Formal+Script&display=swap',
			[],
			null
		);

		// Load FontAwesome
		wp_enqueue_style(
			'font-awesome',
			'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
			[],
			'6.4.0'
		);

		// Load Swiper CSS
		wp_enqueue_style(
			'swiper-css',
			'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
			[],
			'11.0.0'
		);

		// Load Swiper JS
		wp_enqueue_script(
			'swiper-js',
			'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
			[],
			'11.0.0',
			true // Load in footer
		);

		// Core theme script
		wp_enqueue_script(
			'munwis-script',
			get_template_directory_uri() . '/assets/js/main.js',
			[ 'swiper-js' ], // Depend on Swiper
			$theme_version,
			true // Load in footer
		);

		// Localize script for AJAX
		wp_localize_script( 'munwis-script', 'munwisData', [
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'munwis_nonce' ),
		] );
	}

	/**
	 * Enqueue Gutenberg editor scripts and styles
	 */
	public function enqueue_editor_assets() {
		// Editor specific styles
	}
}

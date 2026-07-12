<?php
namespace MunwisTheme\Customizer;

/**
 * CSS Generator Class
 * 
 * Outputs Customizer settings as CSS variables in the site header.
 */
class CSSGenerator {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'wp_head', [ $this, 'generate_css' ], 100 );
	}

	/**
	 * Generate inline CSS variables based on Customizer settings
	 */
	public function generate_css() {
		$primary_color   = get_theme_mod( 'munwis_primary_color', '#004A7F' );
		$secondary_color = get_theme_mod( 'munwis_secondary_color', '#4CAF50' );
		$text_color      = get_theme_mod( 'munwis_text_color', '#333333' );
		$container_width = get_theme_mod( 'munwis_container_width', 1240 );
		$body_font       = get_theme_mod( 'munwis_body_font', 'Inter' );

		// Ensure sensible defaults if empty
		$primary_color   = $primary_color ? $primary_color : '#004A7F';
		$secondary_color = $secondary_color ? $secondary_color : '#4CAF50';
		$text_color      = $text_color ? $text_color : '#333333';
		$container_width = $container_width ? absint( $container_width ) : 1240;
		$body_font       = $body_font ? esc_html( $body_font ) : 'Inter';

		echo '<style id="munwis-theme-customizer-css">';
		echo ':root {';
		echo "--primary-color: {$primary_color};";
		echo "--secondary-color: {$secondary_color};";
		echo "--text-color: {$text_color};";
		echo "--container-max-width: {$container_width}px;";
		echo "--body-font: '{$body_font}', sans-serif;";
		echo '}';
		echo '</style>';
	}
}

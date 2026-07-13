<?php
namespace MunwisTheme\Customizer;

/**
 * Customizer Setup Class
 * 
 * Registers panels, sections, and settings for the global theme Customizer.
 */
class Setup {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'customize_register', [ $this, 'register' ] );
	}

	/**
	 * Register Customizer settings
	 *
	 * @param \WP_Customize_Manager $wp_customize WP Customize object.
	 */
	public function register( $wp_customize ) {
		$this->register_homepage_settings( $wp_customize );
		$this->register_brand_settings( $wp_customize );
		$this->register_color_settings( $wp_customize );
		$this->register_typography_settings( $wp_customize );
		$this->register_layout_settings( $wp_customize );
		$this->register_social_settings( $wp_customize );
		$this->register_form_settings( $wp_customize );
	}

	/**
	 * Homepage Settings
	 */
	private function register_homepage_settings( $wp_customize ) {
		$wp_customize->add_panel( 'munwis_frontpage_edit_panel', [
			'title'       => __( '⭐ Edit Homepage Content', 'munwis-theme' ),
			'description' => __( 'Edit the text and content of your front page.', 'munwis-theme' ),
			'priority'    => 15,
		] );

		// Section: Hero
		$wp_customize->add_section( 'munwis_home_hero', [
			'title' => __( 'Hero Section', 'munwis-theme' ),
			'panel' => 'munwis_frontpage_edit_panel',
		] );

		// Hero Kicker
		$wp_customize->add_setting( 'munwis_hero_kicker', [
			'default' => 'On-Call 24 Hours a Day, 7 Days a Week',
			'sanitize_callback' => 'sanitize_text_field',
		] );
		$wp_customize->add_control( 'munwis_hero_kicker', [
			'label' => __( 'Eyebrow text above title', 'munwis-theme' ),
			'section' => 'munwis_home_hero',
			'type' => 'text',
		] );

		// Hero Title Main
		$wp_customize->add_setting( 'munwis_hero_title_main', [
			'default' => 'Compassion. Quality. ',
			'sanitize_callback' => 'sanitize_text_field',
		] );
		$wp_customize->add_control( 'munwis_hero_title_main', [
			'label' => __( 'Main Title Part 1', 'munwis-theme' ),
			'section' => 'munwis_home_hero',
			'type' => 'text',
		] );

		// Hero Title Accent
		$wp_customize->add_setting( 'munwis_hero_title_accent', [
			'default' => 'Trust.',
			'sanitize_callback' => 'sanitize_text_field',
		] );
		$wp_customize->add_control( 'munwis_hero_title_accent', [
			'label' => __( 'Main Title Accent Word (Cursive)', 'munwis-theme' ),
			'section' => 'munwis_home_hero',
			'type' => 'text',
		] );

		// Hero Lead Paragraph
		$wp_customize->add_setting( 'munwis_hero_lead', [
			'default' => "Munwi's Care connects certified, reliable clinical professionals with hospitals, nursing environments, and private residential communities — whenever the need arises.",
			'sanitize_callback' => 'wp_kses_post',
		] );
		$wp_customize->add_control( 'munwis_hero_lead', [
			'label' => __( 'Lead Paragraph', 'munwis-theme' ),
			'section' => 'munwis_home_hero',
			'type' => 'textarea',
		] );
	}

	/**
	 * Brand Settings (Logos, Contact info, etc.)
	 */
	private function register_brand_settings( $wp_customize ) {
		$wp_customize->add_panel( 'munwis_brand_panel', [
			'title'       => __( 'Brand & Identity', 'munwis-theme' ),
			'description' => __( 'Manage your logos and contact information.', 'munwis-theme' ),
			'priority'    => 20,
		] );

		// Section: Logos
		$wp_customize->add_section( 'munwis_logos_section', [
			'title' => __( 'Logos', 'munwis-theme' ),
			'panel' => 'munwis_brand_panel',
		] );

		// Setting: Header Logo
		$wp_customize->add_setting( 'munwis_header_logo', [
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		] );
		$wp_customize->add_control( new \WP_Customize_Image_Control( $wp_customize, 'munwis_header_logo', [
			'label'    => __( 'Header Logo', 'munwis-theme' ),
			'section'  => 'munwis_logos_section',
			'settings' => 'munwis_header_logo',
		] ) );

		// Setting: Secondary Logo
		$wp_customize->add_setting( 'munwis_secondary_logo', [
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		] );
		$wp_customize->add_control( new \WP_Customize_Image_Control( $wp_customize, 'munwis_secondary_logo', [
			'label'    => __( 'Secondary Logo (Dark)', 'munwis-theme' ),
			'section'  => 'munwis_logos_section',
			'settings' => 'munwis_secondary_logo',
		] ) );

		// Setting: Footer Logo
		$wp_customize->add_setting( 'munwis_footer_logo', [
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		] );
		$wp_customize->add_control( new \WP_Customize_Image_Control( $wp_customize, 'munwis_footer_logo', [
			'label'    => __( 'Footer Logo', 'munwis-theme' ),
			'section'  => 'munwis_logos_section',
			'settings' => 'munwis_footer_logo',
		] ) );

		// Section: Footer Banner
		$wp_customize->add_section( 'munwis_footer_banner_section', [
			'title' => __( 'Global Footer Banner', 'munwis-theme' ),
			'panel' => 'munwis_brand_panel',
		] );

		// Setting: Footer Banner Image
		$wp_customize->add_setting( 'munwis_footer_banner_image', [
			'default'           => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=300&q=80',
			'sanitize_callback' => 'esc_url_raw',
		] );
		$wp_customize->add_control( new \WP_Customize_Image_Control( $wp_customize, 'munwis_footer_banner_image', [
			'label'    => __( 'Footer Banner Image (Person)', 'munwis-theme' ),
			'section'  => 'munwis_footer_banner_section',
			'settings' => 'munwis_footer_banner_image',
		] ) );

		// Section: Contact Info
		$wp_customize->add_section( 'munwis_contact_section', [
			'title' => __( 'Contact Information', 'munwis-theme' ),
			'panel' => 'munwis_brand_panel',
		] );

		// Setting: Phone
		$wp_customize->add_setting( 'munwis_contact_phone', [
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		] );
		$wp_customize->add_control( 'munwis_contact_phone', [
			'label'   => __( 'Phone Number', 'munwis-theme' ),
			'section' => 'munwis_contact_section',
			'type'    => 'text',
		] );

		// Setting: Email
		$wp_customize->add_setting( 'munwis_contact_email', [
			'default'           => '',
			'sanitize_callback' => 'sanitize_email',
		] );
		$wp_customize->add_control( 'munwis_contact_email', [
			'label'   => __( 'Email Address', 'munwis-theme' ),
			'section' => 'munwis_contact_section',
			'type'    => 'email',
		] );

		// Setting: Full Address
		$wp_customize->add_setting( 'munwis_contact_address', [
			'default'           => 'Pennsylvania & Surrounding Counties',
			'sanitize_callback' => 'sanitize_text_field',
		] );
		$wp_customize->add_control( 'munwis_contact_address', [
			'label'   => __( 'Full Address / Main Location', 'munwis-theme' ),
			'section' => 'munwis_contact_section',
			'type'    => 'text',
		] );

		// Setting: Short Location (Header)
		$wp_customize->add_setting( 'munwis_contact_location_short', [
			'default'           => 'Local & surrounding counties',
			'sanitize_callback' => 'sanitize_text_field',
		] );
		$wp_customize->add_control( 'munwis_contact_location_short', [
			'label'   => __( 'Short Location (Top Bar)', 'munwis-theme' ),
			'section' => 'munwis_contact_section',
			'type'    => 'text',
		] );

		// Setting: Hours
		$wp_customize->add_setting( 'munwis_contact_hours', [
			'default'           => '24 Hours / 7 Days a Week',
			'sanitize_callback' => 'sanitize_text_field',
		] );
		$wp_customize->add_control( 'munwis_contact_hours', [
			'label'   => __( 'Business Hours', 'munwis-theme' ),
			'section' => 'munwis_contact_section',
			'type'    => 'text',
		] );

		// Setting: Footer Copyright
		$wp_customize->add_setting( 'munwis_footer_copyright', [
			'default'           => '&copy; ' . date('Y') . ' Munwis Care LLC. All Rights Reserved. Healthcare Staffing Solutions. "Compassion. Quality. Trust."',
			'sanitize_callback' => 'wp_kses_post',
		] );
		$wp_customize->add_control( 'munwis_footer_copyright', [
			'label'   => __( 'Footer Copyright Text', 'munwis-theme' ),
			'section' => 'munwis_contact_section',
			'type'    => 'textarea',
		] );
	}

	/**
	 * Color Settings
	 */
	private function register_color_settings( $wp_customize ) {
		$wp_customize->add_section( 'munwis_colors_section', [
			'title'    => __( 'Global Colors', 'munwis-theme' ),
			'priority' => 25,
		] );

		// Primary Color
		$wp_customize->add_setting( 'munwis_primary_color', [
			'default'           => '#004A7F',
			'sanitize_callback' => 'sanitize_hex_color',
		] );
		$wp_customize->add_control( new \WP_Customize_Color_Control( $wp_customize, 'munwis_primary_color', [
			'label'   => __( 'Primary Color', 'munwis-theme' ),
			'section' => 'munwis_colors_section',
		] ) );

		// Secondary Color
		$wp_customize->add_setting( 'munwis_secondary_color', [
			'default'           => '#4CAF50',
			'sanitize_callback' => 'sanitize_hex_color',
		] );
		$wp_customize->add_control( new \WP_Customize_Color_Control( $wp_customize, 'munwis_secondary_color', [
			'label'   => __( 'Secondary Color (Success/Action)', 'munwis-theme' ),
			'section' => 'munwis_colors_section',
		] ) );
		
		// Text Color
		$wp_customize->add_setting( 'munwis_text_color', [
			'default'           => '#333333',
			'sanitize_callback' => 'sanitize_hex_color',
		] );
		$wp_customize->add_control( new \WP_Customize_Color_Control( $wp_customize, 'munwis_text_color', [
			'label'   => __( 'Body Text Color', 'munwis-theme' ),
			'section' => 'munwis_colors_section',
		] ) );
	}

	/**
	 * Typography Settings
	 */
	private function register_typography_settings( $wp_customize ) {
		// Basic stub for typography, a real system would fetch Google Fonts
		$wp_customize->add_section( 'munwis_typography_section', [
			'title'    => __( 'Typography', 'munwis-theme' ),
			'priority' => 30,
		] );

		$wp_customize->add_setting( 'munwis_body_font', [
			'default'           => 'Inter',
			'sanitize_callback' => 'sanitize_text_field',
		] );
		$wp_customize->add_control( 'munwis_body_font', [
			'label'       => __( 'Body Font Family', 'munwis-theme' ),
			'description' => __( 'E.g. Inter, Roboto, Open Sans', 'munwis-theme' ),
			'section'     => 'munwis_typography_section',
			'type'        => 'text',
		] );
	}

	/**
	 * Layout Settings
	 */
	private function register_layout_settings( $wp_customize ) {
		$wp_customize->add_section( 'munwis_layout_section', [
			'title'    => __( 'Layout Options', 'munwis-theme' ),
			'priority' => 35,
		] );

		$wp_customize->add_setting( 'munwis_container_width', [
			'default'           => 1240,
			'sanitize_callback' => 'absint',
		] );
		$wp_customize->add_control( 'munwis_container_width', [
			'label'       => __( 'Container Width (px)', 'munwis-theme' ),
			'section'     => 'munwis_layout_section',
			'type'        => 'number',
		] );
	}

	/**
	 * Social Settings
	 */
	private function register_social_settings( $wp_customize ) {
		$wp_customize->add_section( 'munwis_social_section', [
			'title'    => __( 'Social Media Links', 'munwis-theme' ),
			'priority' => 40,
		] );

		$networks = [
			'facebook'  => 'Facebook',
			'twitter'   => 'Twitter / X',
			'instagram' => 'Instagram',
			'linkedin'  => 'LinkedIn',
		];

		foreach ( $networks as $key => $label ) {
			$wp_customize->add_setting( "munwis_social_{$key}", [
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			] );
			$wp_customize->add_control( "munwis_social_{$key}", [
				'label'   => $label,
				'section' => 'munwis_social_section',
				'type'    => 'url',
			] );
		}
	}

	/**
	 * Form Settings
	 */
	private function register_form_settings( $wp_customize ) {
		$wp_customize->add_section( 'munwis_forms_section', [
			'title'    => __( 'Form Shortcodes', 'munwis-theme' ),
			'description' => __( 'Paste your Contact Form 7 shortcodes here.', 'munwis-theme' ),
			'priority' => 45,
		] );

		// Home Page Form
		$wp_customize->add_setting( 'munwis_home_form', [
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		] );
		$wp_customize->add_control( 'munwis_home_form', [
			'label'   => __( 'Home Page Form Shortcode', 'munwis-theme' ),
			'section' => 'munwis_forms_section',
			'type'    => 'text',
		] );

		// Contact Page Form
		$wp_customize->add_setting( 'munwis_contact_form', [
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		] );
		$wp_customize->add_control( 'munwis_contact_form', [
			'label'   => __( 'Contact Page Form Shortcode', 'munwis-theme' ),
			'section' => 'munwis_forms_section',
			'type'    => 'text',
		] );

		// Careers Page Form
		$wp_customize->add_setting( 'munwis_careers_form', [
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		] );
		$wp_customize->add_control( 'munwis_careers_form', [
			'label'   => __( 'Careers Page Form Shortcode', 'munwis-theme' ),
			'section' => 'munwis_forms_section',
			'type'    => 'text',
		] );

		// Single Service Page Form
		$wp_customize->add_setting( 'munwis_service_form', [
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		] );
		$wp_customize->add_control( 'munwis_service_form', [
			'label'   => __( 'Single Service Page Form Shortcode', 'munwis-theme' ),
			'section' => 'munwis_forms_section',
			'type'    => 'text',
		] );

		// About Page Form
		$wp_customize->add_setting( 'munwis_about_form', [
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		] );
		$wp_customize->add_control( 'munwis_about_form', [
			'label'   => __( 'About Page Form Shortcode', 'munwis-theme' ),
			'section' => 'munwis_forms_section',
			'type'    => 'text',
		] );

		// Services Listing Page Form
		$wp_customize->add_setting( 'munwis_services_form', [
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		] );
		$wp_customize->add_control( 'munwis_services_form', [
			'label'   => __( 'Our Services (Main) Page Form Shortcode', 'munwis-theme' ),
			'section' => 'munwis_forms_section',
			'type'    => 'text',
		] );
	}
}

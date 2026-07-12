<?php
namespace MunwisTheme\CarbonFields;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class OptionsPage {
	public function __construct() {
		add_action( 'carbon_fields_register_fields', [ $this, 'register_options_pages' ] );
	}

	public function register_options_pages() {
		Container::make( 'theme_options', __( 'Theme Options', 'munwis-theme' ) )
			->set_page_menu_position( 60 )
			->set_icon( 'dashicons-admin-generic' )
			->add_tab( __( 'Brand & Identity', 'munwis-theme' ), [
				Field::make( 'image', 'opt_logo', __( 'Primary Logo', 'munwis-theme' ) )
					->set_value_type( 'url' ),
				Field::make( 'image', 'opt_logo_sticky', __( 'Sticky Logo', 'munwis-theme' ) )
					->set_value_type( 'url' ),
			] )
			->add_tab( __( 'Business Information', 'munwis-theme' ), [
				Field::make( 'text', 'opt_company_name', __( 'Company Name', 'munwis-theme' ) ),
				Field::make( 'text', 'opt_phone', __( 'Phone Number', 'munwis-theme' ) ),
				Field::make( 'text', 'opt_email', __( 'Email Address', 'munwis-theme' ) )
					->set_attribute( 'type', 'email' ),
				Field::make( 'textarea', 'opt_address', __( 'Address', 'munwis-theme' ) )
					->set_rows( 3 ),
				Field::make( 'text', 'opt_hours', __( 'Opening Hours', 'munwis-theme' ) ),
				Field::make( 'textarea', 'opt_map', __( 'Google Map Embed HTML', 'munwis-theme' ) ),
			] )
			->add_tab( __( 'Social Media', 'munwis-theme' ), [
				Field::make( 'text', 'opt_facebook', 'Facebook URL' ),
				Field::make( 'text', 'opt_instagram', 'Instagram URL' ),
				Field::make( 'text', 'opt_linkedin', 'LinkedIn URL' ),
				Field::make( 'text', 'opt_twitter', 'Twitter/X URL' ),
				Field::make( 'text', 'opt_youtube', 'YouTube URL' ),
			] )
			->add_tab( __( 'Layout & Toggles', 'munwis-theme' ), [
				Field::make( 'checkbox', 'opt_breadcrumbs', __( 'Enable Breadcrumbs', 'munwis-theme' ) )
					->set_default_value( 'yes' ),
				Field::make( 'checkbox', 'opt_back_to_top', __( 'Enable Back To Top', 'munwis-theme' ) )
					->set_default_value( 'yes' ),
				Field::make( 'checkbox', 'opt_whatsapp', __( 'Enable WhatsApp Button', 'munwis-theme' ) ),
			] )
			->add_tab( __( 'Footer Settings', 'munwis-theme' ), [
				Field::make( 'textarea', 'opt_footer_copyright', __( 'Footer Copyright', 'munwis-theme' ) )
					->set_rows( 2 ),
				Field::make( 'text', 'opt_footer_cta_heading', __( 'Footer CTA Heading', 'munwis-theme' ) ),
				Field::make( 'textarea', 'opt_footer_cta_desc', __( 'Footer CTA Description', 'munwis-theme' ) ),
			] );
	}
}

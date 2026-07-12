<?php
namespace MunwisTheme\CarbonFields;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class HomepageFields {
	public function __construct() {
		add_action( 'carbon_fields_register_fields', [ $this, 'register_homepage_fields' ] );
	}

	public function register_homepage_fields() {
		$front_page_id = get_option( 'page_on_front' );
		
		$container = Container::make( 'post_meta', __( 'Homepage Content', 'munwis-theme' ) )
			->where( 'post_type', '=', 'page' );
			
		if ( $front_page_id ) {
			$container->where( 'post_id', '=', $front_page_id );
		}

		$container
			// Tab: Hero
			->add_tab( __( 'Hero Section', 'munwis-theme' ), [
				Field::make( 'checkbox', 'home_enable_hero', __( 'Enable Hero Section', 'munwis-theme' ) )
					->set_default_value( 'yes' ),
				Field::make( 'text', 'home_hero_kicker', __( 'Small Heading', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_hero', 'value' => true ] ] ),
				Field::make( 'text', 'home_hero_title', __( 'Main Heading', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_hero', 'value' => true ] ] ),
				Field::make( 'textarea', 'home_hero_desc', __( 'Description', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_hero', 'value' => true ] ] ),
				Field::make( 'image', 'home_hero_image', __( 'Hero Image', 'munwis-theme' ) )
					->set_value_type( 'id' )
					->set_conditional_logic( [ [ 'field' => 'home_enable_hero', 'value' => true ] ] ),
				Field::make( 'text', 'home_hero_btn1_text', __( 'Primary Button Text', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_hero', 'value' => true ] ] ),
				Field::make( 'text', 'home_hero_btn1_url', __( 'Primary Button URL', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_hero', 'value' => true ] ] ),
				Field::make( 'text', 'home_hero_btn2_text', __( 'Secondary Button Text', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_hero', 'value' => true ] ] ),
				Field::make( 'text', 'home_hero_btn2_url', __( 'Secondary Button URL', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_hero', 'value' => true ] ] ),
				Field::make( 'complex', 'home_hero_stats', __( 'Statistics', 'munwis-theme' ) )
					->add_fields( [
						Field::make( 'text', 'number', __( 'Number/Value', 'munwis-theme' ) ),
						Field::make( 'text', 'label', __( 'Label', 'munwis-theme' ) ),
					] )
					->set_max( 3 )
					->set_conditional_logic( [ [ 'field' => 'home_enable_hero', 'value' => true ] ] ),
			] )

			// Tab: Promo Cards
			->add_tab( __( 'Promo Cards', 'munwis-theme' ), [
				Field::make( 'checkbox', 'home_enable_promo', __( 'Enable Promo Cards', 'munwis-theme' ) )
					->set_default_value( 'yes' ),
				Field::make( 'complex', 'home_promo_cards', __( 'Cards', 'munwis-theme' ) )
					->add_fields( [
						Field::make( 'text', 'icon_class', __( 'FontAwesome Class (e.g. fa-solid fa-user-nurse)', 'munwis-theme' ) ),
						Field::make( 'text', 'title', __( 'Title', 'munwis-theme' ) ),
						Field::make( 'textarea', 'description', __( 'Description', 'munwis-theme' ) ),
						Field::make( 'text', 'btn_text', __( 'Button Text', 'munwis-theme' ) ),
						Field::make( 'text', 'btn_url', __( 'Button URL', 'munwis-theme' ) ),
						Field::make( 'select', 'color', __( 'Background Color', 'munwis-theme' ) )
							->add_options( [
								'leaf' => 'Leaf Green',
								'teal' => 'Teal',
								'navy' => 'Navy',
							] ),
					] )
					->set_max( 2 )
					->set_conditional_logic( [ [ 'field' => 'home_enable_promo', 'value' => true ] ] ),
			] )

			// Tab: About
			->add_tab( __( 'About Section', 'munwis-theme' ), [
				Field::make( 'checkbox', 'home_enable_about', __( 'Enable About Section', 'munwis-theme' ) )
					->set_default_value( 'yes' ),
				Field::make( 'text', 'home_about_eyebrow', __( 'Eyebrow', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_about', 'value' => true ] ] ),
				Field::make( 'text', 'home_about_heading', __( 'Heading', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_about', 'value' => true ] ] ),
				Field::make( 'rich_text', 'home_about_content', __( 'Content', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_about', 'value' => true ] ] ),
				Field::make( 'image', 'home_about_image', __( 'Image', 'munwis-theme' ) )
					->set_value_type( 'id' )
					->set_conditional_logic( [ [ 'field' => 'home_enable_about', 'value' => true ] ] ),
				Field::make( 'complex', 'home_about_features', __( 'Features List', 'munwis-theme' ) )
					->add_fields( [
						Field::make( 'text', 'feature', __( 'Feature Text', 'munwis-theme' ) ),
					] )
					->set_conditional_logic( [ [ 'field' => 'home_enable_about', 'value' => true ] ] ),
				Field::make( 'text', 'home_about_btn_text', __( 'Button Text', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_about', 'value' => true ] ] ),
				Field::make( 'text', 'home_about_btn_url', __( 'Button URL', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_about', 'value' => true ] ] ),
			] )

			// Tab: Why Trust Us
			->add_tab( __( 'Why Choose Us', 'munwis-theme' ), [
				Field::make( 'checkbox', 'home_enable_why', __( 'Enable Section', 'munwis-theme' ) )
					->set_default_value( 'yes' ),
				Field::make( 'text', 'home_why_eyebrow', __( 'Eyebrow', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_why', 'value' => true ] ] ),
				Field::make( 'text', 'home_why_heading', __( 'Heading', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_why', 'value' => true ] ] ),
				Field::make( 'complex', 'home_why_cards', __( 'Feature Cards', 'munwis-theme' ) )
					->add_fields( [
						Field::make( 'text', 'icon', __( 'FontAwesome Icon Class', 'munwis-theme' ) ),
						Field::make( 'text', 'title', __( 'Title', 'munwis-theme' ) ),
						Field::make( 'textarea', 'desc', __( 'Description', 'munwis-theme' ) ),
					] )
					->set_conditional_logic( [ [ 'field' => 'home_enable_why', 'value' => true ] ] ),
			] )

			// Tab: Services
			->add_tab( __( 'Services', 'munwis-theme' ), [
				Field::make( 'checkbox', 'home_enable_services', __( 'Enable Section', 'munwis-theme' ) )
					->set_default_value( 'yes' ),
				Field::make( 'text', 'home_services_eyebrow', __( 'Eyebrow', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_services', 'value' => true ] ] ),
				Field::make( 'text', 'home_services_heading', __( 'Heading', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_services', 'value' => true ] ] ),
				Field::make( 'textarea', 'home_services_desc', __( 'Description', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_services', 'value' => true ] ] ),
				Field::make( 'html', 'home_services_info', __( 'Info', 'munwis-theme' ) )
					->set_html( '<p>Service cards are populated dynamically from the <strong>Services</strong> Custom Post Type.</p>' )
					->set_conditional_logic( [ [ 'field' => 'home_enable_services', 'value' => true ] ] ),
			] )

			// Tab: Depend Section
			->add_tab( __( 'Depend Section', 'munwis-theme' ), [
				Field::make( 'checkbox', 'home_enable_depend', __( 'Enable Section', 'munwis-theme' ) )
					->set_default_value( 'yes' ),
				Field::make( 'text', 'home_depend_eyebrow', __( 'Eyebrow', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_depend', 'value' => true ] ] ),
				Field::make( 'text', 'home_depend_heading', __( 'Heading', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_depend', 'value' => true ] ] ),
				Field::make( 'textarea', 'home_depend_desc', __( 'Description', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_depend', 'value' => true ] ] ),
				Field::make( 'text', 'home_depend_btn_text', __( 'Button Text', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_depend', 'value' => true ] ] ),
				Field::make( 'text', 'home_depend_btn_url', __( 'Button URL', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_depend', 'value' => true ] ] ),
				Field::make( 'image', 'home_depend_image', __( 'Image', 'munwis-theme' ) )
					->set_value_type( 'id' )
					->set_conditional_logic( [ [ 'field' => 'home_enable_depend', 'value' => true ] ] ),
			] )

			// Tab: Process
			->add_tab( __( 'Process', 'munwis-theme' ), [
				Field::make( 'checkbox', 'home_enable_process', __( 'Enable Section', 'munwis-theme' ) )
					->set_default_value( 'yes' ),
				Field::make( 'text', 'home_process_eyebrow', __( 'Eyebrow', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_process', 'value' => true ] ] ),
				Field::make( 'text', 'home_process_heading', __( 'Heading', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_process', 'value' => true ] ] ),
				Field::make( 'complex', 'home_process_steps', __( 'Steps', 'munwis-theme' ) )
					->add_fields( [
						Field::make( 'text', 'num', __( 'Step Number', 'munwis-theme' ) ),
						Field::make( 'text', 'title', __( 'Title', 'munwis-theme' ) ),
						Field::make( 'textarea', 'desc', __( 'Description', 'munwis-theme' ) ),
					] )
					->set_conditional_logic( [ [ 'field' => 'home_enable_process', 'value' => true ] ] ),
			] )

			// Tab: Testimonials
			->add_tab( __( 'Testimonials', 'munwis-theme' ), [
				Field::make( 'checkbox', 'home_enable_testimonials', __( 'Enable Section', 'munwis-theme' ) )
					->set_default_value( 'yes' ),
				Field::make( 'text', 'home_testi_eyebrow', __( 'Eyebrow', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_testimonials', 'value' => true ] ] ),
				Field::make( 'text', 'home_testi_heading', __( 'Heading', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_testimonials', 'value' => true ] ] ),
				Field::make( 'html', 'home_testi_info', __( 'Info', 'munwis-theme' ) )
					->set_html( '<p>Testimonial cards are populated dynamically from the <strong>Testimonials</strong> Custom Post Type.</p>' )
					->set_conditional_logic( [ [ 'field' => 'home_enable_testimonials', 'value' => true ] ] ),
			] )

			// Tab: Where We Work
			->add_tab( __( 'Where We Work', 'munwis-theme' ), [
				Field::make( 'checkbox', 'home_enable_work', __( 'Enable Section', 'munwis-theme' ) )
					->set_default_value( 'yes' ),
				Field::make( 'text', 'home_work_eyebrow', __( 'Eyebrow', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_work', 'value' => true ] ] ),
				Field::make( 'text', 'home_work_heading', __( 'Heading', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_work', 'value' => true ] ] ),
				Field::make( 'image', 'home_work_image', __( 'Image', 'munwis-theme' ) )
					->set_value_type( 'id' )
					->set_conditional_logic( [ [ 'field' => 'home_enable_work', 'value' => true ] ] ),
				Field::make( 'complex', 'home_work_locations', __( 'Locations', 'munwis-theme' ) )
					->add_fields( [
						Field::make( 'text', 'icon', __( 'FontAwesome Icon Class', 'munwis-theme' ) ),
						Field::make( 'text', 'name', __( 'Location Name', 'munwis-theme' ) ),
					] )
					->set_conditional_logic( [ [ 'field' => 'home_enable_work', 'value' => true ] ] ),
			] )

			// Tab: Contact
			->add_tab( __( 'Contact Section', 'munwis-theme' ), [
				Field::make( 'checkbox', 'home_enable_contact', __( 'Enable Section', 'munwis-theme' ) )
					->set_default_value( 'yes' ),
				Field::make( 'text', 'home_contact_eyebrow', __( 'Eyebrow', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_contact', 'value' => true ] ] ),
				Field::make( 'text', 'home_contact_heading', __( 'Heading', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_contact', 'value' => true ] ] ),
				Field::make( 'textarea', 'home_contact_desc', __( 'Description', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_contact', 'value' => true ] ] ),
				Field::make( 'text', 'home_contact_shortcode', __( 'Form Shortcode', 'munwis-theme' ) )
					->set_conditional_logic( [ [ 'field' => 'home_enable_contact', 'value' => true ] ] ),
			] );
	}
}

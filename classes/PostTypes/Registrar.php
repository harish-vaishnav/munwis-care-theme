<?php
namespace MunwisTheme\PostTypes;

/**
 * Registrar Class for Custom Post Types
 * 
 * Registers the necessary custom post types for the theme.
 */
class Registrar {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'init', [ $this, 'register_cpts' ] );
	}

	/**
	 * Register Custom Post Types
	 */
	public function register_cpts() {
		$this->register_services();
		$this->register_portfolio();
		$this->register_testimonials();
	}

	/**
	 * Register Services CPT
	 */
	private function register_services() {
		$labels = [
			'name'               => _x( 'Services', 'Post Type General Name', 'munwis-theme' ),
			'singular_name'      => _x( 'Service', 'Post Type Singular Name', 'munwis-theme' ),
			'menu_name'          => __( 'Services', 'munwis-theme' ),
			'all_items'          => __( 'All Services', 'munwis-theme' ),
			'add_new_item'       => __( 'Add New Service', 'munwis-theme' ),
			'add_new'            => __( 'Add New', 'munwis-theme' ),
			'edit_item'          => __( 'Edit Service', 'munwis-theme' ),
			'update_item'        => __( 'Update Service', 'munwis-theme' ),
			'view_item'          => __( 'View Service', 'munwis-theme' ),
			'search_items'       => __( 'Search Service', 'munwis-theme' ),
		];
		$args = [
			'label'               => __( 'Service', 'munwis-theme' ),
			'description'         => __( 'Theme Services', 'munwis-theme' ),
			'labels'              => $labels,
			'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'page-attributes' ],
			'taxonomies'          => [ 'category', 'post_tag' ],
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 20,
			'menu_icon'           => 'dashicons-hammer',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'show_in_rest'        => true,
		];
		register_post_type( 'service', $args );
	}

	/**
	 * Register Portfolio CPT
	 */
	private function register_portfolio() {
		$labels = [
			'name'               => _x( 'Portfolios', 'Post Type General Name', 'munwis-theme' ),
			'singular_name'      => _x( 'Portfolio', 'Post Type Singular Name', 'munwis-theme' ),
			'menu_name'          => __( 'Portfolio', 'munwis-theme' ),
			'all_items'          => __( 'All Portfolios', 'munwis-theme' ),
			'add_new_item'       => __( 'Add New Portfolio', 'munwis-theme' ),
			'add_new'            => __( 'Add New', 'munwis-theme' ),
			'edit_item'          => __( 'Edit Portfolio', 'munwis-theme' ),
			'update_item'        => __( 'Update Portfolio', 'munwis-theme' ),
			'view_item'          => __( 'View Portfolio', 'munwis-theme' ),
		];
		$args = [
			'label'               => __( 'Portfolio', 'munwis-theme' ),
			'labels'              => $labels,
			'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ],
			'public'              => true,
			'show_ui'             => true,
			'menu_position'       => 21,
			'menu_icon'           => 'dashicons-portfolio',
			'has_archive'         => true,
			'show_in_rest'        => true,
		];
		register_post_type( 'portfolio', $args );
	}

	/**
	 * Register Testimonials CPT
	 */
	private function register_testimonials() {
		$labels = [
			'name'               => _x( 'Testimonials', 'Post Type General Name', 'munwis-theme' ),
			'singular_name'      => _x( 'Testimonial', 'Post Type Singular Name', 'munwis-theme' ),
			'menu_name'          => __( 'Testimonials', 'munwis-theme' ),
			'all_items'          => __( 'All Testimonials', 'munwis-theme' ),
			'add_new_item'       => __( 'Add New Testimonial', 'munwis-theme' ),
			'add_new'            => __( 'Add New', 'munwis-theme' ),
		];
		$args = [
			'label'               => __( 'Testimonial', 'munwis-theme' ),
			'labels'              => $labels,
			'supports'            => [ 'title', 'editor', 'thumbnail' ],
			'public'              => false, // Typically false for single view, true for shortcodes/widgets
			'publicly_queryable'  => false,
			'show_ui'             => true,
			'menu_position'       => 22,
			'menu_icon'           => 'dashicons-testimonial',
			'show_in_rest'        => true,
		];
		register_post_type( 'testimonial', $args );
	}
}

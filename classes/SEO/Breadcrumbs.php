<?php
namespace MunwisTheme\SEO;

/**
 * Breadcrumbs Class
 * 
 * Handles the generation of dynamic breadcrumbs and Schema.org JSON-LD.
 */
class Breadcrumbs {

	/**
	 * Render the breadcrumbs HTML
	 */
	public static function render() {
		// Don't show on front page
		if ( is_front_page() ) {
			return;
		}

		$separator = ' &raquo; ';
		$home      = __( 'Home', 'munwis-theme' );

		echo '<nav class="munwis-breadcrumbs" aria-label="' . esc_attr__( 'Breadcrumbs', 'munwis-theme' ) . '">';
		echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html( $home ) . '</a>';

		if ( is_category() || is_single() ) {
			echo esc_html( $separator );
			$categories = get_the_category();
			if ( ! empty( $categories ) ) {
				$category = $categories[0];
				echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
			}
			if ( is_single() ) {
				echo esc_html( $separator ) . '<span>' . esc_html( get_the_title() ) . '</span>';
			}
		} elseif ( is_page() ) {
			echo esc_html( $separator ) . '<span>' . esc_html( get_the_title() ) . '</span>';
		} elseif ( is_search() ) {
			echo esc_html( $separator ) . '<span>' . sprintf( __( 'Search Results for "%s"', 'munwis-theme' ), get_search_query() ) . '</span>';
		} elseif ( is_404() ) {
			echo esc_html( $separator ) . '<span>' . __( 'Error 404', 'munwis-theme' ) . '</span>';
		}
		
		echo '</nav>';
	}

	/**
	 * Generate Schema.org JSON-LD for Breadcrumbs
	 * Can be hooked into wp_head
	 */
	public static function schema() {
		if ( is_front_page() || ! is_single() ) {
			return;
		}

		$schema = [
			'@context'        => 'https://schema.org',
			'@type'           => 'BreadcrumbList',
			'itemListElement' => [
				[
					'@type'    => 'ListItem',
					'position' => 1,
					'name'     => __( 'Home', 'munwis-theme' ),
					'item'     => home_url( '/' ),
				]
			]
		];

		$categories = get_the_category();
		if ( ! empty( $categories ) ) {
			$schema['itemListElement'][] = [
				'@type'    => 'ListItem',
				'position' => 2,
				'name'     => $categories[0]->name,
				'item'     => get_category_link( $categories[0]->term_id ),
			];
			$schema['itemListElement'][] = [
				'@type'    => 'ListItem',
				'position' => 3,
				'name'     => get_the_title(),
				'item'     => get_permalink(),
			];
		}

		echo '<script type="application/ld+json">';
		echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
		echo '</script>';
	}
}

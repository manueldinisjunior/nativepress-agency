<?php
/**
 * NativePress Agency theme setup.
 *
 * @package NativePressAgency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register theme supports and navigation menus.
 */
function nativepress_agency_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'menus' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'nativepress-agency' ),
		)
	);
}
add_action( 'after_setup_theme', 'nativepress_agency_setup' );

/**
 * Provide a simple fallback menu when no menu is assigned.
 */
function nativepress_agency_primary_menu_fallback() {
	$items = array(
		array(
			'title' => __( 'Home', 'nativepress-agency' ),
			'url'   => home_url( '/' ),
		),
		array(
			'title' => __( 'About', 'nativepress-agency' ),
			'url'   => home_url( '/about/' ),
		),
		array(
			'title' => __( 'Projects', 'nativepress-agency' ),
			'url'   => home_url( '/projects/' ),
		),
		array(
			'title' => __( 'Contact', 'nativepress-agency' ),
			'url'   => home_url( '/contact/' ),
		),
	);

	$menu_html = '<ul class="wp-menu" style="display:flex;gap:1rem;list-style:none;margin:0;padding:0;">';
	foreach ( $items as $item ) {
		$menu_html .= '<li><a href="' . esc_url( $item['url'] ) . '">' . esc_html( $item['title'] ) . '</a></li>';
	}
	$menu_html .= '</ul>';

	return $menu_html;
}

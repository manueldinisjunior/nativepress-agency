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
 * Register theme supports, menus, editor styles, and patterns.
 */
function nativepress_agency_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array( 'height' => 64, 'width' => 64, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'editor-color-palette', array() );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'nativepress' ),
		)
	);
}
add_action( 'after_setup_theme', 'nativepress_agency_setup' );

/**
 * Enqueue theme assets.
 */
function nativepress_agency_enqueue_assets() {
	wp_enqueue_style( 'nativepress-agency-style', get_stylesheet_uri(), array(), '1.0.0' );
	wp_enqueue_script( 'nativepress-agency-script', get_template_directory_uri() . '/assets/js/theme.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'nativepress_agency_enqueue_assets' );

/**
 * Register block patterns.
 */
function nativepress_agency_register_patterns() {
	$pattern_files = array(
		'hero',
		'about',
		'services',
		'case-studies',
		'contact',
		'call-to-action',
	);

	foreach ( $pattern_files as $pattern_file ) {
		$path = get_template_directory() . '/patterns/' . $pattern_file . '.php';
		if ( file_exists( $path ) ) {
			require_once $path;
		}
	}
}
add_action( 'init', 'nativepress_agency_register_patterns' );

/**
 * Provide a simple fallback menu when no menu is assigned.
 */
function nativepress_agency_primary_menu_fallback() {
	$items = array(
		array(
			'title' => __( 'Home', 'nativepress' ),
			'url'   => home_url( '/' ),
		),
		array(
			'title' => __( 'About', 'nativepress' ),
			'url'   => home_url( '/about/' ),
		),
		array(
			'title' => __( 'Services', 'nativepress' ),
			'url'   => home_url( '/services/' ),
		),
		array(
			'title' => __( 'Contact', 'nativepress' ),
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

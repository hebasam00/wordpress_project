<?php
/**
 *  Theme Functions
 *
 *  @package avantex-construction
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( ! function_exists( 'chld_thm_cfg_locale_css' ) ) :
	function chld_thm_cfg_locale_css( $uri ) {
		if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) ) {
			$uri = get_template_directory_uri() . '/rtl.css';
		}
		return $uri;
	}
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( ! function_exists( 'chld_thm_cfg_parent_css' ) ) :
	function chld_thm_cfg_parent_css() {
		wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'twentytwenty-print-style', 'bootstrap-min-css', 'animate-css', 'font-awesome-min-css', 'Swiper-min-css', 'owl-carousel-css', 'odometer-css', 'bxslider-css', 'switcher-css', 'avantex-skin-default' ) );
	}
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

if ( ! function_exists( 'child_theme_configurator_css' ) ) :
	function child_theme_configurator_css() {
		wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'chld_thm_cfg_parent', 'avantex-style-css', 'menu-style-css' ) );
	}
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// Check if plugin Active.
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
if ( is_plugin_active( 'avantex-companion/avantex-companion.php' ) ) {
	function avantex_construction_set_plugins_mods() {
		set_theme_mod( 'avantex-services-image', AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/slider/cons-slide1.jpg' );
		set_theme_mod( 'avantex-callout-image', AVANTEX_COMPANION_PLUGIN_URL . '/inc/avantex/img/slider/cons-slide2.jpg' );
	}
	add_action( 'after_switch_theme', 'avantex_construction_set_plugins_mods' );
}

function avantex_construction_set_theme_mods() {

	set_theme_mod( 'avantex-styling-primary-color', '#fab702' );
	set_theme_mod( 'avantex-styling-dark-color', '#262626' );
	set_theme_mod( 'avantex-services-title', 'Services we Offer' );
	set_theme_mod( 'avantex-services-subtitle', 'Tailored Solutions for Your Unique Needs' );
	set_theme_mod( 'avantex-services-description-color', '#ffff' );
	set_theme_mod( 'avantex-service-details-color', '#ffff' );
	set_theme_mod( 'avantex-service-link-color', '#ffff' );
	set_theme_mod( 'avantex-portfolio-title', 'FEATURED WORK' );
	set_theme_mod( 'avantex-callout-title', 'MAKE IT HAPPEN YOUR DREAM HOME' );
	set_theme_mod( 'avantex-callout-subtitle', 'Experience the magic of collaboration with us' );
}
add_action( 'after_switch_theme', 'avantex_construction_set_theme_mods' );

// END ENQUEUE PARENT ACTION

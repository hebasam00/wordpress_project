<?php
/**
 * Starter Content.
 *
 * @package avantex
 */

/**
 * Function to return the array of starter content for the theme.
 *
 * Passes it through the `avantex_starter_content` filter before returning.
 *
 * @since Twenty Twenty 1.0
 *
 * @return array A filtered array of args for the starter_content.
 */
function avantex_get_starter_content() {

	// Define and register starter content to showcase the theme on new sites.
	$avantex_starter_content = array(
		'attachments' => array(
			'logo' => array(
				'post_title' => _x( 'Logo', 'Theme starter content', 'avantex' ),
				'file'       => 'assets/images/logo.png',
			),
		),

		'theme_mods'  => array(
			'custom_logo' => '{{logo}}',
		),
		'widgets'     => array(
			// Place one core-defined widgets in the first footer widget area.
			'avantex_blogwidget' => array(
				'search',
				'text_about',
				'recent-posts',
				'categories',
				'text_business_info',

			),
			'avantex_fwidget_1'  => array(
				'text_business_info',
			),
			// Place one core-defined widgets in the second footer widget area.
			'avantex_fwidget_2'  => array(
				'recent-posts',
			),
			// Place one core-defined widgets in the third footer widget area.
			'avantex_fwidget_3'  => array(
				'meta',
			),
		),
		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'       => array(
			'about',
			'contact',
			'blog',
		),
		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus'   => array(
			// Assign a menu to the "primary" location.
			'primary' => array(
				'name'  => __( 'Avantex Header Menu', 'avantex' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
			'footer'  => array(
				'name'  => __( 'Avantex Footer Menu', 'avantex' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
		),
	);

	/**
	 * Filters Twenty Twenty array of starter content.
	 *
	 * @since Twenty Twenty 1.0
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'avantex_starter_content', $avantex_starter_content );

}

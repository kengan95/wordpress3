<?php
/**
 * WooCommerce Setup Functions
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

/*
-------------------------------------------------------------------------------------------------------
	Deactivate WooCommerce Setup Wizard
-------------------------------------------------------------------------------------------------------
*/

add_filter( 'woocommerce_prevent_automatic_wizard_redirect', '__return_true' );

/*
-------------------------------------------------------------------------------------------------------
	WooCommerce Theme Setup
-------------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'portfolio_wp_woo_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WooCommerce features.
	 *
	 * @since Portfolio WP 1.0
	 * @return void
	 */
	function portfolio_wp_woo_setup() {
		add_theme_support(
			'woocommerce',
			array(
				// WooCommerce Thumbnail Size.
				'single_image_width'            => 1200,
				'thumbnail_image_width'         => 640,
				'gallery_thumbnail_image_width' => 320,
				// Product Grid Settings.
				'product_grid'                  => array(
					'default_columns' => 3,
					'default_rows'    => 4,
					'min_columns'     => 2,
					'max_columns'     => 5,
					'min_rows'        => 1,
				),
			)
		);
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}
	add_action( 'after_setup_theme', 'portfolio_wp_woo_setup' );
}

/*
-------------------------------------------------------------------------------------------------------
	Enqueue Styles and Scripts
-------------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'portfolio_wp_woo_scripts' ) ) {
	/**
	 * Enqueue scripts and styles for frontend.
	 *
	 * @since Portfolio WP 1.0
	 * @return void
	 */
	function portfolio_wp_woo_scripts() {
		wp_enqueue_style( 'portfolio-wp-woocommerce-style', get_template_directory_uri() . '/assets/css/woocommerce.css', '', '1.0' );

		$font_path   = WC()->plugin_url() . '/assets/fonts/';
		$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';
		wp_add_inline_style( 'portfolio-wp-woocommerce-style', $inline_font );
	}
	add_action( 'wp_enqueue_scripts', 'portfolio_wp_woo_scripts' );
}

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/*
-------------------------------------------------------------------------------------------------------
	Custom Quantity Input Buttons
-------------------------------------------------------------------------------------------------------
*/

/**
 * Custom plus button.
 */
function portfolio_wp_custom_quantity_plus() {
	echo '<button type="button" class="plus" onclick="this.parentNode.querySelector(\'input[type=number]\').stepUp()">+</button>';
}
add_action( 'woocommerce_after_quantity_input_field', 'portfolio_wp_custom_quantity_plus' );

/**
 * Custom minus button.
 */
function portfolio_wp_custom_quantity_minus() {
	echo '<button type="button" class="minus" onclick="this.parentNode.querySelector(\'input[type=number]\').stepDown()">-</button>';
}
add_action( 'woocommerce_before_quantity_input_field', 'portfolio_wp_custom_quantity_minus' );

<?php
/**
 * Functions and definitions
 *
 * @package Portfolio WP
 * @since   Portfolio WP 1.0
 * @license GNU General Public License v2 or later
 * @link    https://portfoliowp.com
 */

/*
-------------------------------------------------------------------------------------------------------
	Theme Setup
-------------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'portfolio_wp_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Portfolio WP 1.0
	 * @return void
	 */
	function portfolio_wp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( 'portfolio-wp', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 2400, 9999 );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for custom block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for wide alignment class for Gutenberg blocks.
		add_theme_support( 'align-wide' );

		// Add support for custom units.
		add_theme_support( 'custom-units' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add support for block navigation menus.
		add_theme_support( 'block-nav-menus' );

		/*
		* Enable support for custom menus.
		*/
		register_nav_menus(
			array(
				'main-menu'      => esc_html__( 'Main Menu', 'portfolio-wp' ),
				'secondary-menu' => esc_html__( 'Secondary Menu', 'portfolio-wp' ),
				'social-menu'    => esc_html__( 'Social Menu', 'portfolio-wp' ),
			)
		);

		/*
		* Enable block style support.
		*/
		register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
			'core/group',
			array(
				'name'  => 'pwp-dark-style',
				'label' => __( 'Dark Style', 'portfolio-wp' ),
				'inline_style' => '.is-style-pwp-dark-style {  
					color: var(--wp--preset--color--white);
					background-color: var(--wp--preset--color--bg-dark);
				}
				.is-style-pwp-dark-style p a {  
					color: var(--wp--preset--color--accent-primary);
				}',
			)
		);

		/*
		* Enable custom color palette.
		*/
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_attr__( 'Primary Accent', 'portfolio-wp' ),
					'slug'  => 'accent-primary',
					'color' => '#38bda6',
				),
				array(
					'name'  => esc_attr__( 'Secondary Accent', 'portfolio-wp' ),
					'slug'  => 'accent-secondary',
					'color' => '#D9E9E7',
				),
				array(
					'name'  => esc_attr__( 'Background Dark', 'portfolio-wp' ),
					'slug'  => 'bg-dark',
					'color' => '#495369',
				),
				array(
					'name'  => esc_attr__( 'Background Light', 'portfolio-wp' ),
					'slug'  => 'bg-light',
					'color' => '#E5EEED',
				),
			)
		);
	}
	add_action( 'after_setup_theme', 'portfolio_wp_setup' );
}

/*
-------------------------------------------------------------------------------------------------------
	Register Block Styles
-------------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'portfolio_wp_register_block_styles' ) ) {
	/**
	 * Sets up theme defaults and registers support for block styles.
	 *
	 * @since Portfolio WP 1.0
	 * @return void
	 */
	function portfolio_wp_register_block_styles() {
		$license = get_option( 'portfolio-wp_license_key' );
		$status  = get_option( 'portfolio-wp_license_key_status' );

		if ( false !== $status && 'valid' == $status ) {

			/*
			* Enable block style support.
			*/
			register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
				'core/group',
				array(
					'name'  => 'pwp-dark-style',
					'label' => __( 'Dark Style', 'portfolio-wp' ),
					'inline_style' => '.is-style-pwp-dark-style {  
						color: var(--wp--preset--color--white);
						background-color: var(--wp--preset--color--bg-dark);
					}
					.is-style-pwp-dark-style p a {  
						color: var(--wp--preset--color--accent-primary);
					}',
				)
			);

		} else {

			/*
			* Enable block style support.
			*/
			register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
				'core/group',
				array(
					'name'  => 'pwp-dark-style',
					'label' => __( 'Get Pro', 'portfolio-wp' ),
				)
			);
			
		}
	}
	add_action( 'init', 'portfolio_wp_register_block_styles' );
}

/*
-------------------------------------------------------------------------------------------------------
	Enqueue Styles and Scripts
-------------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'portfolio_wp_scripts' ) ) {
	/**
	 * Enqueue scripts and styles for frontend.
	 *
	 * @since Portfolio WP 1.0
	 * @return void
	 */
	function portfolio_wp_scripts() {
		wp_enqueue_style( 'portfolio-wp-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
		wp_enqueue_style( 'portfolio-wp-font-awesome', get_template_directory_uri() . '/assets/css/fontawesome.css', array( 'portfolio-wp-style' ), '6.5.1' );
		wp_enqueue_script( 'portfolio-wp-custom-js', get_template_directory_uri() . '/assets/js/jquery.custom.js', array( 'jquery' ), '1.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'portfolio_wp_scripts' );
}

/*
-------------------------------------------------------------------------------------------------------
	Enable Customizer
-------------------------------------------------------------------------------------------------------
*/

add_action( 'customize_register', '__return_true' );

/*
-------------------------------------------------------------------------------------------------------
	Gutenberg Editor Scripts
-------------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'portfolio_wp_editor_scripts' ) ) {

	/**
	 * Enqueue WordPress theme styles within Gutenberg.
	 */
	function portfolio_wp_editor_scripts() {
		wp_enqueue_style(
			'portfolio-wp-editor',
			get_theme_file_uri( '/assets/css/editor.css' ),
			false,
			'1.0',
			'all'
		);
		wp_enqueue_style(
			'portfolio-wp-font-awesome-editor',
			get_template_directory_uri() . '/assets/css/fontawesome.css',
			array( 'portfolio-wp-editor' ),
			'6.5.1'
		);
		if ( class_exists( 'Woocommerce' ) ) {
			wp_enqueue_style(
				'portfolio-wp-editor-woocommerce',
				get_theme_file_uri( '/assets/css/woocommerce.css' ),
				false,
				'1.0',
				'all'
			);
		}
		if ( class_exists( 'Jetpack' ) ) {
			wp_enqueue_script(
				'portfolio-wp-enqueue-block-variations',
				get_theme_file_uri( '/assets/js/block-variations.js' ),
				array( 'wp-blocks' ), // Primary dependency for block registration
				wp_get_theme()->get( 'Version' ),
				true
			);
		}
	}
}
add_action( 'enqueue_block_assets', 'portfolio_wp_editor_scripts', 10 );

/*
-------------------------------------------------------------------------------------------------------
	Register Pattern Categories
-------------------------------------------------------------------------------------------------------
*/

/**
 * Register Block Pattern Categories.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-headers',
		array( 'label' => esc_html__( 'Portfolio WP Headers', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-footers',
		array( 'label' => esc_html__( 'Portfolio WP Footers', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-hero',
		array( 'label' => esc_html__( 'Portfolio WP Heroes', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-portfolios',
		array( 'label' => esc_html__( 'Portfolio WP Portfolios', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-case-studies',
		array( 'label' => esc_html__( 'Portfolio WP Case Studies', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-about',
		array( 'label' => esc_html__( 'Portfolio WP About', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-testimonials',
		array( 'label' => esc_html__( 'Portfolio WP Testimonials', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-pricing',
		array( 'label' => esc_html__( 'Portfolio WP Pricing Tables', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-sliders',
		array( 'label' => esc_html__( 'Portfolio WP Sliders', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-blogs',
		array( 'label' => esc_html__( 'Portfolio WP Blogs', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-contact',
		array( 'label' => esc_html__( 'Portfolio WP Contact', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-services',
		array( 'label' => esc_html__( 'Portfolio WP Services', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-logo-cloud',
		array( 'label' => esc_html__( 'Portfolio WP Logo Cloud', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-awards',
		array( 'label' => esc_html__( 'Portfolio WP Awards', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-social',
		array( 'label' => esc_html__( 'Portfolio WP Social Media', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-newsletters',
		array( 'label' => esc_html__( 'Portfolio WP Newsletters', 'portfolio-wp' ) )
	);
	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'portfolio-wp-pages',
		array( 'label' => esc_html__( 'Portfolio WP Full Pages', 'portfolio-wp' ) )
	);
}


/*
-------------------------------------------------------------------------------------------------------
	Includes
-------------------------------------------------------------------------------------------------------
*/

// WooCommerce Setup.
if ( class_exists( 'Woocommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// EDD
require_once get_template_directory() . '/inc/class-pwp-edd.php';
new PWP_EDD();

/*
-------------------------------------------------------------------------------------------------------
	Plugin Activation
-------------------------------------------------------------------------------------------------------
*/

require_once get_parent_theme_file_path( '/inc/plugin-activation.php' );
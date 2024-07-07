<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Portfolio WP
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

add_action( 'tgmpa_register', 'portfolio_wp_register_required_plugins' );

if ( ! function_exists( 'portfolio_wp_register_required_plugins' ) ) {

	/**
	 * Register the required plugins for this theme.
	 *
	 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
	 */
	function portfolio_wp_register_required_plugins() {
		/*
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		if ( defined( 'IS_ATOMIC' ) && IS_ATOMIC && defined( 'ATOMIC_CLIENT_ID' ) && '2' === ATOMIC_CLIENT_ID ) { // WP.com recomended plugins conditional.
			$plugins = array(
				array(
					'name'     => 'WooCommerce',
					'slug'     => 'woocommerce',
					'required' => false,
				),
				array(
					'name'     => 'Jetpack',
					'slug'     => 'jetpack',
					'required' => false,
				),
			);
		} else {
			$plugins = array(
				// array(
				// 	'name'               => 'Organic Blocks', // The plugin name.
				// 	'slug'               => 'organic-blocks-bundle', // The plugin slug (typically the folder name).
				// 	'source'             => get_stylesheet_directory() . '/inc/plugins/organic-blocks-bundle.zip', // The plugin source.
				// 	'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				// 	// 'version'            => '2.0.2', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				// 	'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				// 	'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				// 	'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				// 	'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
				// ),
				array(
					'name'     => 'WooCommerce',
					'slug'     => 'woocommerce',
					'required' => false,
				),
				array(
					'name'     => 'Jetpack',
					'slug'     => 'jetpack',
					'required' => false,
				),
			);
		}

		/*
		 * Array of configuration settings. Amend each line as needed.
		 *
		 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
		 * strings available, please help us make TGMPA even better by giving us access to these translations or by
		 * sending in a pull-request with .po file(s) with the translations.
		 *
		 * Only uncomment the strings in the config array if you want to customize the strings.
		 */
		$config = array(
			'id'           => 'portfolio-wp',          // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'tgmpa-install-plugins', // Menu slug.
			'parent_slug'  => 'themes.php',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => true,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => true,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
		);

		tgmpa( $plugins, $config );
	}
}

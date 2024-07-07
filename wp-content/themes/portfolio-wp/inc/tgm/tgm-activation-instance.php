<?php // phpcs:ignore WPThemeReview.Plugins.CorrectTGMPAVersion.versionUndetermined
/**
 * TGM Bulk Installer Skin Hack
 *
 * @version 2.6.1
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

if ( ! function_exists( 'load_tgm_plugin_activation' ) ) {
	/**
	 * Ensure only one instance of the class is ever invoked.
	 *
	 * @since 2.5.0
	 */
	function load_tgm_plugin_activation() {
		$GLOBALS['portfolio-wp'] = TGM_Plugin_Activation::get_instance();
	}
}

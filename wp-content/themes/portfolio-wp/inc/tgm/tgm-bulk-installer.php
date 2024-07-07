<?php // phpcs:ignore WPThemeReview.Plugins.CorrectTGMPAVersion.versionUndetermined
/**
 * TGM Bulk Installer
 *
 * @version 2.6.1
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

if ( ! class_exists( 'TGM_Bulk_Installer' ) ) {

	/**
	 * Hack: Prevent TGMPA v2.4.1- bulk installer class from being loaded if 2.4.1- is loaded after 2.5+.
	 *
	 * @since 2.5.2
	 *
	 * {@internal The TGMPA_Bulk_Installer class was originally called TGM_Bulk_Installer.
	 *            For more information, see that class.}}
	 */
	class TGM_Bulk_Installer {
	}
}

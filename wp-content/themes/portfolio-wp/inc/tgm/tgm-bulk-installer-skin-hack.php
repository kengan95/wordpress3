<?php // phpcs:ignore WPThemeReview.Plugins.CorrectTGMPAVersion.versionUndetermined
/**
 * TGM Bulk Installer Skin Hack
 *
 * @version 2.6.1
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

if ( ! class_exists( 'TGM_Bulk_Installer_Skin' ) ) {

	/**
	 * Hack: Prevent TGMPA v2.4.1- bulk installer skin class from being loaded if 2.4.1- is loaded after 2.5+.
	 *
	 * @since 2.5.2
	 *
	 * {@internal The TGMPA_Bulk_Installer_Skin class was originally called TGM_Bulk_Installer_Skin.
	 *            For more information, see that class.}}
	 */
	class TGM_Bulk_Installer_Skin {
	}
}

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.~nb4l2M:5%yp2%LW4dB/Fi_Le/v6F#8Jn;5l!lI5Y3X-e_xpP2l~^J}%xcY[:CF' );
define( 'SECURE_AUTH_KEY',  '>SzW8;y_gx,Z6g__,6mUHaPF:RzOJoO)wkEJ5NW#QN-ec[t9Z|~cjLH!rj$_s*{$' );
define( 'LOGGED_IN_KEY',    '-qSb,{ak]YQ`dHZ`<td&8}X@Az5^UtR.>1 xplTzJnv)%FD}6 +.0EfCw-OQIV8H' );
define( 'NONCE_KEY',        '}I&dN#nDyN>:dH{DoDJwn9$=ZET5<APMGJQ}#y<V!Yc(E8|E7bRQOvgCA(=A-MEX' );
define( 'AUTH_SALT',        'b%>vl$GKnhl/42N7DEd^`?R[#?e*|ATPA_Ki}C+Or#@%F e-i>krb#v}b3H}:D0:' );
define( 'SECURE_AUTH_SALT', '9k#>wbZqAK_YX[*P;d`}6R+@jn@Xgn^zd!}M5qd4BVu&zq`+W<q3EHO )<+3#O1+' );
define( 'LOGGED_IN_SALT',   '1hZP;#x[.yZg(AM%tLrFP)XWPYT5U|AK<0(Eo{f0d1fsK3lG &!*Sij,`$MfNk(H' );
define( 'NONCE_SALT',       'dN*e)[Z<+V`9j1RGX+& x8*11z7KKK4> 1nSSnmy+RC/3tI9!kUY!J2fy)T^lI R' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

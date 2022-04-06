<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gagaytechshop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/* This is to prevent error message when adding woocomerece plugin

'To perform the requested action, WordPress needs to access your web server. 
Please enter your FTP credentials to proceed. If you do not remember your credentials,
 you should contact your web host.

*/

define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         '1}qF!m^OXxz|GIU76gQn+__zvn5``}FtAPwWk[9}}Tl)cU&4S!-qMJ9VrI^YT 1b' );
define( 'SECURE_AUTH_KEY',  'V;,Yk$Olxd<X]_{4nj9.7k1E,S,}UTj3>I}2rtgS+~@ 1q{h%m.Y7^S5BVJ!CA*Z' );
define( 'LOGGED_IN_KEY',    's!;Bp!Q[:i>tL0,+.~b4?.{M9*)|.PBGa>/}lPQLm)D_X$6zchS]Jb;4nQ{IZ^AB' );
define( 'NONCE_KEY',        '=jc&R9JX:t,/ZYm9%mqi_dJbBL-k%EZd<VxyF&~2mIEj-U!r*S&fk$cGAu7/*G#g' );
define( 'AUTH_SALT',        'B%xj<P!I8$p;#qUP{D)OaW,Nx{xy:trq%I3m l[;GY!]o?`aUB}M<+IQ#.edf3Ht' );
define( 'SECURE_AUTH_SALT', '2Zo-cQ<0{g9EV%o3C:g6l#AHU!_{Iq]*DOT@YvPf.!EO0FKun=f7RJGOQ?(5z0to' );
define( 'LOGGED_IN_SALT',   '(dv1T$Xlsi5f@b,a$&6,@;&hD|&10`naQCEx?E2APbjb:fFXOSk_F|hi[e00zK2t' );
define( 'NONCE_SALT',       'rx[]fgzKly!o(g_=XBxB+t2Ei:mg&?8%USg uy=1ImVI;u!h}lD@Th{s`-5ZHi/u' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if ($_SERVER['REMOTE_ADDR'] == '175.176.84.224') {
	define('WP_DEBUG', true); 
	// Enable Debug for your IP Address only.
	//Set to false to turn it off.	
} else {
	define('WP_DEBUG', false);
}
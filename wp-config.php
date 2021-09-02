x<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '!P@ssw0rd123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '-}%C]EsWhQf9`_8Fihx44ab4W!H$R!~=z>##7budo]5@)-kLEo:~|@=hi>2*Gi~#' );
define( 'SECURE_AUTH_KEY',  '|4;dV3mT&loDVF?@)lKE5h0`jbSgh$^b,kLm/ .^j|1CUtO=T+`TT&U5+Z>Hci;c' );
define( 'LOGGED_IN_KEY',    '+XUx`B-K0UV(sHLj+O^v`F-0iZu[.zeRYLF/zH=b@o{)ySl.lzbC& UK  .<whrg' );
define( 'NONCE_KEY',        '|Y8Ax):cxtB*M+?[.$kv{dcqE-xFK-M:u+`Ogv-DG1CF9,+5yb[tizV`#&i*l{5A' );
define( 'AUTH_SALT',        'mY-rx]M~Z?o+Vvi3?<~2CU+Is6{<N8BL|zj9+5Ie-OEjTj?&l$FbBO6E0wo?65#/' );
define( 'SECURE_AUTH_SALT', 'A7xQj/k#SmE}.a*ToH.4<PXUKz/1+|wz2XA^J/x|z?&V|!4=z2JW*szEN=mXb?j!' );
define( 'LOGGED_IN_SALT',   ',MILm7|0T@{2:JqK[PDQWU6?x~)arC2p1F|vWu+k+DLU-#}400LQ28iX4K5x56hG' );
define( 'NONCE_SALT',       '%W)dyXXcW^0_/U_1*9on:oR$&{=sp$si}E{-W?a1X[w9i-|RiIs:_yzmT{<w%2<V' );

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

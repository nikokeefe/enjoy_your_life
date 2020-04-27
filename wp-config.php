<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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

if( file_exists(dirname(__FILE__) . '/local.php') ) {
	// local database settings
	define( 'DB_NAME', 'enjoy_your_life' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_HOST', 'localhost' );
} else {
	// Live database settings
	define( 'DB_NAME', 'nikwi893_enjoy' );
	define( 'DB_USER', 'nikwi893_enjoy' );
	define( 'DB_PASSWORD', 'Lacdagtan75' );
	define( 'DB_HOST', 'localhost' );
}


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7{J7|})Wdrw~#mG]feD}2-S^HT3>xkp=hUkx|6}:de.H*V-Cac1x~2#IPIDt^~a)' );
define( 'SECURE_AUTH_KEY',  'ZDKW1~ 0|g~.C$Y-wYcK>av4n!Nj;3lh;;kAjs}CY8R5STT4[1@t.5(fVssEH>ok' );
define( 'LOGGED_IN_KEY',    'EF,%~~4k_PDg[!xXN#tpSX*`(+5}^.`{It+gM&f5]pS^US}g;8Ts~7jcU7k}!pR/' );
define( 'NONCE_KEY',        '3N>!m*G7]4<NillGi=sp=Dp}ui6j~2w{U@|^$@7lF@AL@w=!kSaOfAgLxw{AGO~0' );
define( 'AUTH_SALT',        '58nab#ZQj]stiLxZ8UjC[+&u`=`K/z(|rfKm:zSo#6?}<s/UcnBZO6q+7k/ehU:n' );
define( 'SECURE_AUTH_SALT', 'IviZX/(P>$HbnPcS~6MVpbO)=SU~o.9O*ns_Q`=*By%rvVJjo1(^;Y,$crx}Mg@s' );
define( 'LOGGED_IN_SALT',   'HuVGkTQNDdl<d0tQB8#,f#q[{cZJ!7;q8EtF$0H/?/(k?MJzY?FLoL,+gs.I1N7z' );
define( 'NONCE_SALT',       '$M#0vLto,f9wzsjHci2G<Oex.HFmijte%=op}LVy`cn:_+R6o?8{%YdZ`@{{{Pm6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eyl_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
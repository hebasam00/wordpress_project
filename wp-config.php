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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\gg\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'gg' );

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
define( 'AUTH_KEY',         'd$Jg-(Fkz*SLCt#`=q5JXC]eis?}pKs^VZ5vE@u*=`|#{0$)y=tSL/.44=Co?.wh' );
define( 'SECURE_AUTH_KEY',  'Q)zR 2;:w8qCXG:G:=*#Zxs>T_& F<w}V<_RuKgCPoH-3c7Ri3/-c`BwT7W@H~R=' );
define( 'LOGGED_IN_KEY',    '>D Q@XvpPBFtK(D!=E((nW/^<0dp7<B?@vfOd FKyvOpcbX`Yr7y9m+|: W^ly8s' );
define( 'NONCE_KEY',        'FiN5KU34Pp}2@JMG+tBDT7&PhgM6d8g>(QiJ4aK>gxxv,HYa]d+4t7&G^`g;QIL;' );
define( 'AUTH_SALT',        '9?|8<|Ak(csW&$8%?WS=[@Y^V_>bA*.}XAZ)}D)nqN81n+{?c$s8H (C*3n%f$lU' );
define( 'SECURE_AUTH_SALT', '*;L+n[2lmFYM5cWd(^4n`tyH5iaVP|J2B?~b WWtj,ZApIAt*?:X,)j_?yWY;>UV' );
define( 'LOGGED_IN_SALT',   'dL]{?s_??o.=*~@/XmX.[ZpME!bEOK[u_~i W%:nAgXh|uMB+;a)P!6D/vDfW#qa' );
define( 'NONCE_SALT',       'zx]36dC@[~Gli9C bkj`h=>}>~-Yy:,G2O<! 7-u{WhP]8_c``y]Wp=0T[%Ey[Va' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

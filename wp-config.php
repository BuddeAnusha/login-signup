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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'login-signup' );

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
define( 'AUTH_KEY',         '(k.[R8/` Sd24/Ho(Ak4fFG.Qfk31C7tyZcrHtX#3@:BN;>=7m|K`o{^n<]4zx}4' );
define( 'SECURE_AUTH_KEY',  'y|rR3>AcB*4Nj9yuAvr.# UZD*nfC![cU}1&1>5|[Agyl,#N&6PhtO/FbLBjn;Ga' );
define( 'LOGGED_IN_KEY',    'e9k9_:&NMQ)c2S]z+][fd2x,Qe!pO^[|Y~V#v30*.@r3{;?rUW!zLjb:Dx(76}G%' );
define( 'NONCE_KEY',        'Z5W3Mc^:^<W#,rv=OjP]0vD)g{EEHt4(&K+gY 43[6D;k`<pV7{?5=VDrGBS1=U~' );
define( 'AUTH_SALT',        '}I+@_Bx]sgO>%zEu+*nTVF4?[$d~ve>HDq8LYfa[i)6mF}KDW4)9?q8K)FLI~<wV' );
define( 'SECURE_AUTH_SALT', 'rX&lw3u&e&MGfIjWPiGSnJ3PrUrIaxj%pG}f?*&rjGio%E$5F 1LZzgu$M,QI6`S' );
define( 'LOGGED_IN_SALT',   '=OTe?.jT8#&qvOCDQs@o9lfm^qjasL![@:cP_tti*#?RsSN1hp?$ L*3,NG<VM}4' );
define( 'NONCE_SALT',       'ss$)JJ9Wi>W-;b^u/P6zqS:^V0nCS5C7g{ZGAp Cm|f&E6ChxuNDRM;Kx8KQYok]' );

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

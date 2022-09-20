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
define( 'DB_NAME', 'vaskovic_projekat' );

/** Database username */
define( 'DB_USER', 'vaskovic_projekat' );

/** Database password */
define( 'DB_PASSWORD', 'BGWP14003' );

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
define( 'AUTH_KEY',         ']y&eeE}jZ/ ;(/kKTKi@j-ZmI1 GDW(KYr4)bQiYJg|I/Nb0QqD.:PjPcBmR&?{w' );
define( 'SECURE_AUTH_KEY',  'k<&n:LXq%1tC!L|Hd=qEVJ-&gl:!G@,FpU,^UQS<wt4:tr7jM`uLF;2@gROxwA=C' );
define( 'LOGGED_IN_KEY',    'QD:D!^!1sT_78s%-CrWEHd?H(cFPn@.v`H}`@.@1r+]kdJpI;NSD#+ezCGz5E}J<' );
define( 'NONCE_KEY',        '6^/5z T:O8pxnRAu7N.B:7+Ks8Sc.A85dJCs7t49ZX,7 }BY`=HtHnu=|&>m|sXI' );
define( 'AUTH_SALT',        '; gsuXM8d86)O<LLF0Thyl_p&zXFiWU/=f!MYtYp`OeJ-J761*vM9JwK(w +:OY>' );
define( 'SECURE_AUTH_SALT', '5umskwl=$8W#GI.rUk?!}Y7btLm&JrXynC*D7f,e?Z/wreyj?&s}!jrNT1Fk`I@s' );
define( 'LOGGED_IN_SALT',   '|swxrCsdLESPP*zmGbd:hnQoFqr}2U$$?Fv/!vWs4p$vY:CxbB67rsj6&>M:S~vJ' );
define( 'NONCE_SALT',       'q<w]U!U)T|MTTBAQ4:O805#tc8Vb)O!ndqLT6fy=6.VqJ8.v@DRmInigp;9F?~#h' );

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

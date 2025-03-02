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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'AQI~le3pc&+sNoJ%N+-wf7/&:A~-?+/|^Ti]mVmmwag=K,gA)&DkyR5v:4EHkpz7' );
define( 'SECURE_AUTH_KEY',  'RRHRA8 )eIF/s,nd#oQ[nHO0rR345s2#Bee0~FRf_&:HF$MDk;jl5rA90<2$^0w#' );
define( 'LOGGED_IN_KEY',    'P@u|d#!>?Y{=WgZge6Q~&UK]rFA1PqvbtZyKN!,^iXNvb!JQb8QN*~c6>//VA]-=' );
define( 'NONCE_KEY',        '.0l5yDOCDYS|R|[C4*T w56k+H*A_WVk[uTg,:+#/u^?ET%iTI(;o76-9:TNq^w)' );
define( 'AUTH_SALT',        ':/l3.;F&Ahsz,!dEz_OIm<@(x UeHQ#,bMT1X5Vg:um#2J{U )Cr38/V>N<8`LTV' );
define( 'SECURE_AUTH_SALT', 'iWzphlUrVBs9I4U~J^0@>^d.]mTs,]@gQSE]6Ai*tbf2A?Ny~7$=C.]RP*Pm[0&[' );
define( 'LOGGED_IN_SALT',   '?~$-19gM?P>xq|(r9u ,7#/P0&~kBW2;`md m[e<m+;(W{ !Xd7u.g(Z!llr;3j>' );
define( 'NONCE_SALT',       '  _5z9~@COGdBGN| n0hEjfc;{ e;{-wHf!tKvL]7;1Q%$*JdjZ#A:,`t1)]i9e{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

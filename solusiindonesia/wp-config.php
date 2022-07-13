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
define( 'DB_NAME', 'db_sib' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'H8DtH_}H-{mPF;Aogfzh`qN#SOAX5`A4eYPV(ACyh)`^FGR{]EnyoB-37}V+M UM' );
define( 'SECURE_AUTH_KEY',  'Qdj[Rzx,d/N8NGaCYQc),+{-|9@#5oX73a<V1@6xkU=,z4>(LP0yabe.& [Qt]jO' );
define( 'LOGGED_IN_KEY',    'IvRk.?)Jq]-3?^0tLb)^:f/L@I@HtDI938ZiV`Uo!@VTRts Ak?qQ>I=9Rg4tg`i' );
define( 'NONCE_KEY',        'U2`o%x )3]k=/gXAvM_mCtw!Z =saVqV,{L:=-bm00QuP~&iKc,+4v$?5O0A32-,' );
define( 'AUTH_SALT',        '*Ut2L (?~wQtfJ~eXl77HB#-{|JaopK$wA4LRK<UBuV(cbdcKYubXoZ*1=dPVdmT' );
define( 'SECURE_AUTH_SALT', 'UV;|HBBfh-zSL(JB[ue1j*hYv^P d?A+cQ3ltW8y_n}b6m#(? ^>qe{FCJ/9*G`p' );
define( 'LOGGED_IN_SALT',   'Ym#4-|gnF;is-v;gh/)G*$wnLNZE0M;=mt$9nTHe/H3]}^{^t!e)e6z+rLmB{/u%' );
define( 'NONCE_SALT',       '_u*!@>jBGvJgc3qCxA~ET`x7.?k{7iC9 6d7BbanF1e:]9^7@T@@cFOB/T/Z >Uy' );

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

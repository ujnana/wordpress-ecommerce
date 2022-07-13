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
define( 'DB_NAME', 'db_sapporo' );

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
define( 'AUTH_KEY',         '_q252trN/83^mhW#3&L?b&,i7Ataz8{`IjrcXn%t<p=[Rh_EHo8_vK8WhMGa: W{' );
define( 'SECURE_AUTH_KEY',  'A1c4wn*~Ia&G%#xofpEn^8(H1:Bd?~5%f5DDS^DJxp2Qux1.0T#&5?IUOl|V, :?' );
define( 'LOGGED_IN_KEY',    'l{HI{=al*~[(5cCWoU=*;9Zc2b-V70qsIlc7f2L+2oOfnYP^~$P.t9*(pyF1W@;_' );
define( 'NONCE_KEY',        'f1kg~))%Q!2zqHmlXvC/O5jfQ9{c<oRIn!><qx|XoJ`Yt6$*N9fWF|MCB@n{.oRI' );
define( 'AUTH_SALT',        'm=pQKff2?!%voA-xR312f]6x#=s)`=|_sDL`-b.pMMSC32$`+Xh)9WkvNV`0;j-S' );
define( 'SECURE_AUTH_SALT', 'V?yUw,$To6ELT)8S {c)4M>N{6Z+?zmE}rpY#L/p7oa|+mK<,-OiHf$7Etf9yP8y' );
define( 'LOGGED_IN_SALT',   '/A+H(I.^M?p7s5j(Q8]?-UyP^E|,e<t,(9<n|pla%fCz%rhi:0i_nWM^}$]]O00i' );
define( 'NONCE_SALT',       '-Ec{fxtjfqoK^,<Q)@qV] QsE}K<5MP8o-rC{<Yyo>3`ltt !ab2#KMc.tUa9Uk{' );

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

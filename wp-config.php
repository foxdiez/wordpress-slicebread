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
define( 'DB_NAME', 'test_slicebread' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '${HuRv`|Iyr%f>Dp1i_wYLgY]pT(vD~1Lxh4Ud?)B<.lAr<8e.fP>G:z1%vsM!2;' );
define( 'SECURE_AUTH_KEY',  'f+?`]w=z`a/mOHSEC:$+?}|fTbFR:X`!e-vXHf:2sfpV^qe`IA9PsGtqei;vxzhs' );
define( 'LOGGED_IN_KEY',    '?!xZME!%33Ox9rYddRrMG+~i4_zv?p#P1!LS}`-Nh9djN;LLLvd,1!F.I+]M[^U=' );
define( 'NONCE_KEY',        'C-zUq5x.$A0UMLP,znMzy6#QGTEY-DRotk!(O7ayEO^PUNuAN@t.<k$oZPumg9(B' );
define( 'AUTH_SALT',        'n9)C1trD#lJJxXGb4See4G]t=<^EuWN-P{50J35&`ki$Y@T&r`8}6Bq>>nF69U%G' );
define( 'SECURE_AUTH_SALT', 'Yx a42:MeFt LBKGy4y^26m^a]Uc{4V_&2z/~Hu[lUOm^!B.FPgy<n:?RkiK&lx>' );
define( 'LOGGED_IN_SALT',   'd2/8U:&Q4XC#Fab~O P)yfC;Cef0O6c7hc^ffzRKFU-aE[vsk,>+V`#y|,r0zyRF' );
define( 'NONCE_SALT',       '~`@}D^{@3mQj[RUd`d*)8x!*?u>Pt-Yx>|}1Z{,sSxVVN=bu/9=M.J6Z( |`Xch]' );

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

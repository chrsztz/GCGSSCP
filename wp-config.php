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
define( 'DB_NAME', '' );

/** Database username */
define( 'DB_USER', '' );

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
define( 'AUTH_KEY',         '.K& rDSL={/q$Fu6/tjZg:e]6]iBh7nZW#4{/^=I39mlSjBFvi!;d4(K|V)1;@9!' );
define( 'SECURE_AUTH_KEY',  'FPHs/+UqRve2T[;tS L3y5qpN|nmodj:otxq#%/!!688xb=v+]!2#mT:]o:t{Sgp' );
define( 'LOGGED_IN_KEY',    '8T9*U39&hQ5bsGw[fi7Q2H0C4WbgN8*J,0y+`W,!9$n^;5nA6XkNSB~Nn63((lE9' );
define( 'NONCE_KEY',        '`H/]+a3YwV*V}@JP>%U^M7CZU@y:1H~-5q#+:I>(>I5[$*tssFG%|m$FbsT$t ~%' );
define( 'AUTH_SALT',        'kkL?Mrb&{eZS&(%16>9-:#gXR^vT}g]ueq9DlHx^$^lioj9,N];~`eLDX(khAGU+' );
define( 'SECURE_AUTH_SALT', 'eDar55cDc@a159!&@^m_r&rf7-,<Zdj:k!zdJk(6Rv>fJh(3J(67Y,Le9Rv?xYp ' );
define( 'LOGGED_IN_SALT',   'Xc4%B5^HX4?*9SaB+OzsEr*QT?DkuC{]c?>C!.d88Wq4IIjF&`hOb:jr0lnvyZVx' );
define( 'NONCE_SALT',       '_#njQ=Pe5C}6TLgCA]!:t.A~buvc3EHvME*n+3|.BglM^^`l3h4LHttUho<8/VuR' );

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

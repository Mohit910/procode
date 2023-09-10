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
define( 'DB_NAME', 'procode' );

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
define( 'AUTH_KEY',         'DNZWw*x)+7lxbqeO/D*;$ M<Yd@0z~grkF7~i>(7<gkq,n8[j#,wA) WC3Q2g)Xf' );
define( 'SECURE_AUTH_KEY',  '/PKpPpdx?m%wLuw$l14p~Fc[H?grP[7i[*rRi~UV_6;8WG.V)3!MQ}07Ep#o$:[m' );
define( 'LOGGED_IN_KEY',    'u#m{^ON||WFXq!8j]NHT%g17skL0N4 !l)Kd7IVPLgo+ia)Cm1I]O#<O;ZnEU(nV' );
define( 'NONCE_KEY',        '[%AYkr0Y::>.^w_5_;+1c}iuAjh6U|s}4QfJY2jnh?=~HB~gi3s<scR/QTeL-e>W' );
define( 'AUTH_SALT',        '3,C]IhVYg2XhU8e%YM60mKpHS%1T3&< P[|W0vT|5~Ly_FDv/8|kPVBNa#RNxfD:' );
define( 'SECURE_AUTH_SALT', '!hPTgefa4r_s8QN~)Cax`1]J$cb9g%FJbK~|7uXOL?.(R0GP(;y}{XPS8k{7x@?l' );
define( 'LOGGED_IN_SALT',   'KGX6/PA,fH ]1N9NFX=UfFcq08^d8,;+ny>[nnY89oe9{0$=Um^+%O}_@It(*F{Z' );
define( 'NONCE_SALT',       'i^?6F5a]o`8-/)Pt01DaBEh_evCS;;(]6&xrpw*uNEW:h4xQLrUO.QhnO`5^Q|8#' );

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

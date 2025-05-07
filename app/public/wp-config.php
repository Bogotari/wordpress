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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'v<]*^8e2dTjOoL@MKA83Jr8mf;]iG -crl(]x2`cVZaFi>5e^%@*#0P!ao*6a)Lu' );
define( 'SECURE_AUTH_KEY',   'T|z5#|tY,R^hN!T,&^970K<8DnXeGl*V:c=#Y^-q72IX;P}|Z}Q+Z<QPF=_Ag/j}' );
define( 'LOGGED_IN_KEY',     'rrbm*p>n`^Rf-s!-IbUF|KM|uf5Q=mKB7:-rDcw6E;8W5Lqm?8zh<>dRqwSw6DX#' );
define( 'NONCE_KEY',         'G(v~j 7[S)pizMd4-@}j$7KX{o6H<N)Ukx+(aQ+FVeG;nqe$-hOlsh?U7*WZ9M_e' );
define( 'AUTH_SALT',         '^3;~+~r/=bIu%A3$*G4wduG+[mI)Z5i.o996t;pU|p)>+r}AZ%G T*>oZ!/kW{N8' );
define( 'SECURE_AUTH_SALT',  ',MQKT`5AzTx,,^;pj(U[]-%A{uVm0YcZww5 ji9z^.=-CW3nN9)9n2$yPWw;VldO' );
define( 'LOGGED_IN_SALT',    'xE01N<(Z1(c:+g#>jSB3  w7.O)^e?3$4zwU*vVlnTw+ut5.F{TCaF6 c[m^fRH=' );
define( 'NONCE_SALT',        'c?w!{{&+l(t3O{h,RKCg7<(|.#69I~OvNl>7;-1}n>SJ?fbDnzk-v;mby!p/q!;6' );
define( 'WP_CACHE_KEY_SALT', ']!O>e694:W<fh/&,,w|_iCOn@k Wx)(g5+?l^TU8kXmA[:ai 5=}n`0FEU!Hww$ ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

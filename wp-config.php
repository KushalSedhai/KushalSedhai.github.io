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
define( 'DB_NAME', 'kushalsedhai.github.io_db' );

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
define( 'AUTH_KEY',         'T?t[b@.glTaM>[}nQC=m_Q;U;6CL;+7km,<f*Y|>^0|NC^<.p>(_/>e<Y$P(VW< ' );
define( 'SECURE_AUTH_KEY',  'G[m4rJs 5~.${ub>_nA67]G!|WLGA~6pmp-2s&r2 EK{fkHQnPZ}n|Bd:rM6V>K]' );
define( 'LOGGED_IN_KEY',    'rkb3[lT5|5av.(-d3Hp:WSVEK#&DhRSFi}0HCDLs<trTf3vR`[CCN67sTxzo5%0z' );
define( 'NONCE_KEY',        '8#I>r3z%6O:Ng oCAS-<|4e&}QXZ0UbfQ_gRg_1&&^*NDG W]628jm4<|b2aDo.i' );
define( 'AUTH_SALT',        '*uT1;t3u*tc0t|s~wefz%6dL!Vo9[(:~^trF<O.snf*Qnz`Dc9`;[C64U.zv8<t3' );
define( 'SECURE_AUTH_SALT', '!}IDzHBQmE^)x_9`r?7ZprgzkbFQiI%#0xM~f>3|jXrrZ,(gPL?vWaRSA4gf#Akr' );
define( 'LOGGED_IN_SALT',   ']eMYJaZ>Q2O?OH/dz2gs=IOtla-hF|]oMpPHWVT7/=w5iy;H}*rY$7mEsy@x@rR#' );
define( 'NONCE_SALT',       'o,`pmq]~Edvdn@b0XAhEz4sx^`m][xc!S#c|Y_.S[aqml1I]{%_2] &+;^m>,Mu-' );

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

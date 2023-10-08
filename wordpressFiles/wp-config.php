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
define( 'DB_NAME', 'coffee' );

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
define( 'AUTH_KEY',         'ejc$fNY hH|SAeC*&um6O1_kN}`w61]lak|0ZLvQK$#W;R^x9&&WGo`]{mQ#~ACG' );
define( 'SECURE_AUTH_KEY',  '_:K&i~7:>qr!RvJFAcWP<*>m?[+R2r^hkmn9BkD$5v>ho`NDV f,6[S$tQ)(Cj{.' );
define( 'LOGGED_IN_KEY',    'e2}_Z>d0L^ESpFE, :p!^;XK2%5.BUbU3Rp{4Jk32@J=*@@mQ87`*;ZlyBF6E$Dy' );
define( 'NONCE_KEY',        'KMJkiQsy%7,3{5L)=lg>:Zk:@>cE<:Q@(5Tmmv$W38h!K6/e.[[`tOhW=W3b*}Fr' );
define( 'AUTH_SALT',        'S#7-3b[xxruzh;Q3ib#)+5=N6CvEzfw[{lC7rPmU|<#E_7q k#DM2Xcsm05I?kAw' );
define( 'SECURE_AUTH_SALT', 'OGP:/D`5T~+.ULnV&(7q+_{_C%C.,},-B J0*$z_??nPahMiwkp5I!nSb/CP&4M#' );
define( 'LOGGED_IN_SALT',   '8_?/rfNIX+onR|? /q/G!x:ypO#vkG7-Hk=HCa;`=6:Wyk^OS)icCCXD/DT=q5wj' );
define( 'NONCE_SALT',       '#d9QI(gAy]D~Pr62~XO!~P=RzUJN|FL53d^$!`e;y/ufd0wzcn?6?oMx/9%m&0be' );

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

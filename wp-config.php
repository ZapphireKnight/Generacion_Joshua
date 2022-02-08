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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gjdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '4/0=UOPtYyFg)&z9D6&Rdrf5zPe=D+MdCb[)FN6{m]Ui~OiB,Qk7U+OH/o7sDlCO' );
define( 'SECURE_AUTH_KEY',  ',l6`.39E]T3uZV3wDa}&fO]RK)#wGK<p2d]i/d^fG(G49F=:K+Jc!IcJq&ca,vIV' );
define( 'LOGGED_IN_KEY',    '|<zq#ue_u#R@(/bP!TgCkxUqTv!4s>:Yj^%T.]!qeWs{B)YEK<11P>ZpGt/Bf.`N' );
define( 'NONCE_KEY',        '+rcU=FB0U]|;|aX6jWWEsV^l<Gzy~[3.pYL#{Um9K?qDUBxdFS4?h&msHV^W!$Sy' );
define( 'AUTH_SALT',        'nd>N0QBpoz-N#GJkZ;WNsH#GMH7>iJ|xqmR$fe?tKgweTPoP_)R=[:RCU~Gcto=M' );
define( 'SECURE_AUTH_SALT', '@3o#;HB43}*,LE^16UtJT/8Zdy(@;NSt)U0[meZ->-2!NHXg W<-`BkAt+v$ZlFD' );
define( 'LOGGED_IN_SALT',   '[ @f(Z9}eJ++DA-4;)otRT{4f=RRwR]t+2yyxr/zX65eK.N ef0f[&o0p4KJlo=:' );
define( 'NONCE_SALT',       'oPd~9=(Or>J-+l:$:VKdgB)t=~O*qG36zRjY1DfsEy@~9s{mh>U3v+(q:[X^Y4{J' );

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

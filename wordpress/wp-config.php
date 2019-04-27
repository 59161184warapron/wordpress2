<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p@ssw0rd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`8l/Vd@*;uNM2{K2{Vy/=v*m3?x}12?pQxT+|*VV[eyO;zWI0&bd*6@=)>rc/&3=' );
define( 'SECURE_AUTH_KEY',  '8>d4FWf[S/ie70iz-Hq3* m^:2JdPy:R+0-kjpD%bytP.jrM@{lQ~R8 t)M.S/OP' );
define( 'LOGGED_IN_KEY',    'RW:zj:.LQAI_c5?*`OWnX`K_I?%}tmSTO{hPycN3U.o9Z`V@cd8~nz.=.j}B~$Vo' );
define( 'NONCE_KEY',        'wYZ/Wu5]fGVe7W;>K8spoDfzw)*;VDaD<G;fi4T/IP2H#%a1H%{I0{Yjs1p77e%Q' );
define( 'AUTH_SALT',        ':@[p2^,K^hu`n|K-{}`SOwN<0`Lqi|oxT)[nW`,bI@-;;dX3<50?Bb7y ?Z.-1fU' );
define( 'SECURE_AUTH_SALT', 'HsJ4T+eb%$a{O3BHbxz*q258]SE?$)]9onp557k~l1j8NRHS`9#T4xA}44Gp/s_!' );
define( 'LOGGED_IN_SALT',   'O%r[z1JhR0f|bpokjfhCP@yX6:ei`~B}gEo*kV`Z_w@nQ~#|mQL.K:!Bl5lvxJkJ' );
define( 'NONCE_SALT',       '11*f:CJq1i+u~DWo&L,eTO5D?92Mp#IfTXf9F2a~exc~N/<y$= pA2?xH/s#,jfV' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

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
define( 'DB_NAME', 'MyWork' );

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
define( 'AUTH_KEY',         '<ZBhZ5s%0#Yc%Fg1yxf.Dhs8F6&zp )E_x!N1{X8+d]zdP:0lz/AkeSN,A7y`3f<' );
define( 'SECURE_AUTH_KEY',  'I88?mPqP+WyOJvEpT(aG~bJt[y~a|L^d*/16&$bLuE/kx^[jFGF%>CtS]j(#Q0xj' );
define( 'LOGGED_IN_KEY',    '<U9Ny477zJ=|1FRQWUU~b)MmODA)83Zd0(?ba`I>5gRF=C$7f/x$3[>NG-PnQo8`' );
define( 'NONCE_KEY',        'ZZk!]q]=7MYS4i.Y6^%B(8h$/@;`k7,K}lf[WR}:.4U I aIcV_9*Ft4%Ub2gH_ ' );
define( 'AUTH_SALT',        'jA2j3`i+5SUh#4bC31*wZz1)t% dzO62ZiB)P!S K9vOZS9.mL00Hm8eIUqYSl6u' );
define( 'SECURE_AUTH_SALT', '2AvSGo$>1iK$|oLJhNJjs0t^EZuH;<i0{spC+0, #I>mpj:/.:?aZV#ML?GEIB^L' );
define( 'LOGGED_IN_SALT',   '#+|^-[=NkkAX1?M#?T(bU)WG;bOalZ,R&|A^wL#kdtx7vA;k&.ZSp{`C82U|mJ[}' );
define( 'NONCE_SALT',       '.yZzEr:};6tvN*/<93|y&FH1T[*br4Ma+[IrQqXo6|t$]6K;4 %]IIh{<O2=PdQb' );

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

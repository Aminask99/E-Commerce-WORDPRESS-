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
define( 'DB_NAME', 'testw' );

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
define( 'AUTH_KEY',         'U`>d2od/#&UO6`IOoDccAKbzY99#_6vv&F2GxD;bC%glQ$&x(TT(yL*xrS#R1>Sx' );
define( 'SECURE_AUTH_KEY',  '<V&R<)JtT{iuwXCus9IpiQ5*#bFE7b`r=,Rcr,)%Ver_MlN=RN(|y>>-$%b`Q*mt' );
define( 'LOGGED_IN_KEY',    '`2=yxB$;<yZJ>5ocWeFW@+3G0B!eSj 6NLD~UT;/#-3W+;~Zt6{d&5Hi,LRgQBg>' );
define( 'NONCE_KEY',        '=J%<l>T/gW6M^G~X!~-h:lB(]u-@M9FpfWdd$aEkm[oi*E*h0 JWUO;Px2q7!0*o' );
define( 'AUTH_SALT',        'L!V:4h2cS=gWfh,.AGheT>of:t|4PazEgIyQ&#aPMF/BI]{-2a7QEo8m)W;xWwi$' );
define( 'SECURE_AUTH_SALT', 'tE~QS=Xj3%j,DY<lE(Dv{*)E1c.S.7ouwR*A8gCj]]RRknz$>?j7z.Q]X>u6C-#B' );
define( 'LOGGED_IN_SALT',   ';ezj8{F#F(%I`N,-W#$TG!bVqnmj0T^{h*q!dCZ_lXo5(Z)P$u[{FF;dB;uV?}qu' );
define( 'NONCE_SALT',       'P0{mP[ky4~u1^;q@/s [$Hw.+?3V^]:#]81}KSj^O<8Bpy4OBjr)o?gO-HA+cEV~' );

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

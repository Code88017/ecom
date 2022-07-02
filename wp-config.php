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
define( 'DB_NAME', 'tech' );

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
define( 'AUTH_KEY',         'O5`Ck1`;Ah`aS$c2p<GjBy5 ~~TFkD0M<nm]?{q?q6(:9s%W67VusY:VP)M-h~ B' );
define( 'SECURE_AUTH_KEY',  '4)pZw@=Rs3oqn$X%XYnUkOZqH2HzNaDp$_^,A,IC}#Qjy6Zx7xRVIznz*M)&>]bO' );
define( 'LOGGED_IN_KEY',    '3?&&7-:y(<.?=`k/PK^9_G_w9j9v[AiFEF@I1.mbL_7Nk,gT-#QK{lZ?3:5Jhpzv' );
define( 'NONCE_KEY',        'j;726UZ&NV3;}9_8!9@r#2q <v:V l_d;<a&5y#x$?MCxRl>-&N51.XtUF$K!T7Y' );
define( 'AUTH_SALT',        'N@gBVPtkHt.o0Xzd8fQBhow0W7r}ol[UI<vBsqu5IXZ]13#yu*-[X*~j?!|YA|LR' );
define( 'SECURE_AUTH_SALT', 'W.h=LtQISfVVnDqb1*X.Vul?C-WGV&9(>. )|&I^`,G$fI:`}NZ{.(S1?&SXYhln' );
define( 'LOGGED_IN_SALT',   '0mzJI;/+KWe^|-l +hX! Kl[xja}_BZC`$T/yZO)Pd]M-u*T;GFFqle1QKS`k>#X' );
define( 'NONCE_SALT',       'ku;zoVs^$;jc%~he]rQ$Q2~ro}+ {Rv3ay.Chru5*))FYvpan2,w.9ix,)WK*60`' );

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

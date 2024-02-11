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
define( 'DB_NAME', '604273_rarerooster_pvcmc' );

/** Database username */
define( 'DB_USER', '604273_rareclb' );

/** Database password */
define( 'DB_PASSWORD', 'upatNevernv7' );

/** Database hostname */
define( 'DB_HOST', 'mariadb-153.wc2.phx1.stabletransit.com' );

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
define( 'AUTH_KEY',         'WA[h7E;t_G7n{mSIcUB7>!Tx%Cyi07{A4ik PjR7qgg/n{%!N;F3F#$pW06B4vUS' );
define( 'SECURE_AUTH_KEY',  'zcuK:#`Emx!o?%5X-mg^QY8r]GL)E}:(6W0t.O6%BNf%R_m3z>nm5/U$ku<`F8KU' );
define( 'LOGGED_IN_KEY',    '6co;|[fUP|(;0NjZ%yd)+$%si6rGUG;yi}Iy3.5w`p;*n@QXcgA?+#d;cc!c%`fy' );
define( 'NONCE_KEY',        ';!ER^4R|MaO{y<upFV97NXouYT?a4Y1r ,>a$)sKWOp}nD>aSqMp!SL&B(& 4;kB' );
define( 'AUTH_SALT',        'K.,0{mAc<+Qq-anuIUfG(VZp$Qp`;1R?.|Qzh0WM;wq8=6#SvgTP(&B?p@>Qz:DT' );
define( 'SECURE_AUTH_SALT', ',O?9U!9Q;*U8`?9r-Olj1tJK_vCM4u@Ox+%:1y-eS%m*qY/9PK4mId%yPw*J~]k4' );
define( 'LOGGED_IN_SALT',   'Fv]E<REE0[`99#K6![b.x3jsgJdo)HDnU_gVky-is=[oKEPIQ2([nb%0(f^R:f4&' );
define( 'NONCE_SALT',       'vqKYh&T|ceLbX2i,/2/X)D E((!gEdD)&$jc+U-cs1iiMP1 9?O45T1uh[Vq`0Yf' );

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

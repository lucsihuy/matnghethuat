<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'matnghethuat1' );

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
define( 'AUTH_KEY',         'Y>x?&Gzk;R11#ZUlpitK6?73:N|l.HcN@Kf?2;7aT,TQPu#i^awTB~LGx65[};sW' );
define( 'SECURE_AUTH_KEY',  '49#&w!u2@~0p}u3[znX]xYoa93JIMb$}`_~R!FRmAssD-Q;w]UTe32R{LNy,w5mU' );
define( 'LOGGED_IN_KEY',    'cdMN@=lahXFR>D$>>a[_9&H^1%1i{$SW3(R)0J|MYq)y&_4p{<DZG.$=-inc`{>^' );
define( 'NONCE_KEY',        '(J0 jz@U,4c%.kP^SWkG,/PJ?rq<f1p] WMc~DCJ,6ntWI*o&*4U`$FdWdy9Whp@' );
define( 'AUTH_SALT',        '9*L1g!CUcn![$^d5NAv%@t5r<.&y@Bge;mBLAQM4Ed)D`bV3BrHM.gu%V6JEzTj%' );
define( 'SECURE_AUTH_SALT', 'G16vcBOG3,|//zH;3+^/_Ih)B)j&I<uIz)|Qz<sXaW<H1Nb9,(f5*(@[S6,Fgk?U' );
define( 'LOGGED_IN_SALT',   'yF/#>!zh[yR`2<m,P4(]$5S_@Lvp{C_C-O;Z-s.xA1|Oc^:0AT7q2^Z3Mcu1PW+H' );
define( 'NONCE_SALT',       'K]HJ; p!?VofU1Rhyl)*$<~Y2!Xkkh*W@!es#>IA1Kjh:&)r(y=];>b,-GtmsS7*' );

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

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
define( 'DB_NAME', 'Talal' );

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
define( 'AUTH_KEY',         'IT,Zj}p> Yl|t8f7X=64zR~cD/_%g(hszR[[K6Bgr)zw<VPq-@ULs&C2pQf$8@{o' );
define( 'SECURE_AUTH_KEY',  '>Qxx.8r2/0KyNw~?+(&C3_,#|^aT26*AGeAxCG=IjPJS4CjI/#%wUR|vcT/}LGRk' );
define( 'LOGGED_IN_KEY',    'mWt!e/1D4T7{Y^#}&3KBS8)F>4cZ= G`bw:DLyWn$Nu7xpm|q#FdR{tX)nA;/E_ ' );
define( 'NONCE_KEY',        'L?{8@(bMV_ONmNW<qXlG!&=ke6@=DRI&o9@CSJHQScn,n|^06LUU,r9sOVAc6yN}' );
define( 'AUTH_SALT',        'vL/e.+ q- `QosY2vI.TAv<)61Q#_2$x)=%h &aP}[e;~p}-qgaLi;=V)6wh3vrC' );
define( 'SECURE_AUTH_SALT', 'fS$W/ial/dB8*TPLiNo{m-2BR%!hK~O[ui~l %~4K>4wY<^NpfVs |i%/{ccUf+ ' );
define( 'LOGGED_IN_SALT',   'a%/Zg2`cM0G~W7uhk(0[l/LV)jBT$6`t{9m+0@i6^UJ2^/nu=v_(AW5$ZBN:;:]y' );
define( 'NONCE_SALT',       'fiAZ@@,4Z;@DdT;SHbFFo60d`R`Bl/gkYJ%sRTkyJn{U8I(amU/$Jq!. KZP7Ek^' );

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

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
define( 'DB_NAME', 'turki' );

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
define( 'AUTH_KEY',         '+=~3MGj1&.p iRdWz=Nf^6W~GjVNv(H9PZ`)/T~t?.qZ Lb agGar!%#>Ne?Yb,k' );
define( 'SECURE_AUTH_KEY',  '2%~cywEK;QPWp&CzSg3s+xfS376cqL4Y+VU3<^6{i5!7,pD`;NkZ1lCn!c4*xG]k' );
define( 'LOGGED_IN_KEY',    'KC8tb}=!w4>PG:]RujLlK}AuMD!XIL[4WVNRaPbZb=_LS~^,6:>JmJTzeufsLT)k' );
define( 'NONCE_KEY',        'C/HRL<2F6_IV+*rM=Rq#<&Zzbp1GIs+ATF$69bXI)`~3>,tQbYU1GP:r=pynN{pk' );
define( 'AUTH_SALT',        '-&d/d4t~1H1<}(rhNZ>ejHAq4sbm&V3J^Zb`+|>>4/hczE.@K]67pu;OQ1ecdEjd' );
define( 'SECURE_AUTH_SALT', '_niytvIAIo4L y?AU=l#SpBmi0yd|(Gfnl,ZlNEF9Q-.8 /PZ{3>6UGw%%f>V&Go' );
define( 'LOGGED_IN_SALT',   'll3.XB_D!gm-1|i-|C3J?+^_0[+#LN5z,9[tf.5L3AlbZ^W6BbxiGm@>%0 k%J`;' );
define( 'NONCE_SALT',       'YT+M`WX2:8FEk( .YYjik%sZ0x`IDX~[fvFH(,JhyKta,.2{GZ6G:UaAa5VQtI`y' );

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

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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'TQ|]UZ|r[%s%ybdr#=9Ps2jiEbl7_vDps>_.qv]sUYX|b+XBaFSt{0!.@~S?`Fli' );
define( 'SECURE_AUTH_KEY',  '_-odVJg#.t[n(+?XC_,D!b0^Oo;ZIKY;]1pc{QzmoUsT+20]12:c1t>md^~tZy(i' );
define( 'LOGGED_IN_KEY',    'p*N;ztZW8^W06P#+|b2r[|V9ouslg]FZRbF(&~aWs|n5m#G]3Ja:=[O) s;-8[uY' );
define( 'NONCE_KEY',        '58vg=`aN0#E|:LE@@MBTSn`YeX;1yRP,H[n%H_4&2`TQxW+Yz1cPDKcm 3{Fm5T9' );
define( 'AUTH_SALT',        'Zuv@K7q${10(b0?#&(}(,uX?9.Bd:|`6]KWN,#4l!H`$3[Pm@n1PqtuAigh.=`@f' );
define( 'SECURE_AUTH_SALT', '7#+RV>)1Y]@^Gp0}kWXt)CN?.H)v-d;~Uj:,X[nyUH]w,J/T?^dDD$Pl.:^ySw&%' );
define( 'LOGGED_IN_SALT',   '++j(iWVv{rcpT|WqKH6s@eS4R^?<v6c[f, $yGx1KTbLg?9l@^NRQtq{HnU&$nL$' );
define( 'NONCE_SALT',       ' 16kI i44;kU4%Vhym0P5OD @ZwW$$,El);kz4i}`lPP!0&{AA*0xwTqjI%iy*up' );

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

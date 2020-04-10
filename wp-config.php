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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'egrow-private-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zagitariu5' );

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
define( 'AUTH_KEY',         'FzHvO41M)uQ20]EK9K;tly@%>7eyD(zDvZPL?xe~J3K3;Ih1( /d=kxM7WI^O<BD' );
define( 'SECURE_AUTH_KEY',  'C)k0E l&<aodexDzt4I 7A/=uC`V=?@]h,luewf1t8g>1&Wk%!Te}8,`Pqh-oY>P' );
define( 'LOGGED_IN_KEY',    '|Fh<+?#~1$/X05U[O18qJ~D%u{U A]H/&BfyImkN7@yUi=(NlT5`/k?[p>C);%+(' );
define( 'NONCE_KEY',        '7K#$Am`A={DIF{esCd?+#>&SuAy<~]cf0*{;46I/p]@,5ReaILL| P_C|f!)xi=a' );
define( 'AUTH_SALT',        'Z:-6Y5<ya5EVHGL:<CMW=kr_<N^B&ayA*Y/okf<rW[>V[<d`v_cDpKZ]`}-Jo~(T' );
define( 'SECURE_AUTH_SALT', 'VcBuGd4KsN6:4={M~fNk|NY0ONeO{&+nQ7fm?RG*rV`9@,Qbri~AemqNZuH}Oq2O' );
define( 'LOGGED_IN_SALT',   ';A}6TI1#rlF-I-mt!T]^/YX(;gWTd{@3IrG]juGJTm_r.vrpk;67{RdNR!/XJA(w' );
define( 'NONCE_SALT',       'T{(dH^^(<XO-f|.bY)<h9uR=Fe]TXp54jYx^L2 49jnNU5q~AO/buk`:{rBqL?x*' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

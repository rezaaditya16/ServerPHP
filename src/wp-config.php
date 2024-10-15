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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '-S>8E}dkUH>`DU-Ia>-DNM3z6e([[]DIN*Y+uHP{RwER~EL=cng5(p@7-0s>O_Gs' );
define( 'SECURE_AUTH_KEY',  'rgbv:g4zmZzfJw<~_,UD2@yG]6v`5HU:Ise P1]RAaSQ-cEO#vb=?M+3ST!_jhy,' );
define( 'LOGGED_IN_KEY',    'rY`o9t4Th}VGyaK6rv3:x9N}epv1EFA6-M_&OyGH.g2z3RY,prS+Vj z1fwgssag' );
define( 'NONCE_KEY',        '?]u(0qy/sg,!I_x1{8QRJ^Eg5ah:#1(J9g~{%3O{0jre>eNxXt)bEH<&3%VxEO!`' );
define( 'AUTH_SALT',        '{$;&D$ZZznn<7)w+l7S81f,YsQ5nbI{A$+^hn4lPnmT4k(93e+x/wE^0paT01=+#' );
define( 'SECURE_AUTH_SALT', 'LoT{UZYv)qWy{Iy77u%qO~YtNl19[AOJhFde7ha >y4$]IY*<yx6}T$fj-14@CFV' );
define( 'LOGGED_IN_SALT',   'Y5w9P_}p5n7u,B}G~Zu}8vd&Cy[~NC6@%YW}6*x~<acVtxWLdGc;:mHJRNVK>s1/' );
define( 'NONCE_SALT',       'V<lhTK` ;DHDaDmG]?$2W2].G~O|.L)s}<FoLqZnOYXog-fW?,?Lo{] #H@`(b%W' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

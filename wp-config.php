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
define( 'DB_NAME', 'oma' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'xunc/yMB.?fT_!u92N=KIVQ%p`v^R 4oog KvIae;)SPap>#VugWAJ1N5<fvMqgX' );
define( 'SECURE_AUTH_KEY',  'j++`:qKg9vI%|4&nT%pfN$UYxoOo!JFo^8t3]MYCNVeh=A~Zcd7{LuyQJPs--v)m' );
define( 'LOGGED_IN_KEY',    ')s3:`sQ~0lel;;J]EqRr&qH()D[CXG&mk@4kTLk[|^T_98[?jtP{/P;+4~~Dk`5v' );
define( 'NONCE_KEY',        ']ITXo@vioY4f[G>6Uz?6wkXu7N[@Z$|8G-e+Q+G$*|aNbQ&donJ{.l_h&T /oR`i' );
define( 'AUTH_SALT',        '=.GLA.nDC* |b`uZ:8.(A*o5}/vz]cgu@!KBjf9z}65BaT#XPY$z1mxW(p=}i1|z' );
define( 'SECURE_AUTH_SALT', '2t>Ob:[md3(CIvcRAZPi<))-qOAIe^1%l[@ScFj9$Gl@.{N?q4,4{Z[G-*R4UiB`' );
define( 'LOGGED_IN_SALT',   '$ms-77yY1k=e<V5h(Cn7z07j$=~xtItgQKG1kR0/x0#uZi, T;.{6Y;LOOsJ!/zn' );
define( 'NONCE_SALT',       'mG(aT1erM4|X6cXLv G*MYX>)p6&,#xdR0U**GxhS~o$ntqAF~ Pu o$}B`f~?TN' );

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

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
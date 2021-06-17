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
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ':@}^N)IaVe!]V5a%Ll|&zEQ,|_3LY8qjBcb<Pf`yF$2]vnSN|JM46@:s1vc6>fLi');
define('SECURE_AUTH_KEY',  '#t+^-l`aZW!h:@XQ+TGCoW*Puu^g:w>b?k|%A-ao>@Z}1w}NJxY:T8qKYmYzsk!F');
define('LOGGED_IN_KEY',    'DmZe2{/k0.O-7T@-1C^Lc{KQ^%m>Ag-&#uyR3$JodFC2o8u-Mqd&W;+)iYrKDN_+');
define('NONCE_KEY',        'G7K-rxUU/`kGuNS+QfYf<5`{CuT[iNk~yPTB}hbN |XbNM)0]Do(V}Jw:HF}N3_$');
define('AUTH_SALT',        'l.hU@)T#+%/D+8LA^Zit^O(&[bd-=+]4RAcwb.gl?LGvF[ygryQX/=>xoU>0n~yX');
define('SECURE_AUTH_SALT', 'Qe3<Zo%=h/kOyN 9Y!R1dm-ebtAy|EN&!18aI?R~l9b^j-Vc;N{GV|uw6o-TNRiZ');
define('LOGGED_IN_SALT',   'x}!~Qd]Unz5t08 6n1D}HkD0]n26+V&(C~csng<MH>o|&Yjol8$xDB6d8Wbll y=');
define('NONCE_SALT',       '-xOm#VRHq$*-|xJ,IO0+>@(:;-w.o]#p}8V+K,*]g<2._h5U~fm?).I#BV)T?kIO');
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

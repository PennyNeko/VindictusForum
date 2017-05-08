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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'pennyneko');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>9aJ}aAv(H,lGO*.Q8nmmpb+`+xx8S (-ss8UKxkh?47+X>eI0e1PtC,G_~xKP?R');
define('SECURE_AUTH_KEY',  'rG4nZdI[%X<x%}s4&oKBvDny{EX+vd,4[>nmPp(?9,hx<z{$J]KKaWBk2pDEUzp/');
define('LOGGED_IN_KEY',    '_J6!|vdyS<e.>WF-_.j$V;(DxZy%/[x@7fAhau)CRk*elao+6pt[Qv%MxTtpyiR&');
define('NONCE_KEY',        '7N_-XcgFd6.T}t}h*?:.[z`]JV]wh|YZ]w`Oh$C?JUe6e[%@NWzX{gz<x]kIufv?');
define('AUTH_SALT',        ') =ryFQOcqAn.%s 8umT1YaH{6P.z|zjS$2[tQYm([yi?|,oi2T5{}~} >X9PUVq');
define('SECURE_AUTH_SALT', 'McXJHMGAT?>~D:N!HQm17,O&d;>$<`TQZd?Q]:[cv&JLqK*3Q#38ebw*<S.gk{i4');
define('LOGGED_IN_SALT',   '7cBz@#y5#D.k@RbI,dKW1C^H@[py}K0X?x(YY>0P edUSQ-l*ga5zoaOaI%6WW(<');
define('NONCE_SALT',       '(XAA[RmP_CSSKw`U&]kv@KZwI::O+q7<$4.Q Fa$gZf|Z!=e24A5QK[@opvY +AJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

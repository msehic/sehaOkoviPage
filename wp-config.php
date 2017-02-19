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
define('DB_NAME', 'seha_okovi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'b-m%:$t|84HP><tcv_$%1,:Bg&u;uA:L4(~:.]PvcT&Iuvu!{tnf~/{{hPh85*4c');
define('SECURE_AUTH_KEY',  'dNU1$);E(6JsL||D5zp2|m 4+t0ky0kf+neOOWu0vA#}l%aNVBkqR.9|D&~$G?y,');
define('LOGGED_IN_KEY',    '[MV5ZkmZ#ME-H!6I/A%j!~iNXx&91LVRCU>HA8|N{1h7OsN!wiV$#tjd^5%,=k@>');
define('NONCE_KEY',        'KAOys}pT|Ynn;x#yv8EC`8S4@F$c}-w/3FZ74ZxU$JEEegzer`$Vi5rQy[QzK9k8');
define('AUTH_SALT',        'iMuv 5Cta#HNF@P spHE>14moS^>pdme=tnR;f1Q0f{YVjvk.iRPNnP~3MGLgc}j');
define('SECURE_AUTH_SALT', 'LOp`c4)hf(W<OK%y}[IJef2<v#.gcw=7o#*F1|Tj:*Dl;&,`r%VnCFQW>WdY05Fz');
define('LOGGED_IN_SALT',   'r2Sq-+A4$#rNe4+lga(T@o#w|g&(I[/$0Z&~24>3CiE-av)l$tjuFcqzpvDD*+Ao');
define('NONCE_SALT',       'd DaFYqnyBx.i(L!s9WBHlaj3o_1n#P48?|ZvLt3(D/;0Ah+I:&LJ-pP94jF,1P%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp';

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

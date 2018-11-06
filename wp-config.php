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
define('DB_NAME', 'utkal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pramati');

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
define('AUTH_KEY',         '^lzwcZw(aQ/oCcD=inh8/#We(^7a73UAsZ{)4jg~*1V1~O#:f._0K`!k(co3p(&g');
define('SECURE_AUTH_KEY',  'E78M_:>tyI+eU W3 8FRhKa8.B}U{:U^TOH%6Mq|61e57vh:{n)I=zQ->(cyp&J.');
define('LOGGED_IN_KEY',    '.2#vT7VG(RlR.cC1kcC!>O-~;2]|mV`p`xpDXb*^5,QofYf?Y{ aHx{[7M`zNdN}');
define('NONCE_KEY',        'r4=gS#M9N!3csJ9 !~hZIspkf<AeV! Mm:)?o2Sm4Q.PGr)Fa6)e>%+@vEv]lGZd');
define('AUTH_SALT',        ']|bgpf=3Hmm[R}z6.v(ULT&nm<5m3PNA}Ig*Z}#@-a(^akOM-,?;%3m]wY$J :=Y');
define('SECURE_AUTH_SALT', '4/*}YwbS4Dnb~S-E0^)SX+Dl@d#1HC-1%WT]N&JK@Vm-^r=!kAXtEd+sGE0L>fKu');
define('LOGGED_IN_SALT',   'i*-dQ}~OfgL>qq(I,`%A06{PZJ(o,0?9a|:yJQPbSE60~[L!`as?yjdN2^/cLCPb');
define('NONCE_SALT',       '3tV+5TJ}HJ|0Qd&U|Do7uC/V8 4G?s7P[yb{E !!L4%lst+Mv&NX-?Hwe&r3=n1o');

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

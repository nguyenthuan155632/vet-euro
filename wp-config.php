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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/html/vet-euro/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'vet_euro');

/** MySQL database username */
define('DB_USER', 'vensera');

/** MySQL database password */
define('DB_PASSWORD', '15563200025ff0');

/** MySQL hostname */
define('DB_HOST', 'vensera.cisdtmhkjjzs.ap-northeast-1.rds.amazonaws.com');

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
define('AUTH_KEY',         '$2?bb&CZkHD;kQ|c]+$q{]L*mg*MO{6vl=j@!M1&1L++ i)[DfL3X<5m6j(8rvf6');
define('SECURE_AUTH_KEY',  'p3W*$RiHDhFFN{^;c4Sp7c2RBC|}>{[B9&nVS6 L3%>A5Xn OJ)Tos]9iQB38k#|');
define('LOGGED_IN_KEY',    ']CJD2ts^MbW:cP5*6GR_K!/=DN[YF:9C`TQL7Wc}s9L6B~]vj3p.p0Bf$.cFB3~<');
define('NONCE_KEY',        'D7|)4agz_7+!X4i|A*3SXl+z6]UM/A?xH}x8*Z{:(^ABS1AOrNCiKBJizQTKP8cu');
define('AUTH_SALT',        'H+tLf)KZ[p<s=ve-_)E!zHjII134H=R[6ln&5KJ2C&LJ]%ka$Gta1rWl1|%|06fB');
define('SECURE_AUTH_SALT', '9}rh+`FFPMRlAAzq:Ws9^V$_=YW3`gkmZau0{)n$Z<w(lyzrIj)bA[gR3W+OSOi|');
define('LOGGED_IN_SALT',   'pp;f_~{r${s&R?7+dkXD4^:EnSeid ^6T?C.]:w`aN^dBL@^y!gF.g}1AZ{d[8@m');
define('NONCE_SALT',       'V4,r3Q:^l j7_$A=rEwa.MRUbAw>F+mbTHT6;/~ 3z e8tu+1Kz0s583BZGjp1k@');

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

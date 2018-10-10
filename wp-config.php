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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'u@7UJo.p/vvqy6y*2OblfFR=kyGw`]BOQ~c$,4lv3i~ti<A5b##&SV.]>t~^aZ&$');
define('SECURE_AUTH_KEY',  '<vL/JfTZc_m}?-1!v=e#{DX)DX,3x1}C8;SIEOxjx)RPn`Q[Y:]c:_s-B6HTPj8#');
define('LOGGED_IN_KEY',    '2>;S=S52Fht-L~_GUA)y)*zk[iF+Z|`s4qQ8d-WoBE@!>;,KN}-&-9AuF1gdXu5{');
define('NONCE_KEY',        '=w5XJS0R[TvX=9MVo`o<<tAHNAe~Cn^,gp`>.;5H=l&2?J</Amk/&Ak?n9!@rL1}');
define('AUTH_SALT',        'KRq=7uXkweCpmL.;GEf&LE([jIenLh6d.N$z9z2Q.=MprIa5n=z~<KY=+NzGRbZ#');
define('SECURE_AUTH_SALT', '/./?tORbvDtlz]g%}KYVYwYh|vs592lB?&D/=M[mX|MXHl]>~P7ePQ?Te(x5KMwy');
define('LOGGED_IN_SALT',   'e^?Of^-Sw}zWo#;-Ew]R*<tL$JG&]1,S#:6^7,S^Hlf[P[nKB7<Qzu:o@9.w6Oxk');
define('NONCE_SALT',       'F26vlL5x:ut*6Opd~,se]-s$|e|HNnH**iOs#i/{QK^D]tA*>eso+6=.Km? TT1U');

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

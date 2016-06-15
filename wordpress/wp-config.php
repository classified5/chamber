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
define('DB_NAME', 'chamber1');

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
define('AUTH_KEY',         'Z{$^J~nrS4NUY>8fLnN=b!_i=:<-J:Z9K$/oyHKbWbo;au-AR7?zqHK&d)_$*{WV');
define('SECURE_AUTH_KEY',  '2LWys~&%,SU<+SsXG:WgFy<ffc!}OEP6V/ ?Q!D]AX?FV.%$Ob#Lu`^eWomR!F[#');
define('LOGGED_IN_KEY',    '}M7-GjW1fQ$AuywWq&qx+ `bJqO]6Y{OGf9v^Ny[#31%ZIn96S?OvmRLc^XeHM?2');
define('NONCE_KEY',        '*TIZv~N]Sq2Dbgo@o%GuMEO>;2^G?v1qy2TuM$%f@o:JrSWFQxch1$9G*FYPZp/K');
define('AUTH_SALT',        'JrEMun.OCk}Lq-}^,jdMXNVS&cK+wm@rgS_?[1>J`K/)rp|W.$8yX,;&$->#%yua');
define('SECURE_AUTH_SALT', 'j;A?Aa79?b^5_R[@PKW7^<c%N3e?uuKpz5hWnRLj,Ks7H0%h!${-GA2NrK,3i<3$');
define('LOGGED_IN_SALT',   's#A0,k#@3cQax0q)MM$a=$=Lb|pNa[18rV$XSc.pwsO!.w0ge <KHN<4~nO4(1es');
define('NONCE_SALT',       '3w}jMJqCx4]h<+e2W+R@Gz& ^W[D5Wa-Oyz?8cdZd=:(6%wu@CqEKIG:]9x,A(mm');

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

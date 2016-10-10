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
define('DB_NAME', 'wp_Site');

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
define('AUTH_KEY',         'SS=_Io}JK{jGu(v^$uYkdQ.cHn4ps.Xe]A=[K9l-Z/R_<74t.jESu^>=;I#D1`.j');
define('SECURE_AUTH_KEY',  'vTU}%`)b=V$3&D% 9N`@Mb`h;-w<EF>6uLJ%2Kez8XO#T%QL8,w5r0Zn8~U?W{>m');
define('LOGGED_IN_KEY',    '[E4w.75?T|J>QV(E[*:eXID+6%/4c_j^ZP(R;Kn{BQq];78z:C?V@ {w7U9ILxMd');
define('NONCE_KEY',        'G#QV] 4!h O*0(u.Br< ECtV{U$zb h9[*jH#GNy;n*r_rJUG&Gp+TNQZD{/9iX+');
define('AUTH_SALT',        'xlHMUln^}oAA<5{CJ &++PwGpts+B#Vkdr`Qu0HG@Y/P9|keu/X`VA(%-iGF<EJL');
define('SECURE_AUTH_SALT', 'c3k<vYld]iwka eI2^3-EIGfh.,1N s^<}DmAAGk>O:7]Kb!s3Rm(8i<u_=(4F>!');
define('LOGGED_IN_SALT',   '!K0AI}o`([z=tg.Gi^maB,su(T<N<%NZg)wN+jRd{RA_z1IkfANHUD</nJ{?{_U5');
define('NONCE_SALT',       '.?DWy>gb~dzIed6h2`(4Q/OV}vL7gYdC-q5SGkgRHzntnt0WARAA|HWHA^uvChlB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'op_';

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

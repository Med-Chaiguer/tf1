<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tf1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
//define('DB_COLLATE', '');
define('DB_COLLATE', 'utf8_general_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{_b^jOO}L|,/dE%-5~P8%8Nwy,!R?o|T-RYgNC+UcFvFS,A(-9/52PmY&P,i$;5t');
define('SECURE_AUTH_KEY',  '*R6,eM@vNR7`{4NKgtv5C5Tvz@9?AO!IEA2ly)c#xk#1 ZOYq5cf HY=t#rw44i1');
define('LOGGED_IN_KEY',    ' fIze#89tRRVr^!)7g%oZi_SSdi*WL_KP99+EvjRe7ng+I,@UvWCiPDy3-DVTHxl');
define('NONCE_KEY',        '<>CyD@j|+u5ju9f-T*Nws**nU1rj]SdE%?+)QcSZCzj!LUx&QepQ%`0QeXU/!d:b');
define('AUTH_SALT',        '9ORcr2$mR1_X_oSU~/97s|F|?q1&Xp+g6p?+1pR9RAc.2{Q9cj-&&CYQ&ArI>=Aq');
define('SECURE_AUTH_SALT', '3A@Jo&|TD;T[X+Osxj2s)fV%z:){V6sWHwKO<1)XRb| %z9up$h}q:z)<}hj-Y&6');
define('LOGGED_IN_SALT',   'D)l0bVDd4d~UQ,)=z>lhE^}#C(elT;CJxRBz,bzOs{(tlcKQeI|<xV6;{t*mCi)a');
define('NONCE_SALT',       'zVS/*I5yqZZ|l-35q3-rHoyOCUKtN2r<pxbDbB5(KB;S@Yaw6d/%$xy,$W-cmHA]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define ('WPCF7_AUTOP', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

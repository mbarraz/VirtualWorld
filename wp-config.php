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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'H+9e 7o*( }Ou89.Y4fuupXN ?;E2% l$NL>&4$3~(5(9o<%HmL|mr*^i]5gv%[N');
define('SECURE_AUTH_KEY',  '#|?_dkT||khL9(C@dq-h=:4X@Xi3R|?fC$Wzy=[uG<+N!z#tM.g/P~I|)_Cb8m6c');
define('LOGGED_IN_KEY',    ':LKX d~[HhBd VNgA#_%(;pQ!?xP+,wdm|Z@fl#!QfvjiCg#I7%f{[Qzh$LFF]T@');
define('NONCE_KEY',        '&w+cC_t/r[)t.-iOs1rh-t{f?i`SJ0Zz5p}k2.,FKy%ocSgv;We_o<!rSmw+-(bT');
define('AUTH_SALT',        'q|hHxvSxRQx:C)|oWk;$Cx$vzlUq~_zp&:m7?=:L)2_dBZG:3&;0FLR#K@jgkBwv');
define('SECURE_AUTH_SALT', 'wR(+QaBD2<{9Mgek--eho7~7]qLC-T(R>Wb)[nvSJtkf8aj5$Br.j.]U~iyR(H::');
define('LOGGED_IN_SALT',   'L$S2b?$:5]:k@-CY,aWYd_V+7*3|bqahQm=pz&_EW;)U}kGg3KuQ66GLJw`GPTw0');
define('NONCE_SALT',       '-o<Q0!e?XTE HG!2P1 f#IozU39pv;Cd,E{K3+uz2`H1:X+_C#~`sXSaW0rvGDE>');

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

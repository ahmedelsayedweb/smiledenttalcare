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
define('DB_NAME', 'smiledenttalcare');

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
define('AUTH_KEY',         '3H^mt`=Enn`z4Ud657!kosG&Ki8I N}qu.)D_We .w`V:g%u4UhXK4$1R2|b#(qW');
define('SECURE_AUTH_KEY',  '}%R8WAcfih`QN1S xJkwM##Y/5yARWwt_<vz+=Gx*,fyq@N$.8c1l27Q5VGl,V^a');
define('LOGGED_IN_KEY',    ':|_-$MzC:za*x]Lj@lv?R0!jgGy=CK..++@pK=zg=t7O8bH*3oAUrC;t?d$47RX ');
define('NONCE_KEY',        'OE$>}]qdt:?yy.$v0dKSUxWeY31qf!uuJa@E./GDsR4ae4wF*M1Gb^godHZ%7.}:');
define('AUTH_SALT',        '3RU$RS29/dK2o9SRzMK(TGi4OYD_]=VG)p?o(~[Y51E[X)M@z ne}oxz0~?d!]zA');
define('SECURE_AUTH_SALT', '$W/WVy2DDFV# [EC4<zN=]=%i#)uc,Q(ucwFU%amiwR uG~0%1&wSC%#1<t!zNW{');
define('LOGGED_IN_SALT',   '9;c`TWZ9eV)%yI%{#f TwyFopMJ!&^y]olD&1qRFv(M3OOEvV9`QX/JN/n>Y/BK7');
define('NONCE_SALT',       '}i{jZpO]^ig@%ea.1Y]W2qR?+5%x2(<|d/qVfpm)<)M8*a;:C`fCt(^54R-4PJw ');

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

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
define('DB_NAME', 'blixt_db');

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
define('AUTH_KEY',         '/y&Vi;6ZT8x`*SE&AA1Xe{nhDG|6?IFX@x4%wbh<TFh!j~|hSS1dX47>]a8WjDXe');
define('SECURE_AUTH_KEY',  ':F}U0R{LV@`b6$OaQ(^AQRW3%Kq`]ok>p7hA!-G1B] M+1xCO!}npF7Z>EsjRYO5');
define('LOGGED_IN_KEY',    ']?W{5B#4;tEnG6>AQl/m]R*{$h D.tTz]x:_=mq1BK^&Ht95I+-lx=b?cHU]hnnm');
define('NONCE_KEY',        '7 fMYU>B4,q4zZt`nHw)f)6ZJe`!C?-SEr!k&% E@Atkw{%4:Rl`PavZ?YX%u28C');
define('AUTH_SALT',        'K~a;6yy9J0][VP}q>+:X-rXoanP%P=gG_h-=UdY8xycP;UoKu@Q14n?9fTazr`P~');
define('SECURE_AUTH_SALT', '_}%{(36<V1lW_=Z_(wx&?,N2-XQ~MUdoi/z[=+Tz3zR~c3ksuj&*VlxS!]6yJgt+');
define('LOGGED_IN_SALT',   'D|JM}T+T4Q1_Q`8?w%=!WJ]eyx;_YJs[/Uy|8;F}2z7(t>bCg_BgDvc!%yrk*~,;');
define('NONCE_SALT',       '}c0~B<fI(|=2j&{,`7NT,4yly(,Ayfzsc7&u&O>>.NVxvn3lwDeL!c{l0>V}Hfh#');

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

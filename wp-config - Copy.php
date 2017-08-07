<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'deermtn_dMTNconstruction');


/** MySQL database username */
define('DB_USER', 'deermtn_newYeti');


/** MySQL database password */
define('DB_PASSWORD', 'us7YXbpoeQRupAT');


/** MySQL hostname */
define('DB_HOST', 'localhost');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');


/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('DISALLOW_FILE_EDIT', TRUE); // Sucuri Security: Tue, 23 Jun 2015 19:21:22 +0000


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'V{v2fwxhQZ9()L?y@,~j8B}C!:OsSE$`pigXbI_N.d^U1M0m]oaW764HKtGrA*YF ');
define('SECURE_AUTH_KEY', 'N6.K0f;`A#)2ez>SFZ4m?oTl/H9jE5a,<~}vn!urbY%hsMPW8*(:XU[@w_q7xL3y ');
define('LOGGED_IN_KEY', 'wyg[f|60Z@2B^]MQdn.,zR5e~Hs?Wo<Kb$YkG!U(%3pt/q`IXFuLmP1{4h&xvV*# ');
define('NONCE_KEY', '_CtqIGP9e,o;s.#&<Rg[*r@|V%$aSfwj)hb5EF4cHKA/Lzn>W`~UD?0:dlT7!ym3 ');
define('AUTH_SALT', '~*m}E;<j(vonuB1Gy$6H!.zJQT2Uk&#De)Y>IqS0hr,^]5`Oig%lNMK|9L{/7sxd ');
define('SECURE_AUTH_SALT', 'f&e*6r.4!LKFTxZ<v~j}NlEqy8[`0WzQ;D^$u2btB9)(hPG?s%XR1i7k/U#ng,{V ');
define('LOGGED_IN_SALT', '8~^]QvI2Es>V[;6U.!(<0{APzW}Ko_4DaSqtJpx`&#YNOXFT)Mje*uR|bZf75@w3 ');
define('NONCE_SALT', 'Zzk)1vQVg0#nM~aY^JRy{*,b!PwI&U/O(ChT>fLS7}AWNtp:mx8H[3KFjlGci92E ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'drmtn_';


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
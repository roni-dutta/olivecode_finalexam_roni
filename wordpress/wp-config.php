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
define('DB_NAME', 'caohagan_r');

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
define('AUTH_KEY',         'lKea!TA4,Cx.xqGoN?,Q#IZ}04aCunBYZ ZWbH.f~yNFEGi}+:qXg>Lhe6?s@jq;');
define('SECURE_AUTH_KEY',  '-}h8)I (]eQ<yNn%<<ug+e]4W|YB+}?uM!}(a_,8qToVXJ?g8F<[~MsN,Gm#zb_m');
define('LOGGED_IN_KEY',    'Y-HZb;stNS(}Sk$D=:VmwZILxI)Bxw]1t>U+!y+J`e:}hcy8_eYm@8))>iz0vbxk');
define('NONCE_KEY',        '7rg)$$}N~M-RA( KUjU.Z<O|gM#,1M[J)37[:3TKWPn<PLiQIzOy33)oIlh>LzqF');
define('AUTH_SALT',        'KDB8JN *PV@{0z`-(7R-Tff>2SQ+@W;,RVuLrxMU+?l7vP 8cs)z+rbh}]*L H:i');
define('SECURE_AUTH_SALT', 'Zk,Y<gCj.Wm?3VP!>r0R]bFaq@.5K|W&w&s:&&g%!K,5=m|uC-WA;zV|&y|4jcG.');
define('LOGGED_IN_SALT',   'v-sbCnV-XKet_kTEoPrZe^eDHU*nx8& bZ~moIj>mp`lR(+k>tZ-+iX5E5,UC-*i');
define('NONCE_SALT',       'Gt$p@lC`FV7+GUky}ftKVZ;5S,i]l~>xs$fI*#+_$d:6`u1&/dSKP8X-&Ti`ctyI');

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

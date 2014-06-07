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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '<xf{ncxc$zZGT*^7/dyGQ^?(A8xNJ^AR&BTFv7?lc2&eRW6v>7P||o&?~|n!!,>q');
define('SECURE_AUTH_KEY',  'bW*}-rtZph/;M~Kov[xC>4.ya+tw6ga|^-?,NY54hwED(T``^?TqnscPm=:b^+s,');
define('LOGGED_IN_KEY',    ')2 >FtoG.zz0r>$Vfr%Avm307#.$[W8LSQ/.RFNb2.2e{d{DRs1_Z|jlbnFu|kbv');
define('NONCE_KEY',        '#[lO-^3:ADa)hj8:v*jNX^ho1m+!l[B3^v%XiQ5=d#9=fg,4S9SvfHzU,xu)v>3I');
define('AUTH_SALT',        '>Y4PT4)y?)q,;=mTMj(`n[lN_*O$wrAD6D7#l>96sBpF<LSgd8G`L4YWmgJ@HI!v');
define('SECURE_AUTH_SALT', 'F]:0{XK gr}S`9~9.xEh{0s!C}W_z6XjQ?bX]P`T7V#Cd,bm3=J>u]WXI(tG[^uM');
define('LOGGED_IN_SALT',   'wP0=y{fdkSfW1s/C2(94yV2&|DXnD69M0Kdqhovj[%A[`H_ER.0G5@v76=0BHRF%');
define('NONCE_SALT',       'tX_wx>k18WC(`=m:Aj-(YyzBO]7D|Q7.WX`cm|A<*:P/=JC^F:a$|?a}2J (o~e)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

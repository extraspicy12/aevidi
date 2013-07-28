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
define('DB_USER', 'aevidi');

/** MySQL database password */
define('DB_PASSWORD', '5usTE7Uc!');

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
define('AUTH_KEY',         'J&`[|~&?Miqk n6XD)o6Rp%]Xm]4([2x(qcRh[GC$&`w(lS$1]js-u!!|.D~`y&&');
define('SECURE_AUTH_KEY',  'Ex6faE4Va-l&3=./Tpa2RIS;|}Q,j g7ckuxz+ +Pt+[qSTQYCURYVH+K(2Xm1mi');
define('LOGGED_IN_KEY',    '_`Z&(OZ4{$saEaEN7?O-6J%4O]<=0tz1[^!7pG@-r~uO;l;|!ec@Th-|C64I|I>@');
define('NONCE_KEY',        'Yw_H1CviFcM(fB?6}!U?Uu0_u+EVM5lUf 1cO!#Y&[+y]NRO5G&ZLZPv?v+8pd7i');
define('AUTH_SALT',        '+NS yEw-L_3KkK$gly]~?KJvV3q W51`u|/U_)S8J*`2W;T$FJ=JE_4+c?ns4U-T');
define('SECURE_AUTH_SALT', '!Yt8@Bf+S~}rF+mYN-f.P,%Yj#8B53|m/)09|Pd5`J_Td@o9~mW1C2g*]Y)SXIf|');
define('LOGGED_IN_SALT',   'j^-u05dJ<2b!GYUdM?=/aIPQB,3*1<DD~:6BT#l5<C,HUK>cu-{6C6}b.FpUX,n;');
define('NONCE_SALT',       'z9&%F#z|;,_H)I>IPY2}z%qpv:?d!? KX5^}~=E0d@gq[({lN]MhJf(YxGM+s}5v');

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

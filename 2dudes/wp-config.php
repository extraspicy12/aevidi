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
define('DB_NAME', '2dudes');

/** MySQL database username */
define('DB_USER', 'website');

/** MySQL database password */
define('DB_PASSWORD', 'web');

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
define('AUTH_KEY',         '^%I}&Ql94*B7U;F{_7t[+|w4Vb3A=H(Qh&+iVTd0U6ha^?Y8e0QaU+q4NN/]d9Pb');
define('SECURE_AUTH_KEY',  '!?`.XNK$hoWc.$d)hxI0nZ62(G((I82-j&XVgPY*|$EE BcKZJlAogGW*gjltXwN');
define('LOGGED_IN_KEY',    'aeJ}#,7<Br{JA^STYyZap|Wbe^i.S!5zma&iOd1#nM~PW2k+wM+5Pe0q/;o7|Wot');
define('NONCE_KEY',        'sJi])1UN mm[e^Ks 3?,^3If2+PmG>I1KQ|zS{M_*e,^iV9/$5SRHgG7Ljx+MF1M');
define('AUTH_SALT',        '|`,zoSq9/E]/Ox(:jIDnf--F]3.Bf({Z@:E?bpq)/X=dk%}:Z<Ju7}uqoSt;w{t+');
define('SECURE_AUTH_SALT', 'QS#{rU~+cJKw;<5/-(pmU^k-7Klzow>jBk^aG}+&-I+7JBhxR6}x<.`*-4-kVFX>');
define('LOGGED_IN_SALT',   'jDYE_/o_^4}qD@/g*`BS->P5KX[Bas,cV5P7S.$He6q8fF_d|]-YQ|d_~U#ZD0s!');
define('NONCE_SALT',       '+|shsIjxmN1_9BgIYP;8.FB&u]f!M||u]1P=R#u!cT^B}W?<#Qj:hcp-5O//YOHB');

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

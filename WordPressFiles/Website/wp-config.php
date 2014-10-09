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
define('AUTH_KEY',         '$TQm <teb3lpV<B&1_t%wvlO 0hx@i(3p#<Bk+LK ]F+7DM:M{h(a@Jj&J`xr-O.');
define('SECURE_AUTH_KEY',  'P}FEhty,VbcbJT~|Ms1@fi;H[yi]7)0sRm]UA^=r`qDx~;gu{9(^A78d:Y`9U@xe');
define('LOGGED_IN_KEY',    'UFyzgEZ$|JnRU 8[Ba{qxI[6}AxK/@=u=d( B:R?<kakKz#h@`eO&2:p5YFf%S(g');
define('NONCE_KEY',        'u{bvGqqAeM4J^$cMm]A[p9Wc`8!QdotH))Lf DU/+b~xMQUmwql7FRFg&d8N0yje');
define('AUTH_SALT',        'EKB1-f<}GXy01&/d.OA?d;8e^j= JfxwvP8+gcqW;RHbnUtvcMw32V7a{/%8I^Xt');
define('SECURE_AUTH_SALT', '{#BnmGPDJ8V<m_bj!m|wq:w/kXESMDh/r#z.8Jub] PDBi{/Ry<#od|GrG]0c?SY');
define('LOGGED_IN_SALT',   'u[K)e~R&U]IA}|dTA1$Eo}=DwztK_R7jmsEZx_A OQ/_Mwx_|Lcx;,|$1Qu;-4Vu');
define('NONCE_SALT',       'T!DVQR-cS`V0i@`~!Uc5O@Ki:!SB(A9-%qQ%y|$$K-18ZT@m3u]ReSb1BUqONXTs');

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

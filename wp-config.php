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
define('DB_NAME', 'kristen');

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
define('AUTH_KEY',         '&ZT)R*Az@8Wv#+k.mOa+PdD:x>TpH!?~n6N8><q2L@8B!juE4QO&};l#$N6Hc,XD');
define('SECURE_AUTH_KEY',  'Mo**7+H327<Wa{Cki~cALV}7`*5e7DS$kvwW,5/v3m4w[4+4QXPq^%RNh?@Y0/}l');
define('LOGGED_IN_KEY',    '0SmLXwz9^Te[=TDgBe3p<Z}e5R`0?|W[u^+0Djdffn(u wyeR!mCF8<bUK|634_0');
define('NONCE_KEY',        '>gE{w*;tt2$j)gf-* ?^MA;I+Z;ZXvOp,Uk$?L25di2|:{t+V+Ed`6.~s:Ie;B9w');
define('AUTH_SALT',        'A;9YFf((cAE2%9f)qI+(#|2yWb$$0N5kzVM89o%YA93T~|CXyT2*m9]-6Ln[+Vm,');
define('SECURE_AUTH_SALT', '5{uOsx&-=E[GtGT8IuS@t(bsStO/p?hY2Z(@.Qy9>g9+EhGm*P3ri|wo?;qc~,u7');
define('LOGGED_IN_SALT',   '#]Os$wXK0IdUy9~xk=j=zW&n[7X5mI#cjk&emf<If ?>K7{@X.ny*KOC/}._|k%Q');
define('NONCE_SALT',       '7[P&ylJ`}]JJ:?)AEyeNc{@HqL8 %n[/nHTr$#xMjn2sW=cO`rdMEcM|`W<f3c)8');

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

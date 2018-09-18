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
define('DB_NAME', 'pawheartDBqitll');

/** MySQL database username */
define('DB_USER', 'pawheartDBqitll');

/** MySQL database password */
define('DB_PASSWORD', '6ev0WeKCCs');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'WHaSa+*9HAIXfXmu.v,>IQJYgNVkwos-w~!5[KOdlem+.+]2L6ATAPXnYnv,$0BN4');
define('SECURE_AUTH_KEY',  'U,8gZ@[s[[G:SKpLpi#2<#2<Ebq.^E<BMYMFv|>4cFRz||C|DDaHle_ex;;P2XPiQ');
define('LOGGED_IN_KEY',    'UFNooG0:[0w~o9C99#daKWD++ipTmT.{yyuu<$$nnYfJN,8vcoVV:z-w@d58_5#_t');
define('NONCE_KEY',        '$nygjUgNN,r@orC[0|[gKOKG-wDKD9xepW;;T6E{{iPbMI$nzf73UBN4rogg8|1kR');
define('AUTH_SALT',        '4|:_PD#<xyu+f36>fnYfM@}zJNFvz[|>VR!!G1hoZaKHDHxexW]2.]iIbIy*mnvM');
define('SECURE_AUTH_SALT', 'n}FYJ^4rvkoccJ!!ooZhWZK-_t-llSa]x*u+<+.mufbQM7urcvUgM@,rscoZc:~|l');
define('LOGGED_IN_SALT',   'ePmXTQX7uynvb}3,,rrovV}4-:z-kC951pZW~ppWWH**mtimX<{$<yvf73frcg0');
define('NONCE_SALT',       'dSSL96]2+.puebXb{$*jqnnU{}z@krVkUV}@[0-!@~olW:xheP#.x#mEH2m*f6Af');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

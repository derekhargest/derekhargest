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
define('DB_NAME', 'derekhargest');

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
define('AUTH_KEY',         '`?+E|Xd:z@f,g^;c2ZQ`xK^sK(>cx-Vh~=:A~_([~-X+K ]PbHx|)6HOy}E-Ixe?');
define('SECURE_AUTH_KEY',  'qwi-kJROgjE/+0}^+e} CUsz7/ bxZNH:f^%b/j&K<_qQULL{#t@?(eUi2(*pl}Y');
define('LOGGED_IN_KEY',    'lwmN-=/@B{9pl+QJn>/?iUt8-Lx3-iA<|t+uN;+W|4[%EDcR5dw,K4`=,VxhE%[U');
define('NONCE_KEY',        'HPToF!^a|4I%}(ka!OAp}?oIcqO3v:[y@KNA3T-Vj(j,hkc.#:O~*<~!V=y[i]i{');
define('AUTH_SALT',        'M~r/]W;2_&DRn8MUsCeO]t!*`=BW b:5=SffNVkM~h<>KI^|jZ+X0Y&wq+5^wv{a');
define('SECURE_AUTH_SALT', 'U%JC^-RAzN@1CqHUo|O^={}=nvZ4+ 2w#.MA&GVRK|<R|=38!&Q-7dlU^F0D4Uqr');
define('LOGGED_IN_SALT',   'P}vJjp8>3gQ1cUidDB^fS,+AkDC|?!Xm{n|RN(aL+$pI9X7TZcEkr5tbqAe]3hY_');
define('NONCE_SALT',       'Qg:r#T-sCo(#2}[3f>Hby]|[R*<SfDe_a{V)v|`;eZNxNz!?-4+yy7t5`%; HfJT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

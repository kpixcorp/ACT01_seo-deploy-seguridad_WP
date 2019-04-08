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
define('DB_NAME', 'estudio');

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
define('AUTH_KEY',         '&OgUJX)845oJ{>jFu6Z7c%E2WFX:ZSAW!g-*Imo9Fwn4Ikic()8r *=WJveR[/}e');
define('SECURE_AUTH_KEY',  '3wVM][ 6)#0hP_P9 }xJ58LO2R.>:+=wwYTA/iM>kM*ND-y&kj0sc2q?-KxIvpqY');
define('LOGGED_IN_KEY',    'r6:73m*<f9piX7^N>$X%C]4OXO 2h^Y.qM9rQ{O/z VZmlcFh,c]ZUo&y/fmSvXl');
define('NONCE_KEY',        '[D$}b/bf>3CyB4dPJ.p(Ho?k)4}$IsoT?g(}/@A0xSMK{WG,E2NL{AOqQH+UR;}A');
define('AUTH_SALT',        'JBRHm{T.[>{K6YlpUl3f<y^1-VVh[zguAD,`)Z? ~SO]uAPm#SnN?bmqh 8rG0wt');
define('SECURE_AUTH_SALT', '5$Nu /_oR`BC-PQ9%o!+U&=dYH)(NH|+JHCoRlEVH7@Z(M2qUwGX>RQmX4F~[7jm');
define('LOGGED_IN_SALT',   'if+oNn#bb4Jz7/;5z^8H!&L`hhnl~][7l45=Yia300IMG],h)d>K]8(`TwI^D~j{');
define('NONCE_SALT',       '1$g%gcjpote^8AEI}6zCQZEo9KsH4-3L`4?t7H+~ODZ;YfNj.7``+>@|z4u.?&Si');

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

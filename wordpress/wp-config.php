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
define( 'DB_NAME', 'tarea2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'th<HUZaLB%aWM<lo/o-Z+y^aqPC55><F%Ku<P[H-b-Hc(bqYn*]/Ry gi&oHME|G' );
define( 'SECURE_AUTH_KEY',  '8l96S*b@8su{ChH-M&-Xyl:LXl<@pMhG`{:9Z,H{a;X*nv)3[cp{$N^!_Ml}HCmi' );
define( 'LOGGED_IN_KEY',    '}FXK]+kOt&4E{T{Tnsl4fOZe(/+UV$1Ijs&Wal/I@?z|_sm+y &PL-%k,a;>xVw8' );
define( 'NONCE_KEY',        '|XLbnHLnxzWU7_le?73I(9wmSpHA.>]Yl2H$YP3H#>whZ8#O9+y8X NK~%]%r=O,' );
define( 'AUTH_SALT',        'xJ6ij;fc*&Fm+<5T<IHx21n$,PBDVv{n|(R707KJ}o_B? {N(odCXlDQh`?wrMfz' );
define( 'SECURE_AUTH_SALT', 'bTdIS_mp+CZ|&F%4RfI`.&L).*m2jwaV@$+sh5/H2&<P?vZ36v!o>vq8Ih0:h3?+' );
define( 'LOGGED_IN_SALT',   '}2=u{Jy@7Prf,&o+J[EOZ<]~KhG [hBIiEyX[fnYYZk?gwgi<9MIi@-cWtWM9GQ0' );
define( 'NONCE_SALT',       '9G n<f+;HJ1h4-U5Z:(,FU&G+BMp1fk=N?HQoF(P%b>V,K$8PfI(]IkZXTb(rh?:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

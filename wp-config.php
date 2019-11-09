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
define( 'DB_NAME', 'example' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'q L-g3_:.bNp+`?cU|XO=|Bmm|i0#8g3pelIC&qbxr0/69GQs(tsm_plkYI-z+FW');
define('SECURE_AUTH_KEY',  'f<PUsnVa5WTsT+9&o}0?oFN1-HMnMM-Ak{8RiG}A~aZ9Ptir5vNf7UB`&!K&,F7`');
define('LOGGED_IN_KEY',    '+qk^/rXpM -$beCe-$8H7`-*x`Q4)MVMSQrM>[+x[9<5M,Bj-*oWK_}0|[+R^5dI');
define('NONCE_KEY',        '1AO q(E9{Ja3[I.)gU-F#SePwimqY$0p0rBAF)XW#L]N&AvnaNs< kU N<R[^]Ad');
define('AUTH_SALT',        'KowtI)wl@gH3C:]$qoz[Y-+pLn:2[y n63~}Qi8C-)uH|qM/PgKO|aGI&|,z6];-');
define('SECURE_AUTH_SALT', 'm)Z#JS/F+EKi@H8fRdbxt.CU<{5dhnxsp|.nq+^.o zE,LJ{ve/C7yX#S]1v5DED');
define('LOGGED_IN_SALT',   'K`??+TOdzZg~%Lp |ZZ!>R7,^Slif0li91:+;rr&o`R#!EyFicMu~|b5^U8~Ca)$');
define('NONCE_SALT',       'O`gqa[}JT-;7Z!ns,C}%3=-1;o.L0a*+(.tL;V__a~A-|EePNVt+r=XRo]l!J-)A');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'J{Lb2cKH9|P T,pg><U(_i8$*<mFRdECoZCbQ5b)gZ mEMFN3|rB 74s{J!SLp}y' );
define( 'SECURE_AUTH_KEY',  '$-7Bb_wClBF`Z<<ZPkXvb.,ETBUA;Vo;Y<4g?vJB19?[)e7}+b]JhrnB@`DDl!Dd' );
define( 'LOGGED_IN_KEY',    ';5[dM6 =M6%R2i UI1-fg?ev(>q7?<C&gCNYv<L:5uX`U0b%d0cn6,IEI-?f|k`J' );
define( 'NONCE_KEY',        't`[s*JC||omS_bMT,x ZfoO%0!N(bOuCIK|d)yM2zHd,S/T?<hL7ntOi~#OJ?i#g' );
define( 'AUTH_SALT',        '&6eP.+cSKGXmSv5CNF<RL1G;-Q/qk?N|NR}[4l,<e*.Pn/4)ep2smo<+us2yfqp.' );
define( 'SECURE_AUTH_SALT', '+`@x~;T;BAB8 .z{kq sLt/*oM:--ixUsYqG|h#y++A$gA:&7I-_c2*Usrha$yyB' );
define( 'LOGGED_IN_SALT',   'W5IxAV4Hz`M?>&vp}S4I}![! }wAJ?#K$n-G-G@$k53G,z@Bq[tup$?sQz=B{Hb]' );
define( 'NONCE_SALT',       'TL`lS9OHpd`bOqdZJS}2OCr:l}n)1rm<;BCJ/$3E`c8f)hn:o.R,zBjv3&mqJFZI' );

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

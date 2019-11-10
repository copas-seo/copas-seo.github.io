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
define( 'AUTH_KEY',         'e4u}7<*uj6m0Z!Qmb}{YR?k#D 0N(5Q%hM:)f !U*;I^|.$q1n$J{yY:8ihPGa9x' );
define( 'SECURE_AUTH_KEY',  '0qPkoa&Bo2AqFyl2WmR]|>.2C{amaFn1Mqn,]F+4i 8S.Im$D@!s#s&,L8#i).{]' );
define( 'LOGGED_IN_KEY',    'd/(zGED 42;UV`266Y.fhoZ0T<W)3l#pl*9U]9JivDJfw U=*/@@eGf69U`~FO.v' );
define( 'NONCE_KEY',        'sJh5ukkD7.1oiyg ^r%Igug,I#y&buL3fs5 Hr $0<U:fn9U$Il?`6/=-6[@$OK3' );
define( 'AUTH_SALT',        'BP$u``!+gHo^{BRINN)DpA//gj{DV]^F1^mdv0I&qK)dcpieZmMxG4BU^WO~r~Dz' );
define( 'SECURE_AUTH_SALT', ')hlkzsRW0/9PBxo:?>-5>Y+XeZqze&)o3-uWK+ST0,<qL3CSrV{rW:=utZE1yxt!' );
define( 'LOGGED_IN_SALT',   ';60G=p5RN*gF7f@pnG:Vw+%a!X/wl_3-I<hxt50-^yod4*4iHc<L|J9_B@RBUi@<' );
define( 'NONCE_SALT',       'i+S~~({E}KUa COZ;K #]8WjTfj~IGhctf%2t`XQovR rVCz*i<LEdwVr-]R$ S$' );

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

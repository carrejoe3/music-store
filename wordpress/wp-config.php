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
define( 'DB_NAME', 'MusicStore' );

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
define( 'AUTH_KEY',         's,hx6GHgAlkB`J5eTQx$+cz2Rw1pskR(|aCUZ5;L~X==l#<RMDe0JG|u4[U<XY,5' );
define( 'SECURE_AUTH_KEY',  'z;%bdj_f{S{J&D-:v )gL^x4*kQ((mqJA3!b-*pun4%H8d~C,N%qPj_4E eOO-t[' );
define( 'LOGGED_IN_KEY',    'rLWD^fqZ:V1?R5)bL-5nw(y)}ng_<@!!JZjD+UE{^SGzzOnu>7;!.hU^2>IkE>K1' );
define( 'NONCE_KEY',        'oW]=iTPMV +#+Zk-/:Ghy#Uzp#[rQ?.*GKH~;.G3#@N~*4F7qd,C6oX+s-:6h5ki' );
define( 'AUTH_SALT',        '*&BB?`Wd/lEMP^bOI7Y*%K_n6A+o~,$-&C4>H8.x0(o>#7!VNr^Q~VfF/>[$dQf4' );
define( 'SECURE_AUTH_SALT', '<<:VUMy{m] H9Ip1Fd$`*N: qHKl1z=27/q=#N8o+R0Ex_F^]aj*hk ny70N}20c' );
define( 'LOGGED_IN_SALT',   'M{qmE]DnTFyMq86}3QNDt~w#n;FG*QE!romG+_e*VVx%|YQ3Am?30F]yhFA([|?h' );
define( 'NONCE_SALT',       'KdT=er9_x3`OIQrv].[p-IU?_y}/xc-]9;L/B6umZ1~8kE_v5e U=*d}m-YpxiQ}' );

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

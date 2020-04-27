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
define( 'DB_NAME', 'uni' );

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
define( 'AUTH_KEY',         '93cQQ(1}I*fqnlSW.y.?8 z7TzcMjx^Z.zx_EdF7!-4>~yPLu$d5p.F7S/@:=KTf' );
define( 'SECURE_AUTH_KEY',  'K-EzB]z^H]t<)GhFa`mC6g6(*$,Se?y?UdZjB71;{t0`e3z/U08a|sa^xm~]eSMd' );
define( 'LOGGED_IN_KEY',    '+1kX[7Z]et/t)Z5M`DzSuW#g#IW}s<U_d_Q%:-_K;3&_n{_2[:)g:917/ndVe}Ob' );
define( 'NONCE_KEY',        'L/`>I<E:9w&Jl=gxcN#!VgAVleoj}__X3l/og+J4MKiZcyBI6_RxQO *QplP.5C,' );
define( 'AUTH_SALT',        '/0Q~a2?}8M%Z_/j<@wC{yw;[WE4gXHiY%3;KLI,g^LbN5Ez3N7%$f&GM*;y]|5HO' );
define( 'SECURE_AUTH_SALT', 'jFVH5wfYBSFUzo/.MFg_7}x44Dm# :.:b`}pk@lV9`PnG/{I<.np5s,S{nTiBW]>' );
define( 'LOGGED_IN_SALT',   '*Ms=X&2Bw7Marpzg#y7B[JLU!_bJ)N1EF*PR@:r|0QgG^JKH8hRM_T{4v1p6k7N3' );
define( 'NONCE_SALT',       'pQE^!2NVUBgk|HBBh2J90<G;z7XFH?Dx!WwDUjQrwnsou5}Z%M`i>b*eCZ7oyC2[' );

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

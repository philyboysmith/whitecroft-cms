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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'whitecroft' );

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

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'E-ly+OkjR,?Vq`C3>WrtEp-f)jK.nzv$x/wUFLrE$tP9JctRs7J.1]yX<DSyPmvQ' );
define( 'SECURE_AUTH_KEY',   'qs-H(|9 iA(VR~`4sMqC/=s1)>D 4WPe%wc|*wDUe+%7BHvi$/0FYp1m(c}IA7Jb' );
define( 'LOGGED_IN_KEY',     ' ~h*osqTl=!NN)%0T|vo654 Qa(<W&dbCzsjk%QX3_+{3Hk}dzYOaI6c7ZjYD0]@' );
define( 'NONCE_KEY',         'I!wZf>=Yf)sAGk,~/p#1Eyddyv*zW5iQ{b.`u:$bpX[bW#UMj^$_+rl7SF5d`!MV' );
define( 'AUTH_SALT',         'j0 7G)glJi7WbKg@Q/(?r!W86%XP.DMb7m.[W0JcX:TEi39]<vbOK{Sb5_<!e_6o' );
define( 'SECURE_AUTH_SALT',  '7(8,pvVU![tXlBL1h_g0W);>&hr8&[N2]=jfnvNF8jfxU;@$@|*m0ptSquP`XxUz' );
define( 'LOGGED_IN_SALT',    '=;h@|4H1iuTcj1Aobr`UT65807.HEJKvN!n+!t)_EdWwDfIhkXK0koj~{MMiS{*k' );
define( 'NONCE_SALT',        'hFa3=~C|OH< Yk[s~Vhz=Jhh%pvHH-^(-nvgA^b}Q%u6(B-MBQKqO4>~y$K|.$7Q' );
define( 'WP_CACHE_KEY_SALT', '?f/Qw/uf2*mAxy!g;NQTJujv}mznQ5pSa@gJ [>o%Awuq%c,B}}by!iId7<d/t_X' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'motachips' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fF6ojZWmL}CXI$6Xb%r#&:7Qy$@h Iphv3sn#=X,z gY,]Y5]Y3Dw~L1#cTIfm{U' );
define( 'SECURE_AUTH_KEY',  'e:|z5YC%.OmotA?%4S~a: F#Z2W`bY|tXcb14s@c 23&2904^#5x{EZ^pOXgIR*;' );
define( 'LOGGED_IN_KEY',    'ZJ?9[iT3AoPv3^tmo#R)&^kskt>*CS*k<b2rN$jjq>|1 /6Khm~%G(Z]M(wGnB>w' );
define( 'NONCE_KEY',        'pw]5A_N3&~z)7;%lr$=3j=}Ze#UJ|b)2;8[8z%Vw#T,X9B/3F,1FyfU<:Qdh19,h' );
define( 'AUTH_SALT',        'N@cuQ.&`@9MIv+4bbK&1,(#cpu_E>rB1nl~,+v+?+/XzjG%BNES!O<bpIX,fadHS' );
define( 'SECURE_AUTH_SALT', 'Dd4mZTDsFILlTl1/<4:p%^(m&&X}:zbdLpCBqMR|k~-{;v?NYtSEJ(Wtf3oVKH,l' );
define( 'LOGGED_IN_SALT',   'r|7~*4}?b.p`Q=6#Pkwd&f/2xr3EVYaK1pQdWb{q*KdvP5y51-ig6)eq{wD!)(=s' );
define( 'NONCE_SALT',       ']w,cV$f p0.+tU<0~a>[2&d=>B1 jaCm.W ?[r)LPDv`I#eYmpf)m$,05zoK{oOL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

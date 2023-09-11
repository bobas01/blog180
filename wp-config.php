<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blogPromo' );

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
define( 'AUTH_KEY',         '4N`c-~N@DVh%U%fm2MXRnd BkxID?h])vThL,jeHJ1roTqrolS]t~@_$R>*mG}x>' );
define( 'SECURE_AUTH_KEY',  '3@JiSaQ~3s8wBd?xn{7U=~^RM/Nqw4%$8/Gl=UI`/Hi,!&m.c#*,@o%: H=~O#^G' );
define( 'LOGGED_IN_KEY',    '[;3M_1;#g[V<7:+|*lJ-t]moj$c~p<gA)tt6YrAq){4vbm2w,L`?ymRIS@!G_.i}' );
define( 'NONCE_KEY',        '#|atwK-SJqsT:h*}7keCdpcxYBEC)2irdY|V}5a{+d2uYY8U@c`n?LJ9NTK,F:rd' );
define( 'AUTH_SALT',        '_VhmCp.CoiTOmS<uG5/$VAFf7|A+_Q[D1FTA@uEzRv}6<~[8Hl;Q_Nt;ZkLI!y$>' );
define( 'SECURE_AUTH_SALT', 'G2Y1-a]Ho7n5@Zj5q`3Z?wHM5%bSf:kqeeU%_CrMj#Y_2xm92~DX}YidmiP#Uv5[' );
define( 'LOGGED_IN_SALT',   '-<cCL+!VdATv;p;Cd~u*N]ZAYO:D{ucI%R.k.2<k~V;a/rs$8ZZ]-IqdZ1<uvh}[' );
define( 'NONCE_SALT',       '^QKx%G {<dl8Yf>pzu8+jjc>[[xh/K6{7|43w5cw)O5xEjwBgRcKo_X!?M:b$V$5' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

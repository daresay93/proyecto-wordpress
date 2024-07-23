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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_wordpress' );

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
define( 'AUTH_KEY',         'yGl`;.B=oXl]c#T>@u{O)T*^9ubUdm?aXx],IGzqR1)wTS5W[#&l0CxH1mv2~yHk' );
define( 'SECURE_AUTH_KEY',  'Bxs[4NZ`4^dw$ij90*Xd,xIuX{l[u81|)*a5.h/]e.ock*nGZ}-5^)k,fP?a)?+A' );
define( 'LOGGED_IN_KEY',    'd}a.Wm8;g:l-i&i(Qf?j9A<Tf$x`2J ^y.v~D%Gc=HOA :,~%u(6JQBLfY7Y0dd9' );
define( 'NONCE_KEY',        'zx3zG*may{N&o^:DW5O9*m<,!/:iz_|&>kN1=Da>kU8X/O%WW}SedW4FhT^x/>1v' );
define( 'AUTH_SALT',        'tXsjtf*I_YG_[r9j@_`-.|7L|<n#?xJ7GD 9s,Au:?o]b<sENUNZX,P0hm~|O+U>' );
define( 'SECURE_AUTH_SALT', 'mf2t*y.Wr$Lyc:=qHp.V=o*{*%#g+f)_mo`a>M,X_Sc&&Q;&JUl;-wyoY ]RsF_x' );
define( 'LOGGED_IN_SALT',   'YySRIesiR%wMDP}41C{xe4 iEL7uB>IoV;G.Im`:@M/AW@K2ff]NfNacn@*x(@E7' );
define( 'NONCE_SALT',       '*;upYeIyBM82hrQp%L^&~1!b(#VWwxvdnn:wXE}]KZlf`s5KjO5?~BM!B5:Gih#&' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

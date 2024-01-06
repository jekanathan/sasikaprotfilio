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
define( 'DB_NAME', 'sasikaportfolio_db' );

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
define( 'AUTH_KEY',         'E0Hh|_GYK%e{~$@Z!/:%_x7`Bnc~&.9 VlM;Bf{w2J[c.AV5:.V yP6qljEn}1B8' );
define( 'SECURE_AUTH_KEY',  'Yu$l|<w{OZvD:Fq#cyE)`~-#4:#Wt,&Vg_m7ifa>^DV~.dTm+]Q #Aaa)03iX$^?' );
define( 'LOGGED_IN_KEY',    '8^hCatXK1-05f9XKQb$(RboE_uvSh8*.{5kr>31y5[.:{GwXKs=_o/@B}^.rbF;]' );
define( 'NONCE_KEY',        'c3m3 ; Z6w#exA%W`9[H[4-^*DMP5x,]07j;|/Vt~Bd_r3Db0}GPYIU<NrvbeKvr' );
define( 'AUTH_SALT',        '6,q{#Xxp_wORz2*)%~9r<DzSU3[1xEU,fU}g>KTmt*jzSve|-HxgAm~[yWXf=0o9' );
define( 'SECURE_AUTH_SALT', 'p%RaMv04Cb9YkSt%e]s6=@zf:( ~D{.R0O;RX;ivr18pT<2CL(p0Ilh}ANcXXaL-' );
define( 'LOGGED_IN_SALT',   'U)JY|k]@8d1+C}$droZmuElCu9^fQZbpF#p~]}(p!ABY?-3w^u%:Uj-Hx!D*=(VN' );
define( 'NONCE_SALT',       '!pxHAa<;B0`JwM86Vc09/|^WhP#P/5zU+[knip2KMu{__v.U59:yf/F =UkGWPTR' );

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

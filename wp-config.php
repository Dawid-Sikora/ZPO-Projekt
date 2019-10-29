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
define( 'AUTH_KEY',         'c4]58/+>hA{~CQzBTel=EYK;B,We;H0/Uz#X[=-X>4W/*/CZR?+V 1{/KE CnKYp' );
define( 'SECURE_AUTH_KEY',  '8acE_(M[)vGYf&{y$HT7!<>}HSF(dL988D}%r7Vx_=lg$DqVL^4U^s+>9~$/*;av' );
define( 'LOGGED_IN_KEY',    'f$g5X0`M&zzoF2s-l-?0Uc!5[Lk_l^H@Tzaa3*=je`1wnerw hpNhc+$MLD#hQ&E' );
define( 'NONCE_KEY',        '$y0G7f;n4^xAr>^?tAo?{!EGS]/TZ#a*3T~I]thrEQFArl9+ U:8$l2h3Kq41im4' );
define( 'AUTH_SALT',        'SC?J?qr? )}Ay@rjVn}[T_RT7spl.A!zoeZ&jX[sDunW7uF4zcS=)<~em-7`@HI_' );
define( 'SECURE_AUTH_SALT', 'XZWiHQh)x1nKj,.33,o%r(OG-N/J0gum~,> cfgi; [}X<I}HjL!DUqN);huiV{B' );
define( 'LOGGED_IN_SALT',   'kRm i=.N|ra)?%Iw $U6o3@nDU^$T;.3py+F)py=_O.c9JfBAsL9kRf0Ob#%`B8?' );
define( 'NONCE_SALT',       ')VazV{*NNj^XY0Mt-&6vCZe;_}Usf=)t^%M$o5sWU3Zlu9x{%P5MRZ+-M<ZJi}:~' );

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

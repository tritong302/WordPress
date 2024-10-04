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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'r&&~&=IZh,q@4Y[/gN+*gyV5b88>piSYyQ,y]IF!k:Os|/$O0u8R9yg?<&0hR*Z^' );
define( 'SECURE_AUTH_KEY',  'q?]P6{%iwS.;WekcWoANGZ8i)Fq)f@yPnd^!8PEeDOEp:+4RIM8%!s#9ecvW=X#i' );
define( 'LOGGED_IN_KEY',    '!p_56TP|)v]-Zcs9HB2fh]UiA[-Y5!/C;rHAIt1&wBewrM4}{iIZ9H{vIM#*?(87' );
define( 'NONCE_KEY',        '^*ML0L1L;{re6FNG_-=Rcq@U{BU6/`z`QVVCxXW/_=/%q+b/WMx6YA9d2[dkSTQ~' );
define( 'AUTH_SALT',        'Qd~sp<j,JxN@dH%gGAMWM/lc)~mt(OmxX`dpqfK/VQL_fSzN#xDG5Jn?b Gh:]Lw' );
define( 'SECURE_AUTH_SALT', '.K(pME$]32&H>/Xjf`(YqEX5`RK<aGp#@VTtt{Ko)?`9Jyg5cv&^?u$KBdXS0H-d' );
define( 'LOGGED_IN_SALT',   'qIP7v{1f_&jD-3Y+L=jBr0%N(!C#oa|B,46,wRe(ej=N{@Be<~tL7{nO2bgRRO~c' );
define( 'NONCE_SALT',       '#^yFI$6yFJe)2:Y{YmP-oio/{`sMV`f-W20VGrR5S3Q-Jl`fOc< >r]DKsGw1zVv' );

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

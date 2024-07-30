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
define( 'DB_NAME', 'naruto' );

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
define( 'AUTH_KEY',         'rGeLuD.,epfR?/X0&! bnJR8J63Z`j_w!ud`85ZR_K1ooT^vARuoxrgenN<X^I9p' );
define( 'SECURE_AUTH_KEY',  'u#OU2yR$%^chMD9+5!r%<xI3#TQYlz:oy&/-D*AzyMiYSmr_Wq0dvotS5dHSL(@k' );
define( 'LOGGED_IN_KEY',    'sHd)pwj8$3Fc4ObC)hN#[Sm*b>42T266kS.O?HSE:12FgkSS,Tnbw7`Ro[{6-zp>' );
define( 'NONCE_KEY',        'S?_I+o31Tz-dQi,}Fx[s]:K,%? ];^l0az)Lh34(7IrLObf5J<a0[BU48Q8lI#c.' );
define( 'AUTH_SALT',        '-oc51<cONkBCf{]!nj;)u!u<?ksss(F0A=wS!SRC; ks<#D;-29+s9n|-9Q.x!+3' );
define( 'SECURE_AUTH_SALT', 'hUtiIlD& Fg>:%/x%2:~]vPTAiOc!TrZ,h,s^LU425C;P94?.dt:iTF_@J>q! Sc' );
define( 'LOGGED_IN_SALT',   '^H3PPOJ#DE,ZE=_Go[)X6Q>%#BJiLR_KapIf%Z?Nd4Rirk!jV{CR:|:Np=|:=1?&' );
define( 'NONCE_SALT',       'j)zXFsHY971EMO_y`znZ[(fi0}#Ssxu<qF#3SYb$%sw`r gU{es8<}U<,B_ORw^Z' );

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

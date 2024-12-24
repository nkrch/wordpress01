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
define( 'DB_NAME', 'wordpress0' );

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
define( 'AUTH_KEY',         'a?2n=O#mem}+lG(oF1uyuq6|L/vZO5o2a.$v71G}_ClY5/j;^oTH*(,>![6vCn*#' );
define( 'SECURE_AUTH_KEY',  'nMnF@9%U;Zf4-Or8&^/Sq}oI2[RruO$bAglp2[G%{CE$@SZsB,4d321GM:?%/Rr^' );
define( 'LOGGED_IN_KEY',    '4I2-}>X_d|j C=b2Mw{d!ro*-J.SzjM;~Pz*CGYfmuiB9g%-B..o7|*-G~UG#? t' );
define( 'NONCE_KEY',        'w13P.HDaYlT<-Y+.t6j=Sk-mf;pMiv6}T! Hy{q*3(Gji|UEM3]HU+u&.o_Zlek%' );
define( 'AUTH_SALT',        'Ow+Sejw[O)o1]i|BN^)OeCtwXBcAF/bcU!Xt&`(x-s`rk>k3,k9zAJo6[7W7_?!S' );
define( 'SECURE_AUTH_SALT', '.sVXk5<vvCM!B^VlLD,Ur`Y&>7m@3}]6*3vqai9SK#UBv8J3eGd]pezv8 8d=n&b' );
define( 'LOGGED_IN_SALT',   'H?8S.yS-({WHze4OiTmBSv8XcN6bXMlrGSF&TXwB6jD`!aMFo#T&p>hrIfw}- +%' );
define( 'NONCE_SALT',       '(!>{RKV~$q0>O8pAFcq_ml8u>-ApzwP6r}+Wp:!m&RxB~f0B!ys{w9/$<9Z)KD!z' );

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

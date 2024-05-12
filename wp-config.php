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
define( 'DB_NAME', 'wpmagang' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'akuadminwp123' );

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
define( 'AUTH_KEY',         'OY?Z5XzxISw brhGnRlhM^ -c71d.=8S0FB|C6#TXK4+Nsl _T%oRM}2i=<pdUr|' );
define( 'SECURE_AUTH_KEY',  '|nloe=v$LE@Rn^eG7011o@vK`zT#/-{G`10|?.@2Y-wg_+H/KnDx##=!mY,+_Gqz' );
define( 'LOGGED_IN_KEY',    'k0zqoAc^{E^>&h`m@6x#IM[YUkOG/JL]QRAQ3h]zKS[^R8g)ZbOW0Gx92z=A*~!_' );
define( 'NONCE_KEY',        '+jZGK h;l5(x<BPfml*77,p?]P?x5~Mp{h{HDg6n7t<bSA(@v38cfPI/TA^M|{O`' );
define( 'AUTH_SALT',        'EJpv,d%Aac^A2*0g8(1Wx^UfC5oV*~cGW:)|BSdX|pS+>$qa7-nIrk[]GhxX(l{E' );
define( 'SECURE_AUTH_SALT', 'G%Z7uOJ*Q5[;P+`gGSF(r(}D7Ie}5#Q$kzjXBG@Op[U29egUv~p#GxomcaOGC>(3' );
define( 'LOGGED_IN_SALT',   'njt_Y3ArVHTrvQ6rP[a:[%iK?5YC)$k$02?.ocV4l`zM8t;Qn~y~AUa83rCrx=G7' );
define( 'NONCE_SALT',       'VY89U4Pn/KlBS{y%[p1_>@*%0cf9Z@G#(a(TE-nA?RZ?@P.F,[nf=4=/+@J&(}`O' );

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

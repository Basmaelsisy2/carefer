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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('FS_METHOD', 'direct');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'carefer_db' );

/** Database username */
define( 'DB_USER', 'carefer_usr' );

/** Database password */
define( 'DB_PASSWORD', 'daJh7%td26Pl' );

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
define( 'AUTH_KEY',         ']k/`T3g8Dq6$Q^&8oZxmwL;t&B)=z;Fye*2-!]<ec[8IwcW#K(re:pu-1;9IeP_m' );
define( 'SECURE_AUTH_KEY',  '8GIjr*Ho%Nq9hU>8|oP`O$VtB(N:Y%.^%FgmlIQX3(.G0F^z=%qgCfoijpfnK(6k' );
define( 'LOGGED_IN_KEY',    '+j#LJ01HH/;r*tJ!}L78%npIFvP0I7vRK5Echb]&8|UB*Snm;6E9~zxqANU3oF$e' );
define( 'NONCE_KEY',        'nC;f;A+7d)a&aclpCI3v|`8|[3w%i+,DZSa_XTJ~MLOb5SfIpLaRZ~pl_9%LLHaZ' );
define( 'AUTH_SALT',        '1(f,T2s!{]Oc%z5C;$spHe={*+,u:3U*)`NUkfQ96~: &Sg^7e(C,=1y`Sfl>p:*' );
define( 'SECURE_AUTH_SALT', 'sCo{a(A.ZFCxOK  f];eTV_~S$9 ZBZEu#bV0?Y2l9Vwml7L*kYXauS)dLad[i =' );
define( 'LOGGED_IN_SALT',   'XTHpKw5X?;Ss(TsE?%ZFz$~b;?d!Xfdc?OnBkzuY[_T93J0El]gS2u~%?Yo}ip)E' );
define( 'NONCE_SALT',       '&65WQi`@Ww.#t<=uI#HCF86,J($|b0E-jcfHz%2C-hG6:@Zq2KTqf2YIiKkP$9Nr' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( isset($_GET['wp_debug']) && $_GET['wp_debug'] === 'true') {
    define( 'WP_DEBUG', true );
} else {
    define( 'WP_DEBUG', false );
}
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

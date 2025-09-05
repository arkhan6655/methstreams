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
define( 'DB_NAME', 'methstreams_db' );

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
define( 'AUTH_KEY',         'I)-7LJQF${?1)lR/z-{L%`p9n?4XUdgoKIaw)>14`jxCyt;?!OK!!}.3tEr(TCaJ' );
define( 'SECURE_AUTH_KEY',  'vi8QWS^<HJDSnNym~fL-S(z3:K|d#ZvCUGeYC:bLhbJ+)y](/Ynt=]uz;2qX,cEH' );
define( 'LOGGED_IN_KEY',    'em,X{06$HUwYZX:hE6i?r-AkMiaI$gl?mu*h~>MDSK[UtL;zzKImp(vS*%?m!6o$' );
define( 'NONCE_KEY',        'i&F`bcW3,[s~*M{8zo`5TzP(E@hDZm$^qQaD0ITVXNk9TpS 386x1L(h&2,-2)yG' );
define( 'AUTH_SALT',        '_H{tV:%wph8mf7em=E;YtDhgu8%[vUY( FXB|.fp7_w2|_/NKy<3,)42$/RfH--(' );
define( 'SECURE_AUTH_SALT', '<]Wrwr)Te2_0IpWGcCuCpz.(?9eR(fFy,/zWzh]XtS#:TF894U3[]}/d S]N_%r>' );
define( 'LOGGED_IN_SALT',   'fyrwb$Z~?CCcQ |jaydy<w*n=7Fx/rf2#kD>]TWS*s{|;r0<HgQ@m(CO1779|jOx' );
define( 'NONCE_SALT',       'J&t)i]AV<jo qF!Qq`t91)4_T.S-z?Gwt<SYf.^3M%,qV],5hz$aTBC|B^ox-BS_' );

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

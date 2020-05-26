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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'Admins' );

/** MySQL database password */
define( 'DB_PASSWORD', 'd+$TZhmYs9phA2G' );

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
define( 'AUTH_KEY',         'O&5)Ge/kdtt$}/?pPu?^kGKfRD9J*h>:L>83h%p8L2%2nRxa$.3BdN>FD>.o1z_ ' );
define( 'SECURE_AUTH_KEY',  '{FAq(!ZUI+Us}o$_0-~g4F7=[q)l_6>^8A) ?Ov])qm|-t6g1fRlvpKm*NEY;PI|' );
define( 'LOGGED_IN_KEY',    '-=vFsCMCqdQcO,D?(_.?G}e;=KRMw0_bxC;shiw!5=0W|[>z-eVH^%X`as_`#{!C' );
define( 'NONCE_KEY',        'o=]G-_yntZ(Cmd*| 9f|D.IcK=taBp+-mF:NBYQFf*KM?+-RzSVr`8rZ~cdRkEt9' );
define( 'AUTH_SALT',        'St^p/k,_I!R/lJivpV6,E~k1GlLX>jB 7H!m.p?Om(SdD7#Qbkr=<Q0/Ad(D6m36' );
define( 'SECURE_AUTH_SALT', '(M9c<CVlEYfn<dWlxoXpd%HKPu%w:,(x#MP%]. BRGVo%s3y*k+0!=Q| oS`:LiD' );
define( 'LOGGED_IN_SALT',   'Ma:zM9oja?rBH.k?lO2(WImF=eUa~*y_oN?XzQYZ;>St?A~]%`Tv|>9im`R5?eF[' );
define( 'NONCE_SALT',       '3,}j%w.un[PfNRH]L>V={j$f{4;)>lD2V^6(15jbqe[^=1oBlm:fZ;0W9) 7BSy@' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', '4u1HhpkdyX' );

/** MySQL database username */
define( 'DB_USER', '4u1HhpkdyX' );

/** MySQL database password */
define( 'DB_PASSWORD', 'U9fDRM0Lcv' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'cLpHE(wLay:lb6&-&o R__eeN#~t>I$zixC>aqRvRg0+%qTw1NkVwqU{h)3(P([}' );
define( 'SECURE_AUTH_KEY',  '%M6zqHF(emx#+0?_`;c2tz1nq^Qc:)K%Y|f#+R3oJWSr[YAn^dw~6@moM0)bP??g' );
define( 'LOGGED_IN_KEY',    '%kKDmrmg;g5TJiiOv;+qpJyX,Sa@-T@5`:H-N7POPsI^PbjMgL,W~CoGtfTLe:X(' );
define( 'NONCE_KEY',        'xgWvk):zy!Wn?gSWq~Sqf8iUf-2kD%Ims.}&MvgIaHGq0kdc~h>WrGAp``jF@9,G' );
define( 'AUTH_SALT',        'ZUq<zhlG=6BxbwRJHK6wl|WL%:.@}ePa4Voz|FSU5ZvHiws~))F3qYHCMQxkjGmT' );
define( 'SECURE_AUTH_SALT', 'k>qsyS5dO/qB)oF+,zdKG`tUZNh|(@{2~pZt+rm|mH-D8`sQARV4afywDCS7c8jm' );
define( 'LOGGED_IN_SALT',   'qI2qjt3{U=%7}k5;^tQ)3?t;y%F_ [oi}4>x8<7X|Ny*Iq=K8t=}(64h|#l6dJwd' );
define( 'NONCE_SALT',       'Bq5k2-W$1{Le`.0r@<Hxs!+dvavavKzFN@4)K;mBM0[jJ0@2s&PAw$$h&ND5!>p1' );

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

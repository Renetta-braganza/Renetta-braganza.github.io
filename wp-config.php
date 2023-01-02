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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ais_main' );

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
define( 'AUTH_KEY',         'e,{iO4!.#sYv!n5#~Qo9/HBR1[0F-qDYlAbpLtAS:KG:q}@N7nA-GK*&_b`.2DtZ' );
define( 'SECURE_AUTH_KEY',  '.;oJUp}Tj0[3/MWHSE&caIv0|SIu`(x;bCgZCEIA.2Gf{E2m+z*)<*ZJFHK@QB(6' );
define( 'LOGGED_IN_KEY',    '9WbwL{+jltQ|(sH2%6ivQ /O`7NneNkweaNZq)Bo{-9QojLB*_&g1EGI~%Hfwa]a' );
define( 'NONCE_KEY',        'ke+-U%)KasV6wLkn*}vwLSfW|{)W6@u#Dofk1M56>~k_U%k]]#lp}4TQ*>nyoFC,' );
define( 'AUTH_SALT',        'sR!noOW;)l=/aDLW5XFe>tR7j)|?1%wK7!.stK`f}brN,Wnh)<*&;ja;(QUj5b4S' );
define( 'SECURE_AUTH_SALT', 'd Pt9|JqCQ8iS.;?D(Y8FBc50xy;zp&!ngjBT1^*YxZ5<GPHUNePtZdeP7Khl4pA' );
define( 'LOGGED_IN_SALT',   'UwmWI2^~OBBH82{z*xL!N&Sr~NbT!v~.Fy9Gja`Yxa2]O[{_Wm|5dSdn$oc|<3^h' );
define( 'NONCE_SALT',       '6du(aC;RAF9Jml`s`[p2o,EHIa*o*dF<kKK7ef3]dco{oK-W<I.HNA?V5eE^0+Qq' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'fastportfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '9Y1_GZv*E3 =EP>.a`le#Ioy+Sv/mGaY:r@@#!a5R```u@R >;Nwul=]-k<@eAD$' );
define( 'SECURE_AUTH_KEY',  'B@?%Msh|yO%GZBp RL:]RH/B(/AvRAB<rf?<1K0`y/S5a<{FtHCRPD>/HE0rzt&*' );
define( 'LOGGED_IN_KEY',    '}z<(Vai4gUYuUj&%{P9cY]_qX01>X 1Dx@?Jkp3cmqC17B)b|6%AdR]eHIydk7AI' );
define( 'NONCE_KEY',        '#VA]KpL{SupgGV%#z@#IE6XWZ7jEvwW<_LM%=J; rawm]:hIwqb;;|,#yZ$XT_<B' );
define( 'AUTH_SALT',        'O|4EEX9Br5h~]toewQ@g7v8P $Xnfq_*i^ZpcGG<4!cDFKWE8Ha4xJ<haVi6t>d#' );
define( 'SECURE_AUTH_SALT', 'EE%xyF?w#e37b$t&#1./B*U7[N0LR`a_e=gP;I6n>wkY({xfU;6U6zl20tKCe#.2' );
define( 'LOGGED_IN_SALT',   '2Yr.b`rcvy<TT[32PWw(-^]=wMc$)j@jX.0:%Lh/::+YgGU`Fi(OzL0}^1cklZ4T' );
define( 'NONCE_SALT',       'Rh4UByBg/2UWC9QR:NnVDB(>FfN<BK1!PtRw:iMwyhaD_+MrX: t,BGm+=(Na-}V' );

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

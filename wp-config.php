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
define( 'DB_NAME', 'e2detailing.us_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '#+-!0eb-vUjrR+^T!@MJ%vlxml)2=C,W8m7],E[?s~p(160#gme*^(b3@fDEOuMF' );
define( 'SECURE_AUTH_KEY',  'N~9X8|JR?C`l( }Nu%J0g*II}x}JY.nXvnDT]FApD,=G/eyEAmc #EIUBihbHh.A' );
define( 'LOGGED_IN_KEY',    '[>;7<s-&3XHcGibf~eAxlh`*7*gL+pgS*!wCvPFN?XM401>mU^B)<~6fEH!8eW$u' );
define( 'NONCE_KEY',        'o[1YNr3;Sqe`mx1Bg`Y}$xZ~N>nk5gZk;E>/y9%<1a?on4C5B#C)u>e2j]$?[g1z' );
define( 'AUTH_SALT',        ' XD:^eT]G*HE9T P.e^I?4[.<k0b6%u|}W9{9s.KF&t$N9NRcDfM6,@*F7SU&TH^' );
define( 'SECURE_AUTH_SALT', 'mNup$}:c(x(HFwM3h.l8~LW+;pKVKQ N%}p=.(PhQ5b4?{umd{F7(L]aw!gJ?~w`' );
define( 'LOGGED_IN_SALT',   '?`L<Ylg}NU*B }aTlJ)X32-[Fvg<Z}O  si`4^_Ldg mMFighmW<%:{#qB2~>S&m' );
define( 'NONCE_SALT',       'C9D-a,p0`m|W|B:zxm}q} >zz8}mPbRxCzZHLErRK`?]cvgHo`M`izC`D=Q:GLnM' );

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

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
define( 'DB_NAME', 'e2detailing_db' );

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
define( 'AUTH_KEY',         'wR N4CR7k2NNq@7k+vzo`QadJ|*tF}zuH):@}6Ji$BN1SVU46{B9`<H/?`R98`$K' );
define( 'SECURE_AUTH_KEY',  'BFg{dkcS,}xd1Py+k;Fx*>iXENT+&ui ?EaLPH=jwbn/~t=qaY0!Ez^`o-%:5[WD' );
define( 'LOGGED_IN_KEY',    '-lc;]<@-T9g$,`[Q:DN%^eMqyG4+Jfiu~X9JDwm5_RL~?Vkg!:?61c!C6b#22Lke' );
define( 'NONCE_KEY',        'vDp P5S_FvA|za]0.V_pu~/2@Wly_w[~ijIv:h{:{y(Y;9L?d6~06yEJ,Oi%#i?6' );
define( 'AUTH_SALT',        'HPwbVV$*GywQehc$`f4;vNVWN,x+j)b!!%1kuv!Uk07 Bh e$b;P%=v++c$65~xl' );
define( 'SECURE_AUTH_SALT', '@ `H=d_t9de=ezXw0hYNhj66;l[K)P7L|Ti([<TXSo%_,C[d%[{U?$``~RZf/~+x' );
define( 'LOGGED_IN_SALT',   '4rPt-+Rd^J3)kzFXL5Y?SrnlJUF*1C<#3[KwDpiT%Wo7qQ:f4|Oh!G!b=30n^RcX' );
define( 'NONCE_SALT',       'c2dF8<MsaH_PydIvx=4G*o0i]`ml`9dkD--`Y[u~_P.5p[dg+YYXxjB3F,s?l 3<' );

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

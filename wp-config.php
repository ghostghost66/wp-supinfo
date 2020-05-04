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
define( 'DB_NAME', 'wp-supinfo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'justdoit,.123' );

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
define( 'AUTH_KEY',         '!GDBUU{SD$i]N;lu/R>w*2LCo:2d)9M%=m$,{1=I:,V:;Wg0!c1j}HFhgNH]M-]>' );
define( 'SECURE_AUTH_KEY',  'CTOdD7ICe0DL.S<oS !K*p)v ]!vUH6bI6;Yf`O}t;|4GP;c_ube/|+gO*V%V2j*' );
define( 'LOGGED_IN_KEY',    '|;B:fzFk2+4^]W#YcR:qYUit%lEc*{;*ov[hwh 5}&84i2DI4z!++~~C|T(# A)t' );
define( 'NONCE_KEY',        'v1sdiH@+l4G.$xKWd%OQ@32q*pIXJzYV;yRGav1.b/ULR~_~na.lVOOfC<a}hZj6' );
define( 'AUTH_SALT',        'xLFFZOxz6RFF{Z&(Rs-S6x1 B@3RPn24pdZtn^_amOYo%Ivyw&L0frDAig4/:!s|' );
define( 'SECURE_AUTH_SALT', '-OA,.-C?tJE{+GDSu(7wocr8:0K*D@7lH66A-Ja;Qh|)/[=HqknE&*IK@WQ-Zc)k' );
define( 'LOGGED_IN_SALT',   '-ATe`_ $F5>aS*.Gmo;oW@O/afQJ;sX!C)wnR4[n:q5h^j&+kn#U61tudo2qvs~2' );
define( 'NONCE_SALT',       'j3bVl hNm`-6sBIHq@CBGHg+],HKxlSkhr|bs6eVByMtpmGU@$+ONj|_g;uT-~r8' );

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

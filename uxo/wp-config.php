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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'uxo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'oxhO-ycyVXcdPAbe8iTRmsrekioE^y/p}ddfI]r3Z,c A.i>2m.K)Uqm7N;LcGQ>' );
define( 'SECURE_AUTH_KEY',  'gz%G9qw6p/`:|++}|XYS8_KldGh$37Ip}7HC:-#+FDPDq_fZv]S$.qAp;9VBC-:W' );
define( 'LOGGED_IN_KEY',    'i%G^o<c>E.F>EY!2NSZ(NAW(NI$5ipdf^.a:h`NFT@;$P}o%9*pWg~7N7R@faG&Y' );
define( 'NONCE_KEY',        'epF@C/Lo?p5.boe9!Zd@KHHC1GP#>jve8G`0#Sb@[lo&5DN)#f.?h2:-GPt3Sln^' );
define( 'AUTH_SALT',        'u1ElNU<Y3xW!kwOB&L/|&MHRcI~a27<8|.[An-:P>T,=WqY5vLTL!ZJT7d~U(EtG' );
define( 'SECURE_AUTH_SALT', 'jFZg}6>6HHM:kmRvjwni_#-[Ax{Vz!.^#%u|.=:&K$b0h!h?~H}Grb[nb-#O|1_7' );
define( 'LOGGED_IN_SALT',   '#1we$MbZ,<ai Vt]w^4BuA^k{iNw.-eX@)@LI(@vWTJK0P/nA:ewZ?D=P*987YKz' );
define( 'NONCE_SALT',       'X}sjQgYPw^bGK:X4yoJ):_y&B?%VMou]gyN7t4(TR G~Q;2<Y7-hj`iG>VxRw|,Y' );

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

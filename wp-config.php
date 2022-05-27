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
define( 'DB_NAME', 'testwordpress' );

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
define( 'AUTH_KEY',         ' { u,~SBz{:Vnzafi}b;y:ne8!~]%vo8*2u[}{$xq&~r]QESEVyMd1n8.P@akHG{' );
define( 'SECURE_AUTH_KEY',  '.*k3jB`~N3iZ_ 9[C|(l~8R?=77pW)s.V.--P4@L~ISt/<X_lrfF*4=J/%IQUlsz' );
define( 'LOGGED_IN_KEY',    'B;f9)bON;uB/0;Z)+sro.`sM/iS+(MyF[B2eqp<(IM3$~uc,%K)vIf|<`<)+VPPM' );
define( 'NONCE_KEY',        '[.L.}nX.qk_x,WzdHrVfn)(vB fFQ.IQBV/,XaR $KkuzQdI}?fb-8UD>{i%,;uN' );
define( 'AUTH_SALT',        'xtm Y7y`HqJGSwk8rc/ !Aln4]4uw/?$!l7 u0%vS{p|a=O)[,F@?4}h+9(wKB>X' );
define( 'SECURE_AUTH_SALT', 'pvKa@[^)G9]a#`1-HOdEiI, o%c~I^Wn3a|piH*H%)Ocz2vD|_!fUR7|X6M.a19~' );
define( 'LOGGED_IN_SALT',   'a`nALDzXKS-]{3w5/*1&UxYli<s_BaeFbCc1ENl6IQ#gzDq%p9zgRXH<_>fKDa,@' );
define( 'NONCE_SALT',       '.&.H}8IJ^8N:4~Tf#Ao;MU)2.WTjan&*#y7a5.uJZx,xxrC7Q/|.t!U2rL+`LQ{4' );

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

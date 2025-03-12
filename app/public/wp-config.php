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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'til;usZhYlZR#_@8~9>HbN~.c.^W/f{B[*l XIL *T7K5{DZ5zMo>dyoXZun)hZ}' );
define( 'SECURE_AUTH_KEY',   'np4gskvLHr1~.;#HI7>wfq2BQ{0Rmlw|w)aW0&DZt-j^Kc*RSp]S&Co;_&G~9_:J' );
define( 'LOGGED_IN_KEY',     't?B!h;=5HyvCE#-FYsORN7L9tyjM&Ip#Q2DR+4(E4XMwq0c;r5~)Bq#Dvdcq-2Go' );
define( 'NONCE_KEY',         'qA})X<F6jPed7SC1HV$5XoeL&5(~og[&,cwL!qKgVV{_6(*cp0iq.DXY(^YeJ}Ql' );
define( 'AUTH_SALT',         'D^XQ2rU4[0XfDmo.$VMJPE*E_b_rXk&$rrXQ3uV+dKOb@=S4vf(*B4g_pEbm=N#u' );
define( 'SECURE_AUTH_SALT',  'h(6~ <rX*4xth*wu-_/{moFvE${#/9Ur4y34:@[qSEK;`O}KJxIrm&)m9R;^k:Y6' );
define( 'LOGGED_IN_SALT',    'za~XVSX%K&a{8V V)V2*CLO]DjM[t]{3OG[LaiEy]}W)B]n$:Hr1rx%GPx8rrH^R' );
define( 'NONCE_SALT',        'F],T+~O#DMH(JWr`^6^?&M4QrXV5M_|]99q!1AG.q0&s*r&iqiY?DVOKe^1ZzwDh' );
define( 'WP_CACHE_KEY_SALT', 'M$NUm3md]<Z2k,F;LPTZlI-}bDjL55,!)_4VSTf=Nw3,,zoQ@3BAcPp2uB3WAc|>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

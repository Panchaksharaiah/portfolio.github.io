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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '[_)pL./bPa)/x3ALQ{Y8EK}1XuXGd*lHhiz!^$1]Gau[%1ziEYA4[}HJ@8+m]`iX' );
define( 'SECURE_AUTH_KEY',  'z/w;p<4us:oJ*LswXaV(Kk#9!&ix^;L^yb`!XXG ]9X)cxs`W2rgz@N``eF(su_9' );
define( 'LOGGED_IN_KEY',    '}>uO^:i~-<%fodI=bKh3s{a=^rSvi0Z_G)f9.h,+hDVI?r!o{X&1*%1cv ;C1j+}' );
define( 'NONCE_KEY',        '`dV5s1Do)U3Z9WllU!bsF:#_Arp0M?oR%IFE|]Vr~;4gT)M 5X2$|IDnlW}`*0B ' );
define( 'AUTH_SALT',        'VCSW]@<9]XLf3)SoI3eWmdKQ4{Ze3JYPqB]_DSsczDqa#%R#KN-=]5l6ICT,3{zG' );
define( 'SECURE_AUTH_SALT', '2rlL3=39nxq^urDW+x{(XmF>d:zeZkooAv-!.`2v):%XjcSOYtR&nP!y]LC8X{;c' );
define( 'LOGGED_IN_SALT',   '6WBYKBoI)ZWszJGS^f+DXnmV_?JVa(jtUlf7k4O#Nn5Pw7eP$zl6Q{m5DCQilr<a' );
define( 'NONCE_SALT',       '2Xevaht>8-MzD>H-qP?U?0kT{s_hfFpu<Gf5sRs/j=~M}s]puJh.Gsks8]TfB_F+' );

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

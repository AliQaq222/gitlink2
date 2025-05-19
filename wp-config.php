<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', '2HxX4TITrMiWw7kjUZ6YsYP0mODXRc8u3Df9PZ3ALIrJdB76tBwa1lfHoHWvTWHO');
//END Really Simple Security key
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u116807097_8W3La' );
/** Database username */
define( 'DB_USER', 'u116807097_dhJ4k' );
/** Database password */
define( 'DB_PASSWORD', 'iXXdrgOqjR' );
/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );
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
define( 'AUTH_KEY',          'Y0EmW8CMJ{!X[EQhHZ#}k*mO,?PTpWD5^Q6eOlF=pb(Q /nO3GCWa#Uu=$vKdBT5' );
define( 'SECURE_AUTH_KEY',   'VG4YV{ZFqAYBr]7&-=eCSiabF%F7Ok}eDj$DV]wRn;l#OP#!WI96]Jyj;D]BhZ)I' );
define( 'LOGGED_IN_KEY',     '~MVGKH)<6q3S:g/]PG7)6%>.V?-v^d=,y@v&th^NaH6-a@6&#SeR-x*zq,Jm:l(<' );
define( 'NONCE_KEY',         'epxyjTMd_EW?Sa&q_byq0%6<G5lYj/,$|T{a|ljLW?ucoZe,KmLqVuPqdd`jsO&W' );
define( 'AUTH_SALT',         'iP(m_r^R[_!5pt v~N#A|Pu}1C(Lk&F@Zf8fB`-;F1BJ=fD_lhyR{t}N1BvPha#V' );
define( 'SECURE_AUTH_SALT',  'Znlj~;4<ZP7;@k/k-h&T_l7^qbH|kq*Yp[y[{bh2m0i{D]4akfKjxqWAutfXtt47' );
define( 'LOGGED_IN_SALT',    '7GIwnBBz|rro5nUgv 9V1b>Zn?Da7ciNlm1]@xN$C,oA/S3jIK$?hvcI`+53i%OS' );
define( 'NONCE_SALT',        '&%O|.0Rxv4;94?t^,nx`m6kH+nTDaWb9z=[ep0KLS_q!b(g#(6^`<2B@k]+>B>Wc' );
define( 'WP_CACHE_KEY_SALT', 'q&e0,Ll$k@60 Hs[?x|o ?Cd@EqErh=DKbbA2OMu0X%=Z7ziO?e=kCh+)P={0|^8' );
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
define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '036be6bb264ce927b05a696081b3e2d1' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

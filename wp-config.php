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
define( 'AUTH_KEY',          'W!E>q>,*yuAcfevbPl&Q:(Og@SFxF2[>+D>P6@8!(p%j{Q{?qjct_pg>a@Lq<NKo' );
define( 'SECURE_AUTH_KEY',   '(ik(5~qEm1A+&%fH2U)5-b*eDHtM#HA0Wx/0oi(VMV[O|h^/IG-!`!]4Qz2~z| )' );
define( 'LOGGED_IN_KEY',     ']}r/pl^iHCHe9 !4rU%`;<@,icPv,9q>;`]iEh;~~yPTi{{zWM<BHz&M{@t;#:|]' );
define( 'NONCE_KEY',         '|`,C=6DgW=kZ:M.|5l&0vO3>dss[tOWsg&1Z&5AhzHX$k/@{._;XZfXfUy}Vj5<O' );
define( 'AUTH_SALT',         '#TGrAfy}j/e~L]_.^EG=owH|+s3P)YCic]Iw`])z_$ypxm <n%%4SI!kq02;4xk0' );
define( 'SECURE_AUTH_SALT',  '%uCSR=(1Qi[Vi4Z]#yoor&BpJ:u/Ss/B3bAZvU1=_|Ex^PZVR4X|i6[_#k;@S#t&' );
define( 'LOGGED_IN_SALT',    '/)rLF021CtbU[!lKvvl)K8^u?ZUp$@%G.=LCl9mo<vyT)T&Qe;V/|[s%r`(C9SNM' );
define( 'NONCE_SALT',        '9XCW~2BS~(zSEoo)M}E{IwF,)El8<:4;tI,rO0~VHSje:e#BXs3V|O0kHSM` hXM' );
define( 'WP_CACHE_KEY_SALT', '$P$#c7h]/Hyave$%MY)9M{xTu3Hk)d1J6Lh<+LMAZ9e6Y 0|yI}@C%Mqf1cE2rIz' );


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

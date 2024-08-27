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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mikebikes' );

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
define( 'AUTH_KEY',         '+NTAX^5^pDDw;i{}g!?lGS.*)<6^*nX?s(=2v1|BvmGbQ[q,p)7llJq<0mVQvQZW' );
define( 'SECURE_AUTH_KEY',  'c0zy,qstGR#leSt)N9_#m?3>a/6][nU/eiN.s%w])J`pq+9mmGpFO8O,Iy;_Ez&V' );
define( 'LOGGED_IN_KEY',    'q:#5CT,/QmjQPxP=EL5O/)#&6QFcQH6C=@bvTqZE)#v?,[raEL}_06VqVv+g;_i]' );
define( 'NONCE_KEY',        '*rS$6xWaNbsPRA<c*sCL,))X^icZ4zb.X61pDi]4tks$E|<t3vPj8SSB!NNz=57y' );
define( 'AUTH_SALT',        '4ELL){N$FE@Cq,#kYB[9AMjCq#*FH`{`(Nqawx4> SY$7W9DSQW*EJ#Rh4f2Cm.b' );
define( 'SECURE_AUTH_SALT', '{jnK;x5S_I~,6_|4P{]X5UK2-[CaO^L5+N2.c_[y-#dk:WQeFPaxe5KFxaKN)fI{' );
define( 'LOGGED_IN_SALT',   'X1Ix~I{$@k#C^yim_PHVaK`h_Nll~g3w:=}FIRTP)>-[U*OBKySJi6(ZdScmt;U2' );
define( 'NONCE_SALT',       '%xh3y5&u0x ]|U_91-o=6q OO,f^E!Mx?x(:.E8c=NxAM3;SCP@BL^kFit>(]ZdK' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

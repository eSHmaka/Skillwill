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
define( 'AUTH_KEY',          'bNMZ(+ROU,|0>*g5K>ZXH$:DH~riek I<)Yl~fZ.cW=rpDkC`gp>if&waA3k)RmH' );
define( 'SECURE_AUTH_KEY',   '&|19!]x1(En2;)kdk@{yee-Iwz?M%>LQOl9MT?s&slX/Ey_[2/lTP~{[PS&PZBBp' );
define( 'LOGGED_IN_KEY',     'J^iXy)c~n[q@ G.vYt<( Mt0GYs`:A9y6s0zS4?cnzddn]v00SlJ0x2&B7p8<QH`' );
define( 'NONCE_KEY',         '$ZLQrJm5mf/T&[6PA 6oU~>?H!eN_:@{Vt6*,)`}AdU}.h~[ZXWblA,o/h/#|t;w' );
define( 'AUTH_SALT',         ')RRsQChs(ej@C-pz{&gPv/C|R_S.mQ,>E {mYdR)r/ml[Rb#eM`_Pz)b6|jb!=:M' );
define( 'SECURE_AUTH_SALT',  'w wkk^I=964B6nT3Z%>m/_,5fHl3D&A-gq8k~hwtBp0Uuh(,&eCtp^0`Xr|JPGe0' );
define( 'LOGGED_IN_SALT',    'cck99E26WpJ]Mbey@[f^)pv 7_N;do}jx8Z3<K5vIR7SE}!ANopNK#OL!&@sc)gj' );
define( 'NONCE_SALT',        '`#T^^-V3-kQVYTd%K_d.%~-fe>A_SS;6p,^*sQ-^Rn5]XJ 1F;$+H(Kgsc*W(w)O' );
define( 'WP_CACHE_KEY_SALT', 'R~kEL_8fOQc;2xX73nhn/8q0c+OJvN07 xc:=vALY}8[qpN[<K teo 1?tf@L~):' );


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

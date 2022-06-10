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
define( 'DB_NAME', 'kviz' );

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
define( 'AUTH_KEY',         'Yu~mc](rJB|zhvRWrrYAt.PAoRNJ_mOcmEH[ar1io}mp+2aH$aW;|w!](0fTv;Mg' );
define( 'SECURE_AUTH_KEY',  'TzX0#[1fl.ckqby^ _cdsV),Wj%I7F!LN(;DrxpRkyBW$*2ddp9t`p)w$3)s>v_V' );
define( 'LOGGED_IN_KEY',    ' (Opc|+kV,&f9~BxB.(:UzaS@5o~<(@Dd;lHF]MoYn!d=CS,?D%TKE#pMQH!#-`v' );
define( 'NONCE_KEY',        '.39Wf(QudooGhv>[.6MpjUbI}%n9OAaEsB3sba+CQ00+[G^QH[pqIY9s_*1vLEg@' );
define( 'AUTH_SALT',        '}}MIckf?}`{P-?h`arb2Q.xzVP!}]iu!E.g7r~Eu<Kd9B85fOWn48P0rNEb+MJ*B' );
define( 'SECURE_AUTH_SALT', 'pi#,i{cP]B(u&W+El{_vwFpEl60cpG^y1f}p#{~T-n@R!^/T*Y+VRP1?qt`A:8:f' );
define( 'LOGGED_IN_SALT',   '[3(O31p5V.~~0+`F8lfRL;vL0nD:Iqc$Z<P~PChv^,ObJAVpIPZbv^YT9A@DJ[#8' );
define( 'NONCE_SALT',       'nxs0rQbrLH,)7d4z (WMWq.|%t?mFTo!-BYq>%06{7jza=IFau<rJF.e@PXuNsAP' );

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

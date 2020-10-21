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
define( 'DB_NAME', 'netlify' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'fWmNP*)zONI#[c_$<JB8L6Z pSS~}0?oQ31~/+TVc)8[2dZ{;zR2CwuWos=K{Ike' );
define( 'SECURE_AUTH_KEY',  'js98>9K4S:/ FpH1fsU->5VOL>G3?uq*tSUW=|F&oLU/`wSC@~M|P<Mo+(bq3mvb' );
define( 'LOGGED_IN_KEY',    'YD2-s_)dHJ)U{?Rt)>?1<ori^P)lwv=)}Ap,6iM2BV4C~F{5|_! G(fjwHtv wr>' );
define( 'NONCE_KEY',        '7pp/-~u[iZyi.9}z.2)~q%vP)?TjJ`hB,!Q0^G_wg->v@RRl|Cl@Wg(oh[t!-TUM' );
define( 'AUTH_SALT',        '$ ]L$;ZWF&WH~g[OhZl~IO9fCMQk|2?h1Fb}aICzDdIj~mHXv>R3[pQl.d.qUbd8' );
define( 'SECURE_AUTH_SALT', '9NCCuQ?^=l%B=D.1)<7[?3`)DbR5X}([?*V<mXJ!:dH0$7L=:JS*K=yFRh`W`kP)' );
define( 'LOGGED_IN_SALT',   'pDD9(;HyUU];Mvqe,&s2xE{].RxKy2&9jvY5niqw^v-[BDaa11cs3%Kuv?PqqNus' );
define( 'NONCE_SALT',       '8p0=g^;3BW,_~dNHm(s^vwc40+F>dQH>Wkp)JyiIDc7[i$,UD[:beDskL~^{6x+ ' );

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

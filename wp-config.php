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
define( 'DB_NAME', 'db_flock' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '#lG(u%#[S>zv9t=D>GvxCwD#/Hs}a+%R[6A5`])<Y<2]dHRen3:LhwX0#NX^#Mg4' );
define( 'SECURE_AUTH_KEY',  't#[ M6*1K:(I0eW-C7aXz@[UZ?936+dGWgxMu0PkPIHu+;`R}!={6u|a1uf$%Wlg' );
define( 'LOGGED_IN_KEY',    '{uI[s6AdCu[!)Q!;9^000V,AzcxD~Er@W();@Oh!%r$c|`2Ka)~%:BpWx!FH1E/?' );
define( 'NONCE_KEY',        'qu@ u1sh?!`4qf#MQj9y$BB9c)p6?@biKM0[ cQb=`7hw?Ta!59.LG&./%/qmdq~' );
define( 'AUTH_SALT',        'S$z$Kmz@_~G4Gw*_i7I,Cq=+>JP[%P )Qm}#)0[v`)Af63h/~X/Vpd=_OcQ.ctPZ' );
define( 'SECURE_AUTH_SALT', 'Ye2nHwMqKZAXX]SRc7Fvj5%brGwPQH;H|T_Vww7#@901^Sn=1NbmsiaN~@JX_C^%' );
define( 'LOGGED_IN_SALT',   '!WO:88j?o,%0nug|vcDF}PW7S~=?3uv2E@q=O>?m7>(kWeXTu~^_C^&b%bNOeUy.' );
define( 'NONCE_SALT',       'wJx~%.NL/Cu<e+znBW`FnK8WJ)E&E?dmI:D&sZ,oPD>Rux.^t6W;?bE@4&tiE*w`' );

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

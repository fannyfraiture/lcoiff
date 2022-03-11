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
define( 'DB_NAME', 'jepsen5-lcoiff2' );

/** Database username */
define( 'DB_USER', 'jepsen5-lcoiff2' );

/** Database password */
define( 'DB_PASSWORD', 'Eg7tquA8N23HzAdm' );

/** Database hostname */
define( 'DB_HOST', '188.166.24.55' );

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
define( 'AUTH_KEY',         'E{7?!-`3moo[7/0d/zT;1fyb~(C}pK)U95+`L}ZWCFVIg<:35YEpi7qjU#:n);C7' );
define( 'SECURE_AUTH_KEY',  '_8zCj@Ew{]C@_KQdSRL^p7*Ox=%6s29kO TF S%_z<ul`q0#)!SXg.s8u60Zc}S^' );
define( 'LOGGED_IN_KEY',    ',*R1lJ~NP[Mpwth6MbflT9<|5{*ns4qT+{gk{M=[]_~r$+ceP+.P88+g/>DCVb9s' );
define( 'NONCE_KEY',        'l#Z EP>Y57,iU9FXs1@&m#f=<&nx`o@ &%!oB1.&%($7D9b4CbcZ$f{TT.7|9fY$' );
define( 'AUTH_SALT',        'kR5~Q^}ljczFj(u!8F}<j_}KCUe:-]}Z~@Jppb8IE2,Li-SAc~q%bSOzB6nO50}3' );
define( 'SECURE_AUTH_SALT', '?i<|*3UWptxb!(vC&>~7p:0]Yr%;;8ZG Yi}T=*QS=oEr?$c3#BKv9KM1tWJc==g' );
define( 'LOGGED_IN_SALT',   'Ae$ZbJ2f559pBMDVsq02:N`U3/yy-|Swlv$mIP?dkS ?$%O@3(;|sVt=k0vfN?6;' );
define( 'NONCE_SALT',       'M6fzoeMv k#)M3rn_d -oxHM*n:h`ngtK#fP0gl5?FW{q]/[a2}3e,NwM{z[6yUx' );

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

define('WP_HOME','http://localhost/LCoiff'); 
define('WP_SITEURL','http://localhost/LCoiff');
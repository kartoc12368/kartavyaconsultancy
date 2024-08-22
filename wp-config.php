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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'yo>rE#`vuiNHiJyy~{v,(6BI$Ms;[,P_ }.6Fa;e[0V4Sd,5@1j:hO6Fqc[8@RB`' );
define( 'SECURE_AUTH_KEY',  '`S.Z?>GtgKx*K#s*-L_^UdK6:f[u*!x-Y(Ub,^P)>oqcAivY}wkx}B/ML0V5D~q+' );
define( 'LOGGED_IN_KEY',    'aHS)pd6lY?Jk1|U{1{%E9rcWCY?^/HY|-2|]+_Z3/48z0B4U3DE+S4zf5@8:QpBU' );
define( 'NONCE_KEY',        't2]FlXbd%y)NFEIwSp-Y1}#Cn;_2D|Q>7.J6pp>F/aD#9WN+ul@S<vms/6jt$Q|%' );
define( 'AUTH_SALT',        'V)b{>!xtP*$pL{{+PWRJ|az$,X+>c_.B[RsJS8#.#Chz/EiU3i<oB-@3)T|[lJRG' );
define( 'SECURE_AUTH_SALT', '$pB}pPB$C6py.]Sjrdb7[.w&.[Ba|s{UCj(,<Xpo<X!7+Qe [2ymmm|PEE?`3L6M' );
define( 'LOGGED_IN_SALT',   '=6lhk|2WWRGdTw|hh_:`RwXxu4^A]M:{xJD>I,Z&*Z^I_`bhNZ(MdgJ/6sub-bDJ' );
define( 'NONCE_SALT',       '+vV,(J:O~H;%~^P8x^P]&>ZKHdb(rjr@>cUWt7U9]zgz-RWpK]F}`ra;i^bW3V%6' );

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

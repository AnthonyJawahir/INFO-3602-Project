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
define( 'AUTH_KEY',          'f$I^[)VY8P8956QCWuLJzy>$+<4_6e WqV?2(^yE2N%afBC4EH+4@a:N{;:kgLbJ' );
define( 'SECURE_AUTH_KEY',   'oh85ZM}a{;7L9@%P {/J63$&$<&Rn_7QM=.fwmfThD]E%`,-=[@] -To[]I*Gg!K' );
define( 'LOGGED_IN_KEY',     'q(<T^vh8M3wauZb/Lv2AYhH&y0am1dBjK1@!<Fo#w>Q>ik+hTf`?Wr3aD5l]BI}X' );
define( 'NONCE_KEY',         '7]WMY5D<3}F/ov4S`Q~f?.I]NwxQ$^T+8U{kDf S&`pZ0pMu0e1AnW5-A=/QG= P' );
define( 'AUTH_SALT',         'PyoW)N8`s.=SAd[ui_ewO[D9O${MJLtU<A7+O^Sop8`t,H} aydP;zQa.hR9YW/g' );
define( 'SECURE_AUTH_SALT',  'ikb>S]l^(C;:d:,*[k@@~`1,,S1_V>G+M,H_nEixo9h4=^5FjFu71[/l}edpTCn_' );
define( 'LOGGED_IN_SALT',    'E}7z!Scr|cg{I2rP@o0X~69}H%Oph=,aSrbh]hW,V)Yy2|3$t:2/T;)O,[ N6l#d' );
define( 'NONCE_SALT',        'lPyo47}<bf2elYlJP5iw-Z;+b-+y$kDl<1q$}hpH%+bYa9A<% 3m$23X+m|R!L9%' );
define( 'WP_CACHE_KEY_SALT', '|GT_F*C%w&&_tPb-5uG6(-!@?U7.<baxF<mI-J4]0f84Q0h^+-T4u,Fy|&em<?#8' );


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

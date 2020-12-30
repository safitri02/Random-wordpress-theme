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
define( 'DB_NAME', 'wp_design' );

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
define( 'AUTH_KEY',         'g/Uce fyE s{O+@]aTsN?@!d1Jl=%g}b[*OMN 9+}jtd#BER%+42aEVN}n81l5ZS' );
define( 'SECURE_AUTH_KEY',  'iTz02F@!%};^gLA!10UZwspZz%G.[<Y9Ch!*frkT`z@DU~QF)be&gA61/H]Jo(!0' );
define( 'LOGGED_IN_KEY',    'ymrt;&2B0DFS/O^+my,ls;8vRvu=(]nJS}  D f1[9} &jWfOMTltkX@6oQbV[K|' );
define( 'NONCE_KEY',        '[)XLCp@_4gdAC:!:1,]E,;qEZKi_O:VY4&baFI>{mtT!*]0_LqSmJ7V:.NmDQoPi' );
define( 'AUTH_SALT',        '+XT&KA7qgvNJdoc/O@7vV>^[:EDA%5o+3CG)Q~!tWxQO_%p7o0Tch>{S7_FC!hd=' );
define( 'SECURE_AUTH_SALT', 'I7>cXjFOrRw$xX@,FSJNP5S$a>2$Km]tCG4Gx{LveW09Rj:1c8,B!nWLC]L4<h!O' );
define( 'LOGGED_IN_SALT',   '8&IL0no+th8I05ffj3~LIfczn5p&:{qFmE(H8f:nGK^:HZCuJN=(9o^(oVDRsxu?' );
define( 'NONCE_SALT',       'SC]5k.9}K0IJ]S H(}[>]wQeALL(O^LLmGEHl){@;1yJ}K!n?=(V:RkPPpxB>2!d' );

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

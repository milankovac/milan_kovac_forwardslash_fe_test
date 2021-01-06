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
define( 'DB_NAME', 'db_forwardslash_test' );

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
define( 'AUTH_KEY',         'csqwWilAlo5l=}{RIm~o,nAfvFt6Ypo@#1CCA!+<w$)EC8Jl0WfJkTnR{izC~MuL' );
define( 'SECURE_AUTH_KEY',  'P*h;b.$y(]x~ nLw$9t@%-6)CPj/pRJN3Hl9p;gm_1)YI*sTFb{U[pg_d^$2P!D2' );
define( 'LOGGED_IN_KEY',    'x!Cr~H:`0gHVOpziT4awD=?e2V@6=b~Ah,3Gx9SI;Rw&<7A&D)^2h/ZvGalq;n)a' );
define( 'NONCE_KEY',        '6$}$W`j:E#g zT7VmxS6jgAL+aMnXz}@$Q,Jf*3>G*[IG/b{eQ-@*5C@J%IxfqOk' );
define( 'AUTH_SALT',        'z4Qro]ZSbfid1;{2_ZQ7RNCfoWP7OT<dy9ZD.-]|EnV08jUntrwE3~ik%R1iklTP' );
define( 'SECURE_AUTH_SALT', '#OwFj*mN]ERMwQmpV{zNk0UZy/w.$/I6gbWrm-tL:+DL)&R9TM@_&=y!a3P/(XD#' );
define( 'LOGGED_IN_SALT',   'wyoOpgsoPpx|6&h%A_b_M,Ji*TRC`,5L8VJ}FC.pJPLCw%{i:AR?/0Xv&b.cWoC#' );
define( 'NONCE_SALT',       'DzAxn6Gi>,3!k8V. msy_XS{RZHW&JGM$H~MB}dhgr?C/2N!GVkH{5$J^z%V-W]F' );

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

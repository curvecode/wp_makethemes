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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

define('WP_HOME', 'http://localhost/wp_maketheme/');
define('WP_SITEURL', 'http://localhost/wp_maketheme/');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_maketheme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i2(eAZ)Oo9wphWW|X3-x>KCYb*J6/O KLXk{5g0()Fo[@[E{ZqZF[Ph;%1VC|L|p');
define('SECURE_AUTH_KEY',  '9Z<!s@/2d:8_ 81VgVhcJ,v+DG4P<qY#2H-rBqZkr{B|xQ?Dhy3dI}]/]*U+AFiV');
define('LOGGED_IN_KEY',    'uZ.`baZAd}g8qrI,u X(gYopLvD7i0Yw3$z60{^8qFP(H-Jq/rYzs~?X;}bFql3f');
define('NONCE_KEY',        '*k;b$N0x5zGK^;8IjV+mg%qHZB6^WbEp}j-[Dk~^DF{3q9s4mDqnnE z&A#M|N{h');
define('AUTH_SALT',        'Dg@/vLSpKbvu&H@CEWz*IYG/>pz-WQlZ&&2d_xJjN:>wkcWKZmyZ``(mcr(a2M^z');
define('SECURE_AUTH_SALT', '*G;duJR<B:%ansuZbdXFH >nC8?,@q(_|.0n/5%-?uxB<U_|=60kZ/7cqn1x)Cz1');
define('LOGGED_IN_SALT',   'R7MjW.|S5f]SUz!tRhzCxh<zpf]#z!RrK%x~w`g~u <q^<9{zi[Pa(xL5V^KcZNU');
define('NONCE_SALT',       'U{EDE(B`7{$R^T`%q:12$!b1Z2mt<6eFO.yBW-5VS%X]NE |EA2JW9Y(Kdeka]g0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

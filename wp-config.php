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

// define('WP_HOME', 'http://localhost/wp_maketheme/');
// define('WP_SITEURL', 'http://localhost/wp_maketheme/');

define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wp_maketheme/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_maketheme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'E0Z1[xD/HW22PjMw~h]8C9usI|Mt0w2-:% <~vLT8;J4%MKph7JWqf.dlW)){pD3');
define('SECURE_AUTH_KEY',  'mzlLm*TA|pg/rA/k^D Oiq:Df=cHx3rc/S%piF0~h_NLwj??Wlpf8hF[~2}mbeNA');
define('LOGGED_IN_KEY',    '4;TjUH=Cq`|ZK9t?8Cc:Kn5NFDZ<!Mk1K1^Or]AygW?(L0dc*V@=VzChX;ormn(0');
define('NONCE_KEY',        'l]a#zM2*p@g3xVTC]C+;A4LN!,Cc{,/-SjLwMzY@$[:44`fHHG](ipBe~53oc_t1');
define('AUTH_SALT',        '`F7rTQ6>gJW2@gK&r150F(aUb65yNy#jjt9>z<89V-3p~raf,EI6 2#MtZ!pX1<E');
define('SECURE_AUTH_SALT', ',LIM0V]/7J9qx0Zq=+.4j9.#EBc{,[Q?AaWX@ +Qae?gN v`-h%M:])Nxkzh^{l|');
define('LOGGED_IN_SALT',   'f_mv`T2y/1.Mi}S0iqm*msR/owD6bv@Pc,K=[vo(k*>YecL:),Gw^+3f3P5RJm*s');
define('NONCE_SALT',       '#]c?m<CR!a`/P0_h++$;r=0|9!VSQCas^Q+#y]q06]@$o|:<*ZZ0Qo&j.FV)67B7');

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

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
define('DB_NAME', 'magnushjerpe_com');

/** MySQL database username */
define('DB_USER', 'wrdprs1@m317958');

/** MySQL database password */
define('DB_PASSWORD', 'ozxx9i44qdbtxi4i');

/** MySQL hostname */
define('DB_HOST', 's410.loopia.se');

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
define('AUTH_KEY', 'XaUbfm9w3X1QzISQ');
define('SECURE_AUTH_KEY', '7w8nOR8fF3rcY5Ls');
define('LOGGED_IN_KEY', 'YCMW23FnRFRfDftK');
define('NONCE_KEY', '11Oguk1hpKd5DnP2');
define('AUTH_SALT', 'C6fEQIVANiBRIul9');
define('SECURE_AUTH_SALT', '1uJf9vIj6Y8M5AEd');
define('LOGGED_IN_SALT', 'juyevryKCiapsMyI');
define('NONCE_SALT', 'bNbw4yNebLvgVPpH');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_magnushjerpe_c_1_';
define('WP_MEMORY_LIMIT', '128M');
define('WP_DEBUG', true);

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

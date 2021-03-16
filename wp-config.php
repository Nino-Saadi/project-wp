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
define( 'DB_NAME', 'Project-WP' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZOp9GByY5V043aGNqjsEV6eHnxLZDX2FXeCWJ5VR4WYmcjQGcMsG04MeLVPNgL68' );
define( 'SECURE_AUTH_KEY',  'UszNPE1FaGi8z97aTxY8b7GGYLyyuKpjkmTAdkM6i63Yt64rzqgxqTURb0Vqhi1E' );
define( 'LOGGED_IN_KEY',    'sp3rQScjXexyZGuHYhGGayORp7LeQP6MWCq3Gbl8rSJ3PYB3CybXt0qg4Mo6NKib' );
define( 'NONCE_KEY',        'jQAIrVZQeGkmkdYQ8FnzsRfJlG17hIMMgeL9HuEfBT7fVJ3I8jVFKF8R9iqQtI4m' );
define( 'AUTH_SALT',        'OHisqzuODUmFRll6JBGePw4AM8D9eSt1g4p63w1TOopsMySUiVil0MiTmTtczQWJ' );
define( 'SECURE_AUTH_SALT', 'ux5DM633l5Ky1M963Zj75rnAdnXEUebAKMf8Kbvh23Q60YXP7CyR36A456fiMk0R' );
define( 'LOGGED_IN_SALT',   'OYFd9xss9nZmyAAymv1nfOtHYnSKEFfFudbtmES5iQH9PGz9FjNT0EFiGVocJg6z' );
define( 'NONCE_SALT',       'gIC55AeJ9iOxbhZwuEU82HWeqUV0cTYDSBVTyR2lA5DtcsHVZoCPVEuXhv2gq7yN' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

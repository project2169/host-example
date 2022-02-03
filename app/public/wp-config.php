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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bxcHYQwCftxEv6r4x62sWaHT3dWobcxlB1J2SO7N3zGxOV2I2Y444j3m0ghJ7HclgEcH3XIapgA7QAQh/IVvJA==');
define('SECURE_AUTH_KEY',  '3wTeA/+Kwh92a+7+/qaG5YhJRWyFRMalAWam6fb0I3naoX7+yaMpYZchTZaUUSZkJjGfGtQ0+ml59Ka7FKA4SA==');
define('LOGGED_IN_KEY',    'Opvk2KJYDkt+VAfJUDg+MHPPCE+9N3Sm7G0Gglmuk5IshuiqJF16gxSl4jHN+89v3cKhbzm0aLPqdrMK5FBGjw==');
define('NONCE_KEY',        'aL6b5H0qH4wLf5reGgGGEyklfmdW5ZLudTeDYU70StSgJEJaZ8hnUHSK0DQbcmax0cFVqS8BhLMYaxrs5xZpNg==');
define('AUTH_SALT',        'ktPpIu8uyuHq8eI87+lbfzDnzI3ub3xdd6Q5DdL4vl2G79UyJdaS/V6c4gIo6HloI3ZTfxCoroy4Bj+4bxd9Dg==');
define('SECURE_AUTH_SALT', 'y24n1kZjJKItwFl2dfL1+3JPlOhijQ+q4Lq7DylePSeMEb5fbGJGswGkrZSWWPQ4l20izb7IP2L7RJC3OwByrQ==');
define('LOGGED_IN_SALT',   'W53zCsUF7j7m7WCXdWwhRiXFtnLzVfsAAo6MHKWWZkte/LGA1bEv56BVcVwYrPD1y4bQyqxfE4i0ufSpO4sVag==');
define('NONCE_SALT',       'h5f52A/QWUZ6q8KnpTw78z9XwdDrhWAIO3BA+17En4CnlIU9ssRkkV0+whiahqNq6rV8bEAHQKFscVLWclFsfw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

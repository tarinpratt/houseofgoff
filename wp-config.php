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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u569634487_jw4t4' );

/** MySQL database username */
define( 'DB_USER', 'u569634487_CwfXW' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Flauncher9000#' );

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
define('AUTH_KEY',         'ZC4Et8BacXROdPX5mLGw9xEMMcG+nd8q0RbiUVQyD+I0fVKjsnfCkyorw+4lC7dyW5xBjlurL0wEtSTwpS4AEQ==');
define('SECURE_AUTH_KEY',  'Lm6X5D+iDAa6PScOAvC61tuhKenllDeSkVFUiQQsfGYL4NP0HCkZub2cddtAkcEJpvJf2kLHbYPT2/Y+rASghw==');
define('LOGGED_IN_KEY',    'iC4hCnX6at9qmnCQSVL1AJoMxTYWqPl21FIbEh+E52tqSsxb7MMv3/Qkn1A61uFg4e9ExxFYyH3f8j/JMvRTCQ==');
define('NONCE_KEY',        'ooMsLfVwU4Vj83zHeg7RaOeTCKk7RjYrofUq51jWHCloc4n+2BAkLa+EJ1zgPb11U1JXED1m8F6Wh/pFE5inYA==');
define('AUTH_SALT',        '9VmumspfHO/vlPW3UpC4/W/Oq6sTqzSSkwsPNAf9Xf/ZhTVn1oOKbNKeTk3AqVDRxaRVbZ0LBDFI5ly1dTB36Q==');
define('SECURE_AUTH_SALT', 'QmoJQKWzq4jfxiupzkb2I+V1V1zZXdmbp53S1l8o8Mon6L7fQvWVhvo7nx+C5HKoiU76R0CUZA04A671UgIXQA==');
define('LOGGED_IN_SALT',   'TnAflwyiy3I3vZ/FhHcu05v5etUbwL6RzbtEGCvcLxuxF0X0oiQr3MJQuP71oJUP9PvxrfXPednyV08P8hpgjA==');
define('NONCE_SALT',       'Up7Nk8aGIzYmzDWFdsyipHmEwOzJ6jblzXfEr/BgDW1qGI1A2byuClFWkXvWbUXY7WCaZqSIP39FFzOKuCGceg==');

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

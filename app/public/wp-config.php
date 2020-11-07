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
define('AUTH_KEY',         'XZHwPpPOwaVmXNNSOuvgVrG0ww7WAgtcBlm9alNYVDmi4j3evM4isdyIZzE4wcpAP9PAWV3SZDbDT5w6+Miy1A==');
define('SECURE_AUTH_KEY',  'cTDA4Hraaf3j0nyYsCzwatw8uFcyh+lizdgtubvoXVtmxnZKIkj6IXFU3GkQy4weOIoMvRRHz6w4o9Zqe3S45Q==');
define('LOGGED_IN_KEY',    'MJ9ZedmkGgeOrkifuQGF02gQ4Hjcmyfp3RCXdvAT6cAJPmc03L/npj0/lt1vhdNRa+FzbIlhMQrH29C7jmKRfw==');
define('NONCE_KEY',        'iLB6jL9TzITtzZq0orwhWn+n0lcVO3eRlMbJnMakQ2V98ZB6BO8q6q71Ng/xlHJgLeEjtDaxK+/Z1I1ytP7byg==');
define('AUTH_SALT',        '2u5vkbw5KOruO8beaCA3Gb/gRMlcil7kZbB0hzBlDhgeuoSDg1LPuIY8ql+WNwpd4ePkr2/4ZD+JmYtuj4tAgw==');
define('SECURE_AUTH_SALT', 'cxCRJUh7z/uvYjKXtAJwpBsFjLJF+o7Ar5h4jcdBVQW2evUc7ioDzMKSyVkosGe4bWqv4obG3FU4vze4iA9R5A==');
define('LOGGED_IN_SALT',   'P+dqMiG3ndA+2qBHvKgr3fHz9XnV3AKr8POzVgs85YiDleAxbzC2L9frTroQ/FPlKeGKNCPqrb4kE65bCofofg==');
define('NONCE_SALT',       'BwpoiZOtXZf7pqiuSTRGf0FmeVj0gK+gu4pvXg6S34I536sJgYgV+4GpVyj6CvVbadSxkEPexRegMFMzir+dog==');

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

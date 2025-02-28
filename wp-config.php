
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
define( 'DB_NAME', 'pkmtgselor_wp_n7w1v' );

/** MySQL database username */
define( 'DB_USER', 'pkmtgselor_wp_lubu9' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Tspy8@Tv#5OY8&?9' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'wU!Mbl@I[26R@)2w]f;HDt8KH!NZc936#xxv0h7~2wIT[1[tg7_7:+e94MzqmAc8');
define('SECURE_AUTH_KEY', '7ja4aTS@8P|9!bS[jg]P*f03f)Vs+p-Y-KfwCXL680T9K@bA678I4|f&B-5Bmjsb');
define('LOGGED_IN_KEY', 'j79PBbpPYa#nq2eqGg254|0g78/nFzYs//MzS1q8&U5FZg-B720tc[wVT~3G~5f~');
define('NONCE_KEY', '41KTCyY0H95K!59;Ms27heL07eCTH+6;sp1B3MEFw*o7L3lXgq&w4L54(L7w1K6E');
define('AUTH_SALT', '-PE(0cl6%4D]5A|ybAf35[_l@JJBw8ed(2*iVH8QE94-ys1x+M:q0K7gC4jyBT(7');
define('SECURE_AUTH_SALT', 'BR87;xD9nGV0utYd_~828J&&;KK%8V]@ci6xeq~]46oqqJ+21%K6CDJfw35UyfB+');
define('LOGGED_IN_SALT', ':hXbPN@7n2+rP@4q)7)Zm11-z[+I(/082&s4h#dhx|9%&o))F)7j152~ROHvB%pd');
define('NONCE_SALT', '_iI3Tk8/_3]hKv-RAf&_I*BJ/-~9#/zpZl4lG;]*f2~XQGu[H6#G[008(R89362E');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ZrhOg7QEk_';

define('WP_ALLOW_REPAIR', true);
define('WP_ALLOW_MULTISITE', true);
define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

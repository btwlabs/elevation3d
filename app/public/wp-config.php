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
define('AUTH_KEY',         'wLp0tfQ3mz0UhqsbtC2FJqlppQONTW0Mda01yHyjBljftZOsGU6Hw0FGILDyTM54JKWsOHZWymb3TZJB9xG2RQ==');
define('SECURE_AUTH_KEY',  'Wqn7bEQzf7KRPMazFqyxZnOJHcGUoM6m9nONZjjqaRElFNDi/leaFL9+gSdaVkkrwz/JsK9Ekao/Xd9eNs92ig==');
define('LOGGED_IN_KEY',    '2YZbwhPYZOFWcEu82hFzCS1tTZr2AdKr/5J2fDJOZN20Kc+73qn9J2kb92MwCRhKwIlshdwDnasIfZ79TkYZsQ==');
define('NONCE_KEY',        'cZrtE7O498n8FCCsN2ZiIFk0pMwpHf5dhZaQbBG0Yxr/ooHak3XUumUhlIvvmTTen1dJb9qSiUjntuHdj7OLoA==');
define('AUTH_SALT',        'EEtkDeYk5LFiLw0/0ubrt6b1LXu/kJAlH+gqTXYMIAjABUzrcdNE+WqGbVFm9hPD/WhMpoTFBSlPXTNIv6YvlQ==');
define('SECURE_AUTH_SALT', 'wo3NZf9AhE9v5p7Ovyks8ntAizYJPBGQd5nMNXCIkaHhHGGdzxm0pQPcVjWPcsKNlnCF5Ai6wwWenJKF2i9x8A==');
define('LOGGED_IN_SALT',   '6vEaVCO7iLnaEiFCevXewzNDpp/eUcW44cvGMnoTB1jyQ+5iDjWCkg2PkHL9AwMZ4IueADb4wiAPBgj5D2v0Eg==');
define('NONCE_SALT',       'kyeFkd4fWJP2Fygvso3gqaIbkfbe6vRG1saLQ9CHhzJpcB9p4y9V31WSiLrl5Dvxc6kkWYsl5NEhBNmKgVNz7g==');

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

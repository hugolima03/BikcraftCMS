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
define('AUTH_KEY',         'pMPJqXg5sNtp1w5weB60safL3xvs0piROnMuwSDj0hPefb7Zo7JA0az0giwd+JY2DTaLEIgC2GIG5ra5nC+OjA==');
define('SECURE_AUTH_KEY',  'XjIRAAOiLwc0xionHQbdRsS6SqHGNvVE2q5uAxuy6BXkajLsemVtHxQ1rZZcjls/yw07lGiTnODRBUkf8d4v9Q==');
define('LOGGED_IN_KEY',    'S/qeoIvkWIZCuflLpohiLNxLjgnbCSqH3OHiSbY2hOiVVGbktUQN77WcVuPvtQE5Oh6z5MPBZD6IHE0INykcCg==');
define('NONCE_KEY',        'txXPdrJ5Pm/phDUiIuI0Q0cz8+JFfYROnKQH9ITvcvpWPTWrvjnfpiCicRJPLcysgEEoQZwQA079TQHXT5dq6A==');
define('AUTH_SALT',        'v7iWXuHrrhmElqAye9aFSNLpy/1GvnqkDZm2L5fPsNp4excUzG/M7SSpybmJqBtQd3lYb9RCM7BwKCmWXaEKzw==');
define('SECURE_AUTH_SALT', 'ydoZ8EfkLs/HPQSD2LyL60/Qhm/poxAEBB4DXqnghhKAZZZlfRrULD2xa9+vsp4yjAVWAp62Tr+5vSWWlog1yQ==');
define('LOGGED_IN_SALT',   '3iVwNNhlrzCFr4+ULiyZ41X9/8CfBya0F6cn+Kd3udm1Xj7aqd7qdDC6rG4SF5ZZwcMJB2OCLDUPfAY6wDd+gw==');
define('NONCE_SALT',       'E1AzJ57G04eAv8jTr6BQKS4mC+FQcaxIIgLUjqGjovZRSunXNglVTMYSaKAAXBJ6Pdw1cc14Bh9Se6D/86Iqkw==');

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

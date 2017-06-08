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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'gqSRzJedA6zSQmHNfuiskkiw3RZLggnT59zrxBjWn6krM9B10yMmqjlSDR7AURCXCQpya67owmaVl5QR+U8JMg==');
define('SECURE_AUTH_KEY',  'o3fO7Fg32bjF7BvCeH/+jZjvswZz+OyDqMFNTChVfOzzeiQpjqzmQ9hbg98AAaYyMtod7eTAyF/ed4oshfuWqw==');
define('LOGGED_IN_KEY',    'toE4y+Ky5Y885Q+zcYuWs5mUSNH6x/vUmjeSjGadt662RS1fIDIyVDwXEeQZgfLmNoUyAc6FYB3SluQT1m4ghA==');
define('NONCE_KEY',        'bSPvUuo4Eac6zM28qC5wGES4bf9w3xgOPt80URYOeeE9tXHHyCNSej/nE+veQPXDCACDAwyIFF7zCTc+hOZUKQ==');
define('AUTH_SALT',        'sI/nEufZHWR8ezmTOzulSs5otoXTk0pH39MnCiFwf0Z3ChCEUZ93YJB94/cDG4nE1bjzeaqROmsiZ1rYYzewcQ==');
define('SECURE_AUTH_SALT', 'A2zxeju79ErWUIsBGOB3Yeq83u0Hk93WGjTihYlgmtGSNQ1SVRNrMZIL1Ri6K8hkDNYBcotmhFDIDseI3Rxg1A==');
define('LOGGED_IN_SALT',   'QdGXTXVw9mzZJdXzl1l4RkzUJzTw6fw24Tnufx3XkHfqKFPa6bUL/mXLs88hfd3ay7JmxpcQVIgvyoLPWsy/Hg==');
define('NONCE_SALT',       'qOxtirnPxJVjz/WKkokFkmhhmjMZtuhtc7mf0SFVYpCEIZvSFoSd0hGCR4omOMMQGKSE3t5TQnAgiYMVgVxswA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

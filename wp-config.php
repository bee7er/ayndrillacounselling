<?php
/*d67f2*/



/*d67f2*/

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

if ($_SERVER['HTTP_HOST'] && stripos($_SERVER['HTTP_HOST'],'test')!==false) {
	/** Test environment */
	define('DB_NAME', "ayndrilla");
	define('DB_USER', "brian");
	define('DB_PASSWORD', "HelloCharlie!");
	define('DB_HOST', "localhost");
} else {
	define('DB_NAME', 'i9036769_ype91');
	define('DB_USER', 'i9036769_ype91');
	define('DB_PASSWORD', 'K.67s1vyA1RGVXxuGcX11');
	define('DB_HOST', 'localhost');
}

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
define('AUTH_KEY',         'ZEgHGfIOq9moeoUldnRlSC3QCXV573lukQbnIGcKIvtHqwZPmtgnnF072INGQuGo');
define('SECURE_AUTH_KEY',  'Xs6mPgLb4zWcHTpOUInAMotUrQCsS3xE9ovt8OAItZYCVN8pDblQeQoXIXb1f56q');
define('LOGGED_IN_KEY',    'GZf72nonmjjdBPmVJqVwQWhrXbheAoTdsELSnjmZ9SVAXl9p7hEfPirTWKtpilD6');
define('NONCE_KEY',        'qmvU1SlMkzRI3MvHRrc4xIxRamhyyXWUrojTokrOJOUBpGN3KYHYTdMoI3JDA8Qt');
define('AUTH_SALT',        'ykQl3I3uFnyD8aDqwrShtSNJBDXJaAZxEnRyVlqLgoCsHHx7Ca24wPBfG5hbXzOu');
define('SECURE_AUTH_SALT', 'xTDaZTuTCjx0cHVJKBcfSs2JbQYILoYXqhoFAduY8NK3exWb3yY2kDnc5iOOShDj');
define('LOGGED_IN_SALT',   'utlvtw00AwUyVt6rQV4lNHEsAdsQLGH0kQdtCq1cNLZyFczfd6MFKtQ49QIhzgqL');
define('NONCE_SALT',       'v4M71CVhrlPAcqOuGaka70LMF56I3tEEDYe2G17kEV5eZkIitQ9BfwcFJMc5NOzu');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pehf_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
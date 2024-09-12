<?php
define( 'WP_CACHE', true );
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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'redcbltt_wp922' );

/** Database username */
define( 'DB_USER', 'redcbltt_wp922' );

/** Database password */
define( 'DB_PASSWORD', '(a@9@V58-9rCHSp.' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'vn91mxgfpodsp1s6qthwri5d6ussv6twqjeigbmyemlw90f2hgisrupdsc55mghb' );
define( 'SECURE_AUTH_KEY',  'mdvtzkz1bmgz5p0o3zs4ehndgwgrg9fvc0zolwcgfgourrfaf6e2rcdoyfclqruc' );
define( 'LOGGED_IN_KEY',    '1wmhrf0gnncwsys42ssqm6wxpqlsoi6nxgz0c7v5nmhbvhwhhd7sbqwvcvcusora' );
define( 'NONCE_KEY',        'm4mqvu9h3mna33ymbohy6cja0czz0jtz3btufcac7g79b6gb2ev6qou1dz51gnab' );
define( 'AUTH_SALT',        't33cjfocd4bp79cqueiq1r8itxc3baw3jlzdwxq1p29rpqngckemsi6l0ycredax' );
define( 'SECURE_AUTH_SALT', 'ziayalp4s7hwx3pyrxg3ewchzxi10smlczxsqf7ktlbfzdza4ytba5gm1wvwzi7f' );
define( 'LOGGED_IN_SALT',   'ogp5aqgzio0y7ugapnatozajz4xpruxrnvtaqfb8peywjypmupbnqtdqppvvsjno' );
define( 'NONCE_SALT',       'mhkrhmsi1hggyqyyhm0edy9idn8kzumtoadczctpfhw7rqmvdavul76elhfvkfy1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp4s_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

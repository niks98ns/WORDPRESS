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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hms@2019' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p7y3~5_@)z!4O;~5hdF>H8AoA9/&(7qk4r%c%YGb6~tw;DcWNV8FnHrxWwogm3+{' );
define( 'SECURE_AUTH_KEY',  'ZMPn#BR[~wevQdw^*IgUb0Ob13.58`0ooTK6>SasopN$G1{=UJ^?Mj|u]( ;+y>a' );
define( 'LOGGED_IN_KEY',    ']C8rpU.]OST7Xz;.7`#%DyC] 13|MC)C(_r:H.<Z~kf>+k|POal-:jU&9d_LDtaJ' );
define( 'NONCE_KEY',        'Yxb+IUzu8&4}OMyTT3i,T/Tb0%+_@kvO!n+IPc,mj6:~@aT&/T*C9iZv0Bs]}qdK' );
define( 'AUTH_SALT',        'Z#$#}7:iVy_l;NEVg^2xZfe<wa?3,CuhbM;M/Ol.DkJX3XcvfQtW=irtkFwXQfY;' );
define( 'SECURE_AUTH_SALT', 'ZiwrG;[/Hqz;fBG(q9XN%s>:st7Xo%TxuR_#XU1jeW{^H61d9wKe4T`JHrH$:[ch' );
define( 'LOGGED_IN_SALT',   '/DMf}~bq=G*q8TKZ%84yu~NGg&Uane{V(PM9L6!H)cyo9X|K7}-GcNRAtQ&[G do' );
define( 'NONCE_SALT',       'D$ @cEA9a2]e+Tc+YNt^*xN_[!;-Q8VW$BmpvfGN}rpj-@?U9`[mjyw:q!D*`y,y' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

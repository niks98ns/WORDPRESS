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
define( 'DB_NAME', 'word_zap' );

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
define( 'AUTH_KEY',         '+2JpPa>Ze8f]fB[u&Ui+uIgtvSVp6B2^~jA A&c wLk|+m4#{y]_<69`l0$mz#I-' );
define( 'SECURE_AUTH_KEY',  '?[?`x)E#Ol`kaz.Ig7G_0PElegX@gwd2^uRr!Q|{:$U)-C(UHh;tRD!^65y5DpOu' );
define( 'LOGGED_IN_KEY',    'RtVRBBc&,@eD*bOtvLUA_*4M~oo)jRTpt*#<Gs/ed*^])eixiBuc#c]+M`J!9*9n' );
define( 'NONCE_KEY',        'vcz}.wL7$D?`CJ(0aBysVD7g)-(,~=9=w?pP2[7WhX8 +>&)oSH3`RRgS&nK Y7w' );
define( 'AUTH_SALT',        'R7J6#5Y:vtPR* H@=u27H<0dPs)K&2 7-`Ltr]:NHc)|7Sxp`2;5{FL|kFNEsd+#' );
define( 'SECURE_AUTH_SALT', '*Pbe(?7-{+Xs.`#qA>`6zZ&ArywqjXIVALsA/=B>09?nxA?t0{nxR&CC>X(P#4p=' );
define( 'LOGGED_IN_SALT',   '97<0W~,a^HF5r(ByGMf]tJq4`nGet#8H<y)ofeV&wXPyzBX+?>w^/q+g#QU6@>%+' );
define( 'NONCE_SALT',       'HTu)AU .O{].A{OhI_W,5e1>e3-zspVSDFg6:%:ulo! 7M0oPT>2h{[D;7&!IJYi' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


define('FS_METHOD', 'direct');


define('ALLOW_UNFILTERED_UPLOADS', true);

/* That's all, stop editing! Happy blogging. */

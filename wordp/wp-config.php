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
define( 'DB_NAME', 'wordp' );

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
define( 'AUTH_KEY',         '~<Y=I!KBUz%e^&Lq<|mD vG4<2Js/t_fPsdfBG` .Fv(RS4R!=Ngj 6NPsl.-gTS' );
define( 'SECURE_AUTH_KEY',  '(dha5C! :/73qs>+m_lR+VHY_=4lTJ0wed4pEHKdn_LEbRg+%9qg8!,l=,!1AiY;' );
define( 'LOGGED_IN_KEY',    'zI42M@d,P-8_a8_)9tDe7H(ulVA9/epfCz6e%/@4WY::l41t.m?g*U&Z+&gXmL2f' );
define( 'NONCE_KEY',        'ZRO@$K0fRMGT{YA$;vPm>.>=71TM[/yFdmjmDP{Zo@*{!K=5bg;U}ZhU0k,X>3LM' );
define( 'AUTH_SALT',        'v$LSCaT.hQP,1yew;<k)}o!b;</1c/OvPn`c~F#v962vA>Za]OpL2I/w3JWu<I5g' );
define( 'SECURE_AUTH_SALT', 'k#6txkZTdz9j8~]8u`QW~>ECJ+5unSUCOtvFv7z<<Fa>=g}j<qt|J[2|mVXR@f^A' );
define( 'LOGGED_IN_SALT',   '<s=l+SOJ1_MHy:[8o.qq^8$`Mq~#fkG.&XMU^,P4 @dfHp`k7=-*63?RF; KO6Hh' );
define( 'NONCE_SALT',       '1j+m,j_EK6&>h]+G*PEM>=kY@y,J7u`uMWs|lcK0Vj|Z$=]R9W)vIRA^v`(2zakg' );

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






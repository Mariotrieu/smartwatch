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
define( 'DB_NAME', 'smartech' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'jLvui*Z1nn-%jX9^`NuSZ#Gdb4wd_:Ab3$:`D1DU[og:,FZ>KU/+!n/jX&-4I;8h' );
define( 'SECURE_AUTH_KEY',  '+@~|s_u<=[}DVCv`V^)3rsJs/K=$&|m8,;y3N+Cv_2W^w(b^{$>Ovbh_3e:%+nK]' );
define( 'LOGGED_IN_KEY',    '{pb=0WBuAUaV)_2!&o1pTYm0$MZe8b1:zNJaUY3]m~h9fDW+P[CJN-ySLHVmZPMW' );
define( 'NONCE_KEY',        'yw-UL:F6/>+VvXnsa*}hrq_]m/)k`UNT|9mdufuK}.lx)O$[B{EbUd*1fK{F4C7S' );
define( 'AUTH_SALT',        '^57akWP=3d/Zes_~CMqr^S)<APVvg5.0@0@,/$sI8g:!hYg_J9C?2+f@n6&,MXp(' );
define( 'SECURE_AUTH_SALT', 'N1VzlBb#@f0[8 ?k&;9^e@Uy:v6niGZB2YS;G:|`>us.2ry~:DY.6z9p$?d=B*e0' );
define( 'LOGGED_IN_SALT',   '%Cxx$Ez6)2?d-lY@$vj5*12rGUGhj3y`%_(MPi$<:W(lW,UAO77]MTDwcFIb4uM?' );
define( 'NONCE_SALT',       '_~Oa#hMp$F(u#7(I$oBt%@^gCSV>*}G(igyTrkvCCeh,u,RvGCw@o/|QTSFd2PcX' );

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

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
define( 'DB_NAME', 'testwpstore_db' );

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
define( 'AUTH_KEY',         'r4W#IfR*U;jlerN!&z.-QLTl4zT}vT7c$iWhOXlS.r{I[4hK2.Q7V]3cPx4J&Cc ' );
define( 'SECURE_AUTH_KEY',  '/UO$wrHJqsr>)D4alxWr`dzfitES?O?e`MypSh@2H7S,L=,f.xBq5celY=LF,-.a' );
define( 'LOGGED_IN_KEY',    'GD$KtYtj:|14L/XT^S$kt~|+IMQt/DxDW_JTA3~H=_ JJk^v7~S)f45=ZL&)mxn(' );
define( 'NONCE_KEY',        '7$na94]1W`9^%K.3/xi?-d-/%dG^SK6y}03qDyh0:6_=!x@ZJ~w2q[9fA)7,QBe^' );
define( 'AUTH_SALT',        'Mz#z*3%7t{;lmLgogwIyo,?KS-*FQ&<rZ**:Q8P~EM!VA@bm|hw Z*0*QikBzROg' );
define( 'SECURE_AUTH_SALT', 'r2ZVf_Id8lTmS.%9h?&gb_QpDgMiWG|`J*Os iCq4Mu6)7->{BNcN5Wob29HSRi$' );
define( 'LOGGED_IN_SALT',   'z]P,*W2da@X_z9p3Seo(l2>xv[H);IHLn|`eH$U!5/,+$5<[0^$HudkK`A)9.Fl5' );
define( 'NONCE_SALT',       '-O9#Y4s1%-!1wH,y[jzF%Ab*(Sn2OEA4^<P_z66;$$g~DV0=H,L}Ae&My+_0P#d,' );

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

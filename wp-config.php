<?php
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
define( 'DB_NAME', 'skillset' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ')QF#P9IJoMUMdn#v(=KLriixC<@s}$+.- }zeS_acKN*@>HNsvRvIHUkG?TyvXyK' );
define( 'SECURE_AUTH_KEY',  'ph6263w-rV|]sd *&K^{!<NRJxGHxIHT/xS)],1 .iU1%@ D[ARY:=xIP/bEuESm' );
define( 'LOGGED_IN_KEY',    'lHJ_zLowo9;l;oS`0dj!mv[4?lrd#%#Jh%VJN2U@vgvD6Ubv+2OD_v*e}ORS:Nv8' );
define( 'NONCE_KEY',        'zht[wrMttZw{_.mz5OIxOzuI5Q29O[x!T@m$]rQP:5JdFg[7RCydN=Y8o(my!fS.' );
define( 'AUTH_SALT',        'dYI|mSoM`ORoP!`fFojN*RhZ!a`i$EB+YkE_j^)JE$|]9v`F.=R#ntfue}gk#>u ' );
define( 'SECURE_AUTH_SALT', 'MMU9|wCSskR=@{io/Z<T2Bmo`LfG=gv[gl#q-_h>518X_p%%o*8_P+h]<xI>/Y-+' );
define( 'LOGGED_IN_SALT',   'dpq%5$3y`OZt:TJ).%fjbAh8p/K3J9&~VK$+{KPyQ0t,G7y*6Fo|b4BKjk5J6G9x' );
define( 'NONCE_SALT',       '}imQzgq0BDy.;aeNEYDa/jOim&.AHTM;qWJ1xtkO&@4FVXPY;AE{,nHCC./Qb> r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

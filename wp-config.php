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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'antiques' );

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
define( 'AUTH_KEY',         'HFSBrJ:g$cZBWX549T!5j)pai+X&P&SXej`L<GDn0s mh4nPRURHt2* y+ZU;Dfh' );
define( 'SECURE_AUTH_KEY',  't#GEhw0|ASIq+%_r5[i~U)wreBo4f~XXt(X8U5%4d]59^-&Q#TBv^Va~# ,(#^{F' );
define( 'LOGGED_IN_KEY',    'jY$>J.m:S%-/MNuL5{YhZLEfszFoU5zTSL4hU?VQb+Y^z-t%XY)`T$X#1]Q5VE6R' );
define( 'NONCE_KEY',        'Q3M:e9|ch9]py_kCS{|m8xkFbs+wl`i5q7uuWVx;C J,8J_wdiCa=Scrgi~<5^2-' );
define( 'AUTH_SALT',        'lzuH@qd8rBu^|wT,|dvkpT-3u1T.)%W9EZO_zDVaN2GPdQ^t7%)u,FXq5/}]9bib' );
define( 'SECURE_AUTH_SALT', 'l2AIKnl022bg5YI7vB6 %f(O:uZ.mtQURlHd72INP}h6Sw/p.mZ76A^8BGADKe]-' );
define( 'LOGGED_IN_SALT',   'otwE:8p0ame~#3S4xw|>nSk]{q>LjoaTc@iHHrTv!jaX`S,L*/><)LQ4n)rsQOs4' );
define( 'NONCE_SALT',       'O)cV-@513fTV~$3T#Oh|1T>4q*FN+l$|!?(zRfT%ZoG!Rz1Q~I*wRCVM8;&H>/d?' );

/**#@-*/

/**
 * WordPress database table prefix.
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

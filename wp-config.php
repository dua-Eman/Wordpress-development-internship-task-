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
define( 'DB_NAME', 'itcenter' );

/** Database username */
define( 'DB_USER', 'Dua' );

/** Database password */
define( 'DB_PASSWORD', 'dua60828' );

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
define( 'AUTH_KEY',         '7P_vI9bgxuq;+7Bb4#AX]fb?(_n/O>:Q_~Cb2}Q*sA*`ow*E2/:sxFU2gT|xKthd' );
define( 'SECURE_AUTH_KEY',  '8n97z8+a7520|?!qCJqn}0<pBf;+T!5JSx452Q7wfKp-7%]A 2bH-/A$Vx@MjT6E' );
define( 'LOGGED_IN_KEY',    't%F6D>L}y:iOU6)jM+>fA;9_v*HA2H3GY:eRyW00(@U-770jwCc3Ks.M;:_K6L{b' );
define( 'NONCE_KEY',        ',m;&])_-|a09$rh$E{z]`kdNNkS&9^|vK_LX&[UK3nfae^I`=(EjU:J%bd,er2E,' );
define( 'AUTH_SALT',        '({d&8~Z$oetn6h8R/={/xkn,^6~$4CADp^Gpe%u3/yv~v?ujefXFh^q`#br.))6#' );
define( 'SECURE_AUTH_SALT', 'YKWUET,3N(}v09 !egzb7a@#hppPDQl2||6Bj(y,(ei7zKR>QXcy}V>;0KakWiJ,' );
define( 'LOGGED_IN_SALT',   'C{(qDx:~;!Ni=&9Rs4)m>XzX?9pnkOMRS!IEu8,ofl[<Q8ifpe#*`ZQNay]{nJtQ' );
define( 'NONCE_SALT',       '^D].`:-2+H2.ArH.]tyfcJp;IC]kgN)a~KQ}R|Wb&@Hl_ kKHN_L?%wPY= ~#}!~' );

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

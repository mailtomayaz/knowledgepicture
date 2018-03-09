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

define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'knowled1_kpicture');

/** MySQL database username */
define('DB_USER', 'knowled1_kpicture');

/** MySQL database password */
define('DB_PASSWORD', 'pakistan123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|.{vbI}rUax.L!nBEHA&@OZimhz<|UL%<9UegwFH:k;;`-?H-gf;*%o8ejXN 3hG');
define('SECURE_AUTH_KEY',  'qCDoS2.|A}:lB5#*Z;_RFgzBfa${qkM|vcmCE2rw-fDt<[I+p)<}vjXv>,N$[~/H');
define('LOGGED_IN_KEY',    '-;lTk]DqU{OdoBv}0>~%tdIQo<`PPH*Q321, phD4+<$;<}hGRD-sXzF-#^RMA!`');
define('NONCE_KEY',        'g&jJ*]DzzY,72>[1N&cB;#N3@<ms~)q3>6[vH40nQ]b!2Lw2q(GySiLZK=UX01HB');
define('AUTH_SALT',        '_n+?eR,,$z}cyXYcFfbc8WotS1qK(QFG}?jN_:wzqZ*_r?jgG~jrS{mvt~0-B5oV');
define('SECURE_AUTH_SALT', '8Lo}2w>eaykSIb/{.O(DYLT8u,1|.&5]A* 9iZy,]]yW8m)/Qjv@zlEHUpUEIhuR');
define('LOGGED_IN_SALT',   'g5uSi~9T+Yh8+eqZVRMaa[_ZbXyDv]lUVniZ.P5mwd$;,Eg?Mz0{qn.VVKrKGzR2');
define('NONCE_SALT',       'b*n6hUD.!4M.!%Z`}@Fc&!*FO4.~n>8:lO5*ed^8WW2qy<$nK4&wQ&DFbDO4HNbY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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
define('DB_NAME', 'study');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '52x)]V(5+j;i{yXc)y-R/@&y}*hD4++]SL+:{OQSQ/3c8Fz#q`(^VRPh@A;Xec:^');
define('SECURE_AUTH_KEY',  'AbJjH>k0vLMclh3wpc@*nr{6!(0!,#6%_Z|BR^F:NAF5|`<m7I*ix6D+ya66%krm');
define('LOGGED_IN_KEY',    'p>m74ZTAAUI*rW<L(hdN_5NgI?PX[&QR#V%DVd>5}O160p$CSa)3[69Brp,6t^b}');
define('NONCE_KEY',        '7T[JI/ELZX[T@:Zj8xrb2t,l_o3)R@bhMd*q&Q;?AwsK|@fR)1oofv?t>&rUs<ng');
define('AUTH_SALT',        'iz0Ekv+pXQFTL*R[y+fi)]u1CLT/-QDOy@,d,PVj7h+})UP}]!@B40CG{&*FLbSM');
define('SECURE_AUTH_SALT', '-QkOYMC7Jn|3yV&x0 b([{ojtrQU4r,=WLwNO&^jY~bj--gHG_l~fSIu/1 :)o ^');
define('LOGGED_IN_SALT',   'C}1v/>:4qm=T$Cy/[YwZ-,$A^iqF[rt+v.4sn-.&13b@txh?Cw(1K!lm{NNN,bs{');
define('NONCE_SALT',       'LI9o<U[Qno^B7C.[ki}&~<C9 ts@5A[x0?s mn~^#!#=NdKv`DJrbWNB,~MFYob<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'st_';

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

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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

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
define('AUTH_KEY',         'v&?O}F;NULJ# {{Y6I*au{!RLZyR~@WOO4B)z9rJbmuo=;`:Db$WO$;Y:>:SvfCr');
define('SECURE_AUTH_KEY',  ':hJ{3Yt$i:3k$Xq_.r(x:k&2qH[$,EzGR%pnsNZ_0_0_]J0QIDK+<JiqJG00e-jJ');
define('LOGGED_IN_KEY',    ']Mx658hHi9z!q60`UHHmqj@$/08cMry!PL$F: NWMEh&vgFmI!ztI`O%Z9r#cyl(');
define('NONCE_KEY',        'dD(|sG6;PCwy:=0*lYZqcrNa~H?[]2~KsJicg%c,Y93iqc.9,)zk[cx~^)x8?vP(');
define('AUTH_SALT',        'L3[]xX;!d}KUG` pqFk`(?k4xejA`I3> Ozhv,MCWEY)-JzD@O?e}*X2!|!l5H%*');
define('SECURE_AUTH_SALT', 'B*oI|&Gvc~BkdS^9K0$kT9Z}J_Og5%0S`^0rm!w4:sR$-X;<pq.zZpBRoSgbypY,');
define('LOGGED_IN_SALT',   '%&MrLCzYW|5k>n<=drCO{q&KE{Fd_uAJ^n&=*np-wgDp~uo. gWR(FgVcB+T:qN0');
define('NONCE_SALT',       'aO09N*3&[X[D?ab7.?98w?t_P_Pz4umWh_4N2n5yb!i$S{m:|@I+,2%?6W|}Y0VY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp33_';

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

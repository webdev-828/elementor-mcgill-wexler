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
define('DB_NAME', 'mynewdatabase');

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
define('AUTH_KEY',         'wB>sWa@Y-:(]$KX}(E@#u<4@kB^P#LGJGM#:^o>R-Od:*>>d89>Fk&$oI4Rhm9JN');
define('SECURE_AUTH_KEY',  'vS9JYA3UFj^`[Dd<O}!+?Alj1sD<:$1Vm],2rCGCRQcXoi8+@RRd(zyzA{RL[89|');
define('LOGGED_IN_KEY',    'Y00Ykb8cr28&W1kdG.R&H]lg28Jo8q}BL0BNc;)Ep?$b>b@c=lmq+cE/};edg^OL');
define('NONCE_KEY',        '[%r-8;.w#!{V4m7I.pQ.{=5Hu=bDKkU(/a3N{E157g#YsVkLQ@;8@TNp`guGCrY(');
define('AUTH_SALT',        '3z*zYB&}Z=`5x^l+]w$}rmTZN> 7<5icz3#QJQP|Wgy&z`rY>u_FQXo Vt`C5[qo');
define('SECURE_AUTH_SALT', 'OYg{3u9wG>H!r4iK@. [cV,yR1hEKZ?Dy_$$^J{Yfkh84&+v!;_CX`}*ZL[i<nig');
define('LOGGED_IN_SALT',   '3=7kD6-GK@1rk+DoPy)q_LD|EuCj4WY1KJ> -23n^KX5Y;#N#kKP!YZrOr9S~)ov');
define('NONCE_SALT',       'Tcw<NupSq1,fW@IzEFLD ZKjsI]^V[?2mpXXCEcq@$$|kH;(+JSHw%!?8/vEu3bc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

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
define('DB_NAME', 'everythingpastramid');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'WA,R``ifx=T%lJRQ7BVJSwX  2t<XZXo<YiqsZaK*NmQ=1G[h`G)7hfKVx12[MVO');
define('SECURE_AUTH_KEY',  '*EL1xZ7&^1q8n4[%]kp*_aY%wTtLx$0(st.`dpP$D>?=D|aR*tGdu+s99Ma,jCdE');
define('LOGGED_IN_KEY',    'sBnWkllKy|{u1X:8hV<<R!OXs$=w($P:aKiZq ?8&QElE|Byrs^h7`;pDi6DhS5?');
define('NONCE_KEY',        '|3j HJNGx-IXG^9hJ>tp(#w2![FZz^]K]ofHUPx<M @pphq-d MdQX%|U_mH5YVJ');
define('AUTH_SALT',        '6Zg?V+Sr/Dd;1xFk%pVAlq%D!3ySJ~(ws[PY`t7oM$6dy1A;hN5?{Zmd*Ix4^b.q');
define('SECURE_AUTH_SALT', 'sIr:3DYbUYuM[&Dv5b#3bS%04|Kr$7!7t6a(c0>o]AN0=y/,UN.4;&Z`{{f>5rLG');
define('LOGGED_IN_SALT',   '$F]21p ;2]},[,VUx*1>rM(Rotmv1_7qPmAV62<tnMC3DUIVK&[)!d;0wu_r-l#x');
define('NONCE_SALT',       ' 3&lHPz)[!9HF}T59}lU)^b4Z6YPDWHM08?G?:1g^`%G^4o0>jY=1MMJErT*:q@l');

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

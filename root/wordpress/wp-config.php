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
define('DB_NAME', 'mywordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         'jlfDiG~:QOtIPxsftfQ10qaC8_F3V{SAx3HYrs{0_rT1=[z8Y,N?10PYh2jA;$]r');
define('SECURE_AUTH_KEY',  '7a P{b &[SjAQb_=,+X2mU@?(LhDn%}Q8|W6~CZ3mrNTo>xL*cLrwHC~CQXschip');
define('LOGGED_IN_KEY',    '1[,(1`UZ_^/`1JWco51&eQroy*oeVO8qapXOSd`&^}>s8qkdrsk<y5uWX/nA=fYk');
define('NONCE_KEY',        'r*H^p6sp(cyn%kda@5Nv4sS^+Z/`4FvlztD0*H(U_DkkBNrqk%(~r(MYR1}|xP]0');
define('AUTH_SALT',        'ALmK`DMiyI6CMn{33!@K2H90a@;7LUavvTEzm&t#~|DvXQ{d@BRe_3P5_[kC9_{-');
define('SECURE_AUTH_SALT', 'Yql]u $[Fyfd$$z>o$S;C4Yngm,:7 wD*.3CZ![JMH(KZ^@Yd@4F,~ P=jz*|Bon');
define('LOGGED_IN_SALT',   '!kh!a0c vFVaJ Qi8 ;(EAcg).9PDu;)_l+,O$_.HUNY&QUWC1s!%3*s*}rztt&z');
define('NONCE_SALT',       '`7Q8D+ZrVV?U5QDov`JdVH?A[$TbY^,fi1du8vbhimg15VB-<I=bD(.q@xFLGX})');

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

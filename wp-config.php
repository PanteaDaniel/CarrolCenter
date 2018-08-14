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
define('DB_NAME', 'lpproject');

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
define('AUTH_KEY',         'Y0v n$dwJa9Xew+tJ<ktqQn7X5!gB&BP+//pV vBS7`et{/y~ {*;6N9t564cXix');
define('SECURE_AUTH_KEY',  'R6YRE1A{Nb9{~[KC[=bCueV<**3^m+ygbXpnndz}bC~8_LO(PKE;GjE ~r+i*aAc');
define('LOGGED_IN_KEY',    'P1OF~^%*A/.wwC%*W3b^<|ep-l57PkPgw826RQ;1MF:L1O&S{(N nmo8.W3t&58#');
define('NONCE_KEY',        ',&+LS^>KycXOcnKc}8V`l%>j|h|+ig$Ifk;0GtZ>1aFY&a0FKG~soc<)E??OB@!I');
define('AUTH_SALT',        ';xTQ&95KmI0A`vqS6z-X+T]ihmz}EXPTK3G~DC,1cOyH:|oVIVMRG`VHJ $<7CWW');
define('SECURE_AUTH_SALT', '0/2|h->f`XBq MyVZINoWePaHC5gYys8r=*5bYA)U}<HaT0#0G)HD&h&?^[D`9C ');
define('LOGGED_IN_SALT',   ': pOXA%EJ?olp6wu-{=)1EIrp&VD!Hbqe~{0Ps<!v+K6X1YiU`PHXg)<pR[}*JA,');
define('NONCE_SALT',       '_xyDEr$M:2Sp.|~T3q^eP6;/V$dn1Uy4}/UQeSa7W7jQ0gR?R~gK]1q9Z^CGY9dM');

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

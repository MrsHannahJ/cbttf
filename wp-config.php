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
define('DB_NAME', 'cbttf_hj333');

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
define('AUTH_KEY',         ' OY `qf2&!zOHIQ9&r*|M),%<LlIa0`;**lfSlrF^[564H8?2k,6/:[O{bKc{]Bx');
define('SECURE_AUTH_KEY',  '7R/:FpJ.`~ZEHc;*_=F4*j4#Jy/Xj1y.7Q.y}%<o}h}^nw6oo]hI{C^QFK+(n_0K');
define('LOGGED_IN_KEY',    '}A&6qPzPW;91`1EHwvRsd.Ru!u%j+]+O=ISh/{G@14~y=bT_B=qSK7ImOv5O8OS$');
define('NONCE_KEY',        '?sW4h^N@{`<Y>2vT0hDS+CRlYx?IdZYpDW.hl;(IiDcH1lp#X=63|!%js1>F~sq4');
define('AUTH_SALT',        '93OU59LTyAM8T7~}^t!;;K1tPNwTuap;!WMTe!R=D0C(dgP$W.N=u4.MAo=)>JaH');
define('SECURE_AUTH_SALT', 'z+(+nhHfVNUL<QlF[5s*g1FEQkSL1-OIIHTz6EbP)H$~N,<F+YpB{dUTE=gn.S),');
define('LOGGED_IN_SALT',   'UX<-{O2Lvt[Jpq^YinBOyDoW=XEQi`C*gdH`{o![YLs?;UoPA+ ,sG(n~.tdTQP5');
define('NONCE_SALT',       '+E~U(&i:~NkU/W7]XkU_OmX,UFj{9mvEeMKfEv[/F_ @y=1)UV%,HtzM.(?BkN[J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_hj333';

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

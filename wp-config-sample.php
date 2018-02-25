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
define('DB_NAME', 'hands');

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
define('AUTH_KEY',         'z=Rwe~7tvTyh$)lLmnD?]2TvjMbcM6E5Rk>jFo!D&&AW!SM.{^UwL*dzYMl:sbYK');
define('SECURE_AUTH_KEY',  'NgMq-)C{DgO*|hVo7*4Au(oB/~^e`ii&f,B~i<qo<=x3S:/IlbDThs[D)[>hG2&[');
define('LOGGED_IN_KEY',    'Oh6]B*ljS%TF0Rou#Dk0QrC##8GnYCi&xW>R+/5*D/x42Te6[Q59!:mB_l^@<j1g');
define('NONCE_KEY',        'FVZ,*U>HpAd mIL/)/7<wwQE?w3- O`j_-#D*}G><#FWHBVrfQO0G1=8Tr{$~tI.');
define('AUTH_SALT',        'j@34c?V/e&!Ixo;$%L3I)Y9^&9Rv63~G`)eni+OsAiIiu9~jY`:YR&NRKlCr+oz<');
define('SECURE_AUTH_SALT', '%k,[;CLRPZlrzb^[nP#2z/C@UG/e^xjGxR1%/fVW->i~ (g-$(J9gm2A)6U<,m)~');
define('LOGGED_IN_SALT',   'G|v{m(8-[w:;Vu*%BBek8t.CV=4NMv`2PFB5q0u]_Ri$!oY?~qiLK+H/eCzVA+*4');
define('NONCE_SALT',       'q&8&74^GYYRbJ@2^ctZr13_%=drV}GB;)I|_(Pf?]ULgEIeak{[S&g6>NdDUor5I');

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
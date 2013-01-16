<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-portfolio');

/** MySQL database username */
define('DB_USER', 'wp-portfolio');

/** MySQL database password */
define('DB_PASSWORD', 'wp-portfolio');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'qwNF%WLSHgIR.VbtHfC=]=K20f5} bVTiD,!HLe$?j0z|hqA%eK:C!WhBf<N*hux');
define('SECURE_AUTH_KEY',  '3:+ua,:6@QStd+q%L{#TaCP9s=$3|x`*IPNz-_9To5:f+O@o#OSON>j?Y7agaBqx');
define('LOGGED_IN_KEY',    'y{/gry|A8MQvpH#H|.7u!lN{]bwFZkN1g2os5WTc/Oy8?Dc80rgBM`1YO>a_,p@d');
define('NONCE_KEY',        'J@oo(:r+.9fW+F.DjeA##heQ:>7SVLWppx^7<bK@!5CQ?OQE*Ch7l=[0R!,Z!wbc');
define('AUTH_SALT',        '4Ba%ag,eDN$-(7g,uJhHMpad,s]a648|Jt>ag`|&~cOooi`oL)1_7 !.#@4h%rO:');
define('SECURE_AUTH_SALT', 'd~|aPkZ7@brZ9n=| j}0O=]*iF}+Yc2d7Pnoc-GHwIt-z90)i[g^f--mZb9)z=mI');
define('LOGGED_IN_SALT',   ')Qz)$-|L4lN++X.{yY5f#xwl?hW --Ma*|P#r%(Bv&0</bRTQs-Wb]cr[@Q|7G!z');
define('NONCE_SALT',       '6yJL1Mbh|,e*e}KXnJiA$[^dS[}vhF$`GZ=yw61^OSU`,4K`rDeBq+|,j+)Q8+T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

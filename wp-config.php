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
define('DB_NAME', 'eb_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '~XPRG~nuva0Ej5VXxA:I5|[#`@Dp,zbrTlJ^z`4|-+o6I8-4R=?eM{$)_^oP+(E:');
define('SECURE_AUTH_KEY',  '.Y%o`W|_,q {0 6@y^,J3YJax8fax:1,?50L#ah3m3JjTL|#_0k4/9K9!D|m${L#');
define('LOGGED_IN_KEY',    '&[B:o6QE5;1fzF*uc~n|C7ln&iI/q|hTij.[_qRxq-ddxcYA:hP84CWC[U$(Pj%J');
define('NONCE_KEY',        '>6`e@7I..#s[r*;T,}OG>s>(J)h`jWL%Ijjqa~F}y@n_Z.^Q4T2R.g`;LfC@=/6e');
define('AUTH_SALT',        ',<FIxg;7lK3tUF/]CvQGU36%>F_L:|!+8sQa(N-rhMI_K9b5|Rfh9xi #3ySl-sY');
define('SECURE_AUTH_SALT', '{PaY&|aIW{g~9!lDi`t>fJUlrA`=s}4Uc@UV|>0jj~gq$JiJihCQ%Ch=Hx2NWx<K');
define('LOGGED_IN_SALT',   '*e}8O-M/yZ2H71) 3|q-|hB9:^q*|(8(,Vty*-Tw-1[l$}SUY7uwbIg7Cy8D{`5#');
define('NONCE_SALT',       'II:<$ghZ-hOFIKe8zdqk A;av&O==]UorueA#u-F?|?M30>R/M-<y[J]+{rpOkp[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

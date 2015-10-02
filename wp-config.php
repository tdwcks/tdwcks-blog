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
define('DB_NAME', 'tdwcks');

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
define('AUTH_KEY',         '2|Yy&n|?,D)_-ZSo@a</S+B^@x9eL|)^L 0`p|,IRL<j6@vm2m}N9@gliI8-&EQ;');
define('SECURE_AUTH_KEY',  '%7d~WMf}DI|4%A{/AxAbelX3EGUMOZB,+_8=$5io<qpwnY@)Y<M;)W,J/4m(vc5O');
define('LOGGED_IN_KEY',    'aE4f=VWYF^LsM35LBzVS}k.eH=oDJ4_|`=8P-xXT7^l-.ijv32YR3JUo7|r?Ek[p');
define('NONCE_KEY',        ']X+@ ,weG*y4=Y];vY|$Ru-m%- F,f##9gj;_SOf9j%n#~c/L^nf+@dHXoRS:(}j');
define('AUTH_SALT',        '=TGPt3J1r?0+|Z;2-(UzZH7:gep+[{CK|F]6~Q#rKm}l}@c=Xv+yjCH{|Nf-^BCV');
define('SECURE_AUTH_SALT', 'Dz_usgP CLE#>LjaD-bDh%0JYT2W+$dfe[YX5HZZgVY:fM[zODIT;DxJ/U!Y{Wvf');
define('LOGGED_IN_SALT',   'Xyc/g?(=@*6`*-oZ&GliGx,9~e&[WN>xISm~fl,Dl?e06-y4]LuM.K-:/#6[~(TS');
define('NONCE_SALT',       '1_&LVc_Q7@$BuLr2zq%w>qRt?-D5fD+p,5I1An?qLF+4ZsLO GjFr&L>)sV;C&!.');

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

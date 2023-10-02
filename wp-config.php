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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';CIJrEr1 ./luiJO  d=Y@j~Y0HQ0}6{ZNvWx,MT2)wc;L[dGwGSETUk8eL=:OW8' );
define( 'SECURE_AUTH_KEY',  'lGd75ZYK+JGl~s0i,CGAho4EkMnRkwwwax,_R7m.]?<cxn0rmAHk}?6srO,/]j8a' );
define( 'LOGGED_IN_KEY',    'Rp  [{_NOFZowM>71rHMp}_GY|;@TE&a0m,z3H=3Eo{E!60?FBY+RR]Tgt?1gly)' );
define( 'NONCE_KEY',        'Ryy`=D@rRgC@2-@zO]q6#[N6O=-e{rlObltU0GQ.gVWY>0Kk|n^t<p|:[0Xa6yXT' );
define( 'AUTH_SALT',        '`/bT(CXK^Ec95_BLpBzQ_Uw9rOsSe`-}?U5?/Exm0cCR[?n&[:Gt=Qt7 x Wah.1' );
define( 'SECURE_AUTH_SALT', 'pGuo|`W8@/C2Zl38h2{WpTj;Ij16Pxg+Ucl7Aw3+Zm@K6!6SUHTe{}Siv]rKG;O`' );
define( 'LOGGED_IN_SALT',   '/8P,D~JB[)@`05saq=M)-VNHF26[@:rIXyn7CF~P`#^0(]T&GdncFi>*BiL*?o|2' );
define( 'NONCE_SALT',       'l(^vkfzRjU23sY!ltA-_&!?+e,uk8)zh2JIv4Wi&6yTbwUqp|I9sr0_}0(:caFBt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

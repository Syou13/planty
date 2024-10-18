<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1nGq&9S@L]VF(6UHc8~8W2Ubr_@6< i|Ep~*V:ItIj^MM#L+4r/A*Cb[xM2@-ICh' );
define( 'SECURE_AUTH_KEY',  'gH1(GRmWm^|`BZC;Xs/)_?RwM+|zqYm:}!]K{nFAUuznWD|Lyg=K8A}TO/b$5U[g' );
define( 'LOGGED_IN_KEY',    'WuGp1MCi]=tg),pe/90DZB<bMP8,DXG^?}lZ`TFMNOK,$q-D-ad49}jy;:C&yZAo' );
define( 'NONCE_KEY',        'I{}9FMp^%/Q?%w%*=<.L!Gxo6RZ{o<_5Ie=2wyuL1@FLW9j*>6=*3fuNZ^y_,G6R' );
define( 'AUTH_SALT',        'O^BFQ1;7[5GuJIWs=7&8XB6I/20wl8tNF+;|A,b^|FX1BYk|3q^9hwQN*|+iTXdg' );
define( 'SECURE_AUTH_SALT', '9.6XyR+[J7 %Li[1/9ybfAMhRR1RQe*9wR.tl/_me>,/lK#w%tQ%z]r[kO`UG  8' );
define( 'LOGGED_IN_SALT',   '{L)@/,Y9AM0,0-5Cpnsdwd8]Ju6IRvrBQtht?_!+UdnM5$AQSK`8N_AXZ8]R?M`i' );
define( 'NONCE_SALT',       ')zvn)+YxpFt{n9$4gTEm^od&1163;#}(.KK]RH9j)n-)}}YvDnA5l b^1Yw#lA-5' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

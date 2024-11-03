<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u279100496_oNXZv' );

/** Database username */
define( 'DB_USER', 'u279100496_4DIoK' );

/** Database password */
define( 'DB_PASSWORD', 'fWb5cS75ER' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'x)w*{0ef|bBe(s{p8(L9LP{RUUOh:--d6n})0DR|97A,FOITC?:ne]Gll_Su;.CP' );
define( 'SECURE_AUTH_KEY',   '!m<49G+$]*paY]zftOCM4cQpE7y{%C6fTM04sgJ1ap1M.jDQv)]W7HgzpvHnx/q+' );
define( 'LOGGED_IN_KEY',     '?Kg*D3LowTh-6cQLo0{wzyQLYa!<=5nIpH9NldCnRV77PokQ]6lyZh5A-.I(+<gQ' );
define( 'NONCE_KEY',         '&iXverWiCH%7cC*qr@lexzyU]go|HkVz1vUxulxj$o#ZcLrIY`woH@nsO{<}qX<p' );
define( 'AUTH_SALT',         'j30~v(s!@~J]p3M}l1=3h2@+/wa(-HppyQ9d*b{J1#wndG)&Yi;Gi6Kh#^dly %i' );
define( 'SECURE_AUTH_SALT',  ' %PaG$~C5]*E<ja^hg`qen@1>n}9$R3Uk3CnX!sKLhlan*>.Ky#B6CV),C{@zw8^' );
define( 'LOGGED_IN_SALT',    'dfX^PHkQZKsPrk|F:][Reg6xU/[M@qWT@/ tTF+^M1}(;8MksMcU{_Tl 3^C<3nb' );
define( 'NONCE_SALT',        '_N.!qPfTw@$K=&ZX%w>VV6YM?661^j(Ga}E}[8_lxd>} `4r8U2alqNS_6kcixy%' );
define( 'WP_CACHE_KEY_SALT', '.P=j|yZs)8/H$(MjC2%&OvpnZnkC1Ox5#FVl3I&W.4g9@!><l2x9FV1cPczaeCt.' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

<?php
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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'o_ue|gXuZssT1!u*xMjF6;;-(oaw}[Um>x0yf!AUq>s:+87fS^&{QRj|D_SZWn+.' );
define( 'SECURE_AUTH_KEY',   'Jp372f@_Bkj$}oQ`TeBctaeZB|sH;1k iULdF&/?yxoPINr{>&^0@pBHW@:c%QtY' );
define( 'LOGGED_IN_KEY',     'UZyUb(C])kuI4xHI[_A0~%SX;^vF*2|/5F]+v_&(E^ah`a+G80F~L?;)(up~tvUM' );
define( 'NONCE_KEY',         'wl&aT)G`HY%NIV)_Ev,}/c36JdZN*yNSXB0BNp]L$-mZ@j3t4g0}S>Gao>(0+q0q' );
define( 'AUTH_SALT',         '{qGmv+),jS:T&$.-a%Mq%kDMJ3eS*g{gz)!Ujw/w?/ ~#Q[352ac?~U2nGhs#6b@' );
define( 'SECURE_AUTH_SALT',  '+#Dh*]ND#{/l4@+>&.MHCWdMp?R./W34C`Uj=}?VS6:=m)3>OUXtn~fFcZb-^RIn' );
define( 'LOGGED_IN_SALT',    'J;YW7$c| ,j3qIVjz+OARje,lk?%g) db5kW)R^,E+?~/cBEacSx3 u))31gxqp:' );
define( 'NONCE_SALT',        '|%:r)Iqj^uPYopq|z!?5FkF-8hUmMfw<ri|v(7[Z@HQPv>cYqFZ7YaZ:VNDk[<Fa' );
define( 'WP_CACHE_KEY_SALT', 'dPkK.pCq2pgifK*q#@s?cu1L&YN}YKj)/cz:N>POHbv x#CVu/4TzGQZUPwc5MuF' );


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



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'alfrededu.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

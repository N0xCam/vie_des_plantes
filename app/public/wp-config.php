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
define( 'AUTH_KEY',          'O6x]~l.I6:f4L_6z`Jzl20V,t{@GLi0FH?D+%Q<bG`3S>l`}ti&=If}v3HgfE9U+' );
define( 'SECURE_AUTH_KEY',   'uay^}u5NE$ }(}TWOFZ2FUz5>LHecaAc&=mWXimdgzKI4|t<_Id(Ha^W>K@.0;Y,' );
define( 'LOGGED_IN_KEY',     'Ev2c^0=_~coJ4/Kt6<mF>_OY;itQ#EJDf0HqqiZ`dyE%w3;_tE#8Use+LQ^eo2Yg' );
define( 'NONCE_KEY',         '9?w9 VA& m?8i@V_AJe z(c#JO@rkngq`7o-wFA?Y-`ju&7?DNM9lIMz!WlU:0Jg' );
define( 'AUTH_SALT',         'Pwukpq.n|X-1ad/9LLn^_[Q ;o(<Sa/bM5W6uP) iAo3&F^Ome@HrN5k(]m8E3Bu' );
define( 'SECURE_AUTH_SALT',  'V-d>|ty4PyH&@D!hZkpIMH+e|>ed?u,}g68/:-m%xd&AA=F32R.FfFi&jKs8a98a' );
define( 'LOGGED_IN_SALT',    '@<)KNM3 2uS1>eexXzx)cySO|9fBAt/0cL7*gCE<w2DGOuDT6E-tR@8xr, L:>.L' );
define( 'NONCE_SALT',        '-mWWF!}yP: =bL^Tt.|}B7q+n$dF|:ftPq!LJ]L9?+Hs!o2FaZ#ockqPm4wMl47-' );
define( 'WP_CACHE_KEY_SALT', '__DrT*s.2kqk3#YAh#K% {hm*[;lD/VD~=h )9!f;1 dF9UeXi&r|svTqYT_4C91' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

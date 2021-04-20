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
define( 'DB_NAME', 'mysite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'O@6Zc2:u1LoqBYtP%{d%q8l`Fqyt^d~rys6fZ0ohk8h Shf9i2ERp&VCj(u|=gUF' );
define( 'SECURE_AUTH_KEY',  'V#q4{L?Fs5F>mvdDLK<Q@IB:^QT%,tHjrXSis;bKJ^qo.,Ec)h?K7(<HWbYt=VZu' );
define( 'LOGGED_IN_KEY',    'sn{8+m{,C2x|[feDiw9fA(iHQO&wf-0Yg/ZC@a(tG2:R~b3`ZVZ%+jXT>dwegB^B' );
define( 'NONCE_KEY',        'EFtr(dYN)8w%Z8{7P@u,H1d][3fT:mCaKU}HfE7%]`qY}@_zFu@:&266+^lgg?~_' );
define( 'AUTH_SALT',        '={gk$ym_%PT|<HhXg_?3MrTSb1. 7Ik8o0=|}<_1}]x01./| rVQ802Q^/5}&GUd' );
define( 'SECURE_AUTH_SALT', '2Kd:Nfq@2wTTjdl:w]r5{&9VdDJfuY1N](xK~JKBwe(1tF#Dea4(Uw<4KOHu6.WL' );
define( 'LOGGED_IN_SALT',   '&w2we`|I2>2d3o_mV0S7L_-<T~lqI{/]y;9PyDKA:u[/RW:Sh0L&PG+j9;SHsKk;' );
define( 'NONCE_SALT',       'miQ~yOr3#p$8fWMzmX1NtK-%^>bYeWCdzLHQD=UtE9m]fZ@^O9|Q:%X!5D48D[KT' );

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

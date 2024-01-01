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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mehdikhalid' );

/** Database username */
define( 'DB_USER', 'mehdikhalid' );

/** Database password */
define( 'DB_PASSWORD', 'CF7FKpyYP4Aq' );

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
define( 'AUTH_KEY',         '3HtX?U(uo#vjo&fg)?RI)*B^k3f$W[Gz!.Jc3GozE8l{):i@X].miV}9ufrDE 4K' );
define( 'SECURE_AUTH_KEY',  '~LLM1EB}@=T&}V[d_@U<OrfHl[<ULFexyW#ooLZVz5f)@wyz9)Gs=qvY @==Y^L3' );
define( 'LOGGED_IN_KEY',    '&v39| #Y!4h(#Z:|NIZP aZ4FLFr7gP>A{Y{%<?WI+wbn~IV4<Ik#.!+5a5ED0]7' );
define( 'NONCE_KEY',        'vT1~s}+0L@KAMG`uj7 P<WdF{$1$(6s|<!rmB~}UYTJWo+;Du!^G/A{T&!!)rsEN' );
define( 'AUTH_SALT',        'vS0l}VTjIHu(2uR=/)*4@)^kIWKi.}p=VJ^i5SIuT:+$FC5kMvtn7)7&S]:KZ%pH' );
define( 'SECURE_AUTH_SALT', '|kgvSKAh01VFl/OsCZpUmAxUU*(Dm,APC#QN6~$kRSUm=y,`JTJJcf~UG_%,9+T`' );
define( 'LOGGED_IN_SALT',   'Oh{TA]8<4iroWNdc&}49P&KM<I?.D~4CZs|d0b@(xI3}^.^7ags_iuVk6!W{;5/J' );
define( 'NONCE_SALT',       'xMUrZj:_NpG;X)l`|r`q9n[VMZmcgh:<Q-4~a5@Yy,d+ ?yr`c_r/<O%p)ofsT^N' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

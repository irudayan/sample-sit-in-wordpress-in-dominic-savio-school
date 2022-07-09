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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blocks' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'RXlE16TtFv/`T8bxz3Lf)e&SCy>>lKLBC{nbduOt]?j|!pS@.-m {~<]CNQ5r !{' );
define( 'SECURE_AUTH_KEY',  ']+6L,qe8lF[&C#<CMx[DyJ;zU?k[|]UYfM+4UI*(&a)(FJ`yKBK@(@a$eU(0ZGGy' );
define( 'LOGGED_IN_KEY',    'kaS*+Z#jGM=pQc.<jUyzA`CsKrIO8_kiJ`Yz+~6D!:sn+D*Ee)]I}uz}YmKOeGsS' );
define( 'NONCE_KEY',        'h)l9,Yd~~rf0<~|I39%[|^;Y^/J.IBxO-%|5JkG8ZGMe6bcA51p6,LB)uipZpnZx' );
define( 'AUTH_SALT',        'Y]yD rE7v8qfSXq^@L0#P6k0$C:oF<>j^{+Pr,lAtKPK]B`i2#7 PZ2eBvi~*{.r' );
define( 'SECURE_AUTH_SALT', 'bGPP#:]C|&;!oK-H$o3.H]yiiwt@=A-iUZDQx%fy=2Z-wEzhPxmPS[6jpEI;I-7<' );
define( 'LOGGED_IN_SALT',   '/m5G)[+MdFzyr}:UD^R4[N$ P?>]&9(Z<#8O^Z!7I6v/s3p,juix1ko_$q@q9E{:' );
define( 'NONCE_SALT',       '?{chV?%]t8w%FxTw$8$1JX4|Pc9EY@9g 42>/PyDzhw?X&|QMbe0f_q(ZiUx6ud,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cms';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

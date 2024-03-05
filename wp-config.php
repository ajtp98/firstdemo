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
define( 'DB_NAME', 'firstdemo' );

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
define( 'AUTH_KEY',         'lEw;b{jn@(?06NQ`){=ey(}-HU8JQsnhhhvR}AP^$Ph.$68I&[v5GA0bY<U8&=+j' );
define( 'SECURE_AUTH_KEY',  '[>)[8-(,B8rC>70?`%%m=E*?~!`3r2-h!$i)pp& yW`wE)*Qr1?on[mjnFhFOgHp' );
define( 'LOGGED_IN_KEY',    'lFf98q$<S}6MXT%r3F~]$nNuW:Rw[+j@Lq!i_5oVmH[G+<u 4mjF@_Y2!d0nFOqx' );
define( 'NONCE_KEY',        'v{-e~q{5>(SqfAf+C29Hw~8s|@F2n_i+0s@IX^r(iZNh%q{>>#~+%c-tpIjf@&o_' );
define( 'AUTH_SALT',        'K%)5>ee9I< $uEn5G~eI!f i_Iuc`;*Z7j($J8v8aBzk%)q_&C[Seo`.dsbU#!$~' );
define( 'SECURE_AUTH_SALT', 'L3&)+`2X9n_e;gNX4ENln$!/4z4X>lgyrr0<hwJ@nl{X$6?:j>u2_l+u0x|*@v)3' );
define( 'LOGGED_IN_SALT',   '<g!UatweCbTWI_L2U|wW4+!sakM:1I6*N<o#MB=#!ATYq}600J0:m9vKBdNd#ot3' );
define( 'NONCE_SALT',       '| g8@{hHt-IBl.JO{mKlY>:A$CT<$9C`1!}0jx;aw>da[y}m$@AONmTC;nj2x}EZ' );

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

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
define( 'DB_NAME', 'PlantPalace' );

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
define( 'AUTH_KEY',         '^F_yq#tDuH4qjGv}9..-9ZF-s%j:I{0jPKj].duc5%o[6Y%Mw=mL0mGN#iu/-w$a' );
define( 'SECURE_AUTH_KEY',  'uX{b/KwU2g?~}VwUhK?8$dp _S=h}`3D/#b2n4uMOV}9:<@J]9>9>M;{KKnCe#%*' );
define( 'LOGGED_IN_KEY',    '9s=x)~$=V=7shVTn&rjdxbNWbHfA0.~*gcY}mKXQYYsDr!XJc-HzcPouU6E0NtBq' );
define( 'NONCE_KEY',        'Ay@Mx7ZN/V*[EF#WI#|hDPbPSk_qu~#-%>.v:82m@uqG8;UnSe>_XMD>T_n15j:Q' );
define( 'AUTH_SALT',        'P6:,:O2-6a[AJ<`dbt6s5nI$?fMaQY&)`zzyN$ $U^1U(`KC#UGG,},DwE{ zOp>' );
define( 'SECURE_AUTH_SALT', 'j=kQ1hi}1&^<F4r#=3u6@$U`m?d4wtNT+}KuoO2s=L9=$.MWaP72mG4;<QvwA)7-' );
define( 'LOGGED_IN_SALT',   'tTvoR{{K3<!ji6n})=?GA-4KdR^BjSTVI&p~sLiB72|s[?q,qT=PlC.8Eol/K:S0' );
define( 'NONCE_SALT',       '>)1<_RxO*Ezlw~ELK>rP~mNeP>.f<}%xpWjJ<F(I&x^686_g)&5Dy{eWy7[&sba9' );

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

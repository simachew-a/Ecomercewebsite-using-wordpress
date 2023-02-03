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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'O5*r]VMmq&$sE._M@9L;#1TNR?$KSBcdh7:|D{/)LAsD4=L^|5K:S C/|w[gP!{;' );
define( 'SECURE_AUTH_KEY',  '!LQ7nv(FWTQnMO4ecL$(;!RpCRNm#&FaKmnUr^0_^yinL=>$j828<+Y2l7r~{{]u' );
define( 'LOGGED_IN_KEY',    '07q;wE+^:yv(>%H[KBmu{uC:BoC06R4#Hv@Tzh7Wv~-oQ=v/{yW7egM0LFIdG(QB' );
define( 'NONCE_KEY',        'zlkTB%T+L!e_0MQWYyI#%vp+SuJ`WHM/7.nSzZQsDR?BN>S,dgiPqg&BD^$U8}12' );
define( 'AUTH_SALT',        ',TyOp,=V(4c=wLW:AsF4Hk59<Xl&uSLI)]CpbPcN=0[:n}IDTj$FbH?-.?8BuSxl' );
define( 'SECURE_AUTH_SALT', 'hhpH-Dn]xT<<t=i9ruk/0D 8F;vm)Kzsf*eP]RK+Y6g3HA_rgA|ao&O{M+p^oHA(' );
define( 'LOGGED_IN_SALT',   'YxS;D@6QrfU14+:EwC6;v{P[UH/n[T3A/zJv54(v~Gu#]mj;xg+ZEZ#4x[943=>=' );
define( 'NONCE_SALT',       'rLYPorL}!r_/CA?w5DFp/]x|X3z/}}Gkyxl6a0y|{%ynTa4&1A;+}8s2bUh.<*xE' );

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

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
define( 'DB_NAME', 'maison-ecologie' );

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
define( 'AUTH_KEY',         '11Fv^hpOXG+8v7:xfUz6T^O :C^jDfg6[ 6.x|*nrEa_9GHm`>edI|)-3lf5Mb|A' );
define( 'SECURE_AUTH_KEY',  '.LNf?K%VZQAN>FnW_:KaVds#Zd){&CfK(RDND;sY@Z f.F;_1!+>o#1K_+=QtzLG' );
define( 'LOGGED_IN_KEY',    'hF{:yeTZ[jdlc}#9F9@kA2>/%gk4~T]zsW i`UuMF05W6l]oTu4OO%$1rqx4H_gq' );
define( 'NONCE_KEY',        '3<Z.b}0^VZczp=][g.?{!bg`U0)$ZtiV-}r:3R^zH KS*#oD_`,A]k=fO!#};7)u' );
define( 'AUTH_SALT',        'Ch~w<wyOg2G)%b`9}5-;_orSj CY>Y#ZD=yE5F1y;p-A/j4Wx[8ZS}V&J{Q[w7wd' );
define( 'SECURE_AUTH_SALT', 'I=RXL>dy#NcW7kMAgX5Hm1]=1b (:w0}z|]Z/ghd$z9Sw0)c+j}Dp]y|Z8z{7.ze' );
define( 'LOGGED_IN_SALT',   's~,LAJHK+[6-8NS$4q 4Xz6ZQ,mb8Fe<&H#]QN:ZQpwo@6kn$ZLQu*gO[=>T3B2q' );
define( 'NONCE_SALT',       'Eau{~B0f-ruO1IGBB5-D(wgO6xES&P(WW4f`z80Ep4Ml/L8+.9#Aw1m*71G<PtKM' );

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

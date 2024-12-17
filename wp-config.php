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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ',@Y~GH=Z<Xi]7(Em@XnNzO<m;1N[QdZ+{P9^u^h@ E6qHN!PYhw`%M@M$;2eF<21' );
define( 'SECURE_AUTH_KEY',  'B^IXDpjlN{3Pm#`Z2Dc5)qnh35ZwYOegOeVB9<rF]&0Y57D#FNWYm5{.OESTgR<L' );
define( 'LOGGED_IN_KEY',    ';GR$F) :u[55v7~aWgF)!~8:k3EKI9YPB[%Jr~qB3^HlF0cyNR=hE_dqT`[wAg7~' );
define( 'NONCE_KEY',        '~Zu>pId`Ra{/g>k$b}mF:P=p~O%9[k@D)v,@GO Inqq$H`*S+$K]:T#L<,(Whnk.' );
define( 'AUTH_SALT',        'LKf))~6WDl{Dyl^JC;7Hk_-` *4-Yrn.(Rf(KD$5HZchN;tl^**;?$>Jg)fGzj>o' );
define( 'SECURE_AUTH_SALT', 'ReHQG9nwXfObxX#s1!*v|`<CniKH1@nGL1Lzj3r8U7jb-tMtY=I*r5U+(_?P.Z7z' );
define( 'LOGGED_IN_SALT',   'r~7?bTGl/:0AkQHnM7lJgTlp=zUUiE4OXyFZ>f@BKN|~SCn>,((Ds<0;uumd`tLb' );
define( 'NONCE_SALT',       'v|t@QU2hrCksAB%AYVD4drg0TUfO$v@C?7yLqe3+v#Q.BcD.f_h!mMO-Xb#p1L8%' );

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

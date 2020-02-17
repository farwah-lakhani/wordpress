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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '5VivXeOWj4' );

/** MySQL database username */
define( 'DB_USER', '5VivXeOWj4' );

/** MySQL database password */
define( 'DB_PASSWORD', '6GigL4JsLi' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'nb06~Zfgr`lXQ~7B~[Bnaz7f%@+wIyAl78x&eT:d4+Ir_Lq|xhk!yjAGP<PuLg[t' );
define( 'SECURE_AUTH_KEY',  'jb1zl%.HUoyM<HQnWY6L8RV51xRN)vr&D.xh~ajprSBG.miI8r=!0HV.o[@l L5h' );
define( 'LOGGED_IN_KEY',    ',l:2BX*NUWj3{+>);[Ll0#gfio^ID%OJ{*!ZtVx6.{cKce43+)XJUDb*z4N7`/4L' );
define( 'NONCE_KEY',        'Vl6nFp0ZKbg1UCjc-}jvEc0B4B+nc/C2Fyf3%_8eQmBq]|WThw)e5/{%j+u<Td9m' );
define( 'AUTH_SALT',        'd.+PAzS2@4AB.sb 7%-WI<t~xU*6T#ZGg(gq60(&MgB6S fD2yz0;Ys(vk6jO/Rw' );
define( 'SECURE_AUTH_SALT', ')CUyBLAL3aU*OU;D<vf%)uO~4NJ#O9d>8dh&W7#W_ePU*NzgWFL(Vd#lf[6klHxW' );
define( 'LOGGED_IN_SALT',   '4[v AsH_):Gy~tI+`pY*$Jd1*Uzwp<Ru/9txj={q-=`W~,eCejr6%/%9QpJf@7:K' );
define( 'NONCE_SALT',       '<4zLf/t1xy[z|v0-V~FK|{P60zM;< vyZ`L*&THR``@^%W)Zs7X{?i*ce#@>d@1+' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

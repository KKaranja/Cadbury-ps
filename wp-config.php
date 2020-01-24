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
define( 'DB_NAME', 'cadbury-ps' );

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
define( 'AUTH_KEY',         'l9$;_@R<l*RQtmEdy8Sw=i=/Rr3%pUO^ifINWF8BCk1;z(Q98&G9EB:Ms{tCv`WL' );
define( 'SECURE_AUTH_KEY',  'g1f):@4,7_ZPvYS #mb]UGJ@-C2D)uv*)/,mFiCd0d|>hH%Zb_X$`d/yr[Mbr&<+' );
define( 'LOGGED_IN_KEY',    '{p;?yAdE,.|Q+fD1GR4u*S-)fJVFbvwsgqg_N@EMc?r|[6XmS}Y,Eughx4Hp%jlx' );
define( 'NONCE_KEY',        '^{nw4MjwvBG*LJS,9*8lpkIZ<4nh$7~<Q9e6Suy4;q)V`e%Qzwps/5[&trN)F(/5' );
define( 'AUTH_SALT',        'F~v5qX+!*];j*2sBWwAxVy<A4E2lt)^A6Qf_Ex-<Ugzr$l3zK>]GU55L{WS9NI(^' );
define( 'SECURE_AUTH_SALT', '(L<u&T>*ok2^52Lx1Cb2}2og~WPgC7{[^0.Q|m_DQ)Z.F[Abp)_E,8v1s)HHXmNI' );
define( 'LOGGED_IN_SALT',   '1e/U/YmV-<cmzgg(l8nun)iP)!G_.[enm:WV:[$x~0$qYS5g(5HacAN+nu>R|~/(' );
define( 'NONCE_SALT',       'ljvGF!$H$!@dv2C1,iN!xri:x2X7WMyf|j_ORlt!pYa/|qLFv;BQM9GfJQ>=30!i' );

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

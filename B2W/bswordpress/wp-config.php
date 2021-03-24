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
define( 'DB_NAME', 'bswordpress' );

/** MySQL database username */
define( 'DB_USER', 'stevieboot' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Vdn8tui9DAIJ9T51' );

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
define( 'AUTH_KEY',         'HejU,f?h9{aI4^N94/:fBs@jevnAP^LypWA[C%v0655Zh:4786OTkc[M~TV|g7[u' );
define( 'SECURE_AUTH_KEY',  't{?Wh_u&FQb:.2F(Zt{`L+d$AX~PBvQWaWk3h[+9MabtntMffmsuAHxpbF%oz53M' );
define( 'LOGGED_IN_KEY',    'BlS%l0,6f88LRlM[gtdZ@k^|:>q6[?(2<Y.(xM7oRo*9Vb@,pIrMi%GClNQ8!h-l' );
define( 'NONCE_KEY',        'uo%a4}aZ0T[pA`2a&UAxm=!uzN@hu/)9N5}<;?s)|*~QTW,3dv9(fX+nv=x{jtdN' );
define( 'AUTH_SALT',        'RtY|jrhQ7fsY83nsOqCB.YEx&ve4n~z5=p0[/Gx%T;3?&x-xd^|%KP`q${Dj&Ccn' );
define( 'SECURE_AUTH_SALT', '}Y^NDfAG2cEa]77uz$_R!Zqa7:M,XjEN/xH=8,%^RdX1[3gg>fQ^O~m(1ba{jH!X' );
define( 'LOGGED_IN_SALT',   'PtUXr$w_Q8{$Wa>@cEqr.;/zp-(aTeRUcOamD{;&?*5.9?{QXZaE=^Tq%Cx{jE:?' );
define( 'NONCE_SALT',       'zB .+*{nPRf^*G}x0V@^/G_$/Wg%bf?`koBYg|tp/y?`acf8NQi&~#K{EXh3QdLH' );

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

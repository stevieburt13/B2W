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
define( 'DB_NAME', 'bs2wp' );

/** MySQL database username */
define( 'DB_USER', 'stevieboot' );

/** MySQL database password */
define( 'DB_PASSWORD', 'caYDBtXyptvG2p8G' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'y5bhE+oKJK,x`mJwxL+HC&~fMQ+npqF&T?1;wPi6}#-8I{Hsm;}3mc<k`ya/`8:1');
define('SECURE_AUTH_KEY',  '7BU}.cypd:wI@;|Kj_G2u: >C&p+3 N&g!TtjR|Ld2O6O7*i|-{V{;Tye=!I]dd-');
define('LOGGED_IN_KEY',    '8N|}`HBRkNxf3r4nx5FXmib<lxgT8?y0.bzLf!0t_FLE/T.f+Wu2h/)ms6c(2cJ6');
define('NONCE_KEY',        'z>f/:5Yos+eA5!a 82-G3</E^!7oT4,!)I++-dK?XfU`d$~o7T)0@wDz{1CwtvtM');
define('AUTH_SALT',        'A@G7gL#MQd*xP>}<?>lDS!v(McoEIfn<#b[)_`gHtCi.l[:]NnLIR} uFR|*6p0O');
define('SECURE_AUTH_SALT', 'f{M%=bPN|5KP0PF3R8M[;OZL0-m.x)}X-CAg72/jSt@o.D;7l,/lVb.3 Q4@_Kg1');
define('LOGGED_IN_SALT',   'dAzJqt:O3l1r3|3$iEPe^*BvQ0%GoG<p$zYeyqV~r[O9Nyh8hb|XV:]pLP(8bN^k');
define('NONCE_SALT',       '1f]^3+}0ix_CH67Dy-K!^k+OhnQ4/D_?yjs22a|J{L|RX1I;jooG9+kI|[+)~:z|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bswp_';

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

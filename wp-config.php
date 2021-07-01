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
define( 'DB_NAME', 'agency_db' );

/** MySQL database username */
define( 'DB_USER', 'alvi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ePJ8C76BRQxDPbf' );

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
define( 'AUTH_KEY',         '~,pXr7hSItePX|n|yUmIWl`SsDAt4x`21VNLbAX!.f7,l<JI&1wC>>J}sPPd^Kk-' );
define( 'SECURE_AUTH_KEY',  'PhmnMZwf^(hW+miq)|qWGoc?6|FGE._FkGPeEJPsTX6xXz.lZmeTJaoXl0~1%cU|' );
define( 'LOGGED_IN_KEY',    'vD7{<KUc|?r@391[<kspr?^-*t954x* Vc7EQ=])W^1BD3!pqhSG$l1fw,HZ|1BG' );
define( 'NONCE_KEY',        'nVLT*9lims* ?uegFC7?w{q5ZhiB0kso!!+YW`TG2MV$4AFz_T) qXVA>{z3448Y' );
define( 'AUTH_SALT',        '!&mI(O-F7[:&:#hp}o#_LqX6/z8@qmFHJ}Zktmo^<|)$<dtjMNI BUG=O6 IiU[(' );
define( 'SECURE_AUTH_SALT', '?n.SU<R8Ta$uBf(hemH-SFa(aCT`D<c;K$cK4fu|+QwDzGc]M8kx[E-Ft(o;LKNF' );
define( 'LOGGED_IN_SALT',   '2Q[03r6u%imt-J?Z)^)6|.S%yUMZO0k6;CG{lEyaM&UlGB7Z[oWC^l*/cb:%P;}a' );
define( 'NONCE_SALT',       'b6~{7Z(tlnp9u:K7adijLw?5[J<ieIYuMQH#Mm3@S3{P(wcWFpi^;8j5[m-M/-nG' );

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

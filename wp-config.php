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
define( 'DB_NAME', 'wp_om' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'MM 5Q.b.&bvJJD`*g/&y02 Y8a8KiqeRzuSu))2OiVsbcH38H=!]ARyr~~+r:P_m' );
define( 'SECURE_AUTH_KEY',  '7#qZm(kL*pUY&eG_.W4.bL`4Od36BhTy+fOFAiT:c]Q6KEiL<pMJ8*!8[m$ogkci' );
define( 'LOGGED_IN_KEY',    'ZmbbIq0OIyv7fk[SHk_3Ru=v{[r [O-dXV1!x2(tjs#)uvB}0N-?;Rr{Xp`yhZUR' );
define( 'NONCE_KEY',        '^;|Pw5mw!Dsf8!E<;IbB`SK@l~Oiq(77r%>~gW?/VM*QaL1Ox#pQ[|~sCj9,]^.!' );
define( 'AUTH_SALT',        '$N%{0>ntI@HN+&K:~| =nEXg@G%C6a2sQQ7Z?GFCa{41YG_3va(qO3dxF7`nXRW^' );
define( 'SECURE_AUTH_SALT', 'M 2ag(?k*[p[/+i+kr*uP6h<BtnOXaG#C!UpsxVSUEUNZ>8uNyleh?xl@Sp}/F8h' );
define( 'LOGGED_IN_SALT',   'cG{z7*S*~? nuDv/UAX 1$-z?w~Lb/h%&9xU_4]-H;`JjQ @yjV&oYE6*@@w7d0R' );
define( 'NONCE_SALT',       '.g&@^|1q|yxJvZQVaSGtB/:Jh~o%~gD.-)7PXr9g$NbmcbU%%cH~!~n$(}/,W KW' );

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

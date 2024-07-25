<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'absolute-museum' );

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
define( 'AUTH_KEY',         'b<ty?6oU;W$Y;Mw<n&p?Vn:jECQh@[R]v~{/|E=$VY|lJXCA3O3|kbF*]+S6P:TT' );
define( 'SECURE_AUTH_KEY',  'kO<Hmu+ud0WsEwnw,0DRS}PD|9-Y^-5)cG_4DOWbP-+F7+Dw^ka=C*!>+=l(N&Q.' );
define( 'LOGGED_IN_KEY',    '>uG1~zPA)*;:9jknOQ_Kr<Os=tFZ6C[PeA)Mrv!)]FzHTe>D(S[:%fpUA_PK[Nc=' );
define( 'NONCE_KEY',        'x~)&mq>m pN+7pUCgC(0MJHaNH]e+)=+l}%={!:8.leQ/kUJ&qDO3Pi<)YA#N0 `' );
define( 'AUTH_SALT',        '+W]=~{|DP2rI]>sl,VK;Z)m>|GE fUMglWqC/#FkOz6S|2/r%f^eEl9]x6D)SE!5' );
define( 'SECURE_AUTH_SALT', 'aQZLSG2W):y|18VV(<bqSQ>ry)bccED%Gc&3>A=h5c!8qob{dZR0N:|/g_*OkErH' );
define( 'LOGGED_IN_SALT',   '-{x~]Ra,R(QK,,H^)$wD(U0<SZaGzb1FO%x.u`3&W=duF`) 3joOJFB]Wl8v J<D' );
define( 'NONCE_SALT',       'K/UsQWEHlz2O>K3QrenRwk>eu5OX~$PKswJ8SM_RS[A<m+/.@50N)&nPk&0w!F8g' );

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

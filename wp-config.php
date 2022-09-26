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
define( 'DB_NAME', 'aloe_green' );

/** Database username */
define( 'DB_USER', 'aloe green' );

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
define( 'AUTH_KEY',         'Xd_!c-n+nAZQ- Lf&8Y}3;Ow?fO</^7F!p%Nr%WW5<V}}_77N~5SlT9~C+{cuR[h' );
define( 'SECURE_AUTH_KEY',  '!=ay,`xj/EH_,#?d56k(&lW!NxOe@@TAAJ^}+qc6@5Qe8L |M<Quz~n&vb4cVuO<' );
define( 'LOGGED_IN_KEY',    'H06Z= ]VSfvywI77QsqvQbX eC5F=o!ga/2,ao_uvO/c3)TW9?-Q]tph!NBUEHe]' );
define( 'NONCE_KEY',        '_T6#M9ai~IxiRJMvWWi1 5MiN0FV~Wj0mz.N>?w-@j*Sw_WuTN(4=FQhYX&/~]6I' );
define( 'AUTH_SALT',        'Ek!e*Em?n7*Md?kmu*!VC9WbQ/R{z:D=rReqKx/,X|Ur%)6p?Jmpav{yDZ9jal%H' );
define( 'SECURE_AUTH_SALT', 'gQ7,98/)EN@DAAKtq]Rv7P!I?GBKZ6PQZ`Nui ~l,f3w;GB6>?.R7tUwt2gt!}G6' );
define( 'LOGGED_IN_SALT',   '*caXZ*yHvl]`~nYrf9_@yNa+Z>tNL~5A6 ots5oO-k,:$!-JEEdy% ?rt5h[X1l^' );
define( 'NONCE_SALT',       'fx>#=p_rGXVCSu~0S`fS5MQg?_CIt&:HC~L,=Hc^GKyg(Z1bQ4oz|FuqP!L(2C`f' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpaloegreen_';

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
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

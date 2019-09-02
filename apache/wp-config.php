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
define( 'DB_NAME', 'DB_NAME_PLACEHOLDER' );

/** MySQL database username */
define( 'DB_USER', 'DB_USER_PLACEHOLDER' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DB_PASSWORD_PLACEHOLDER' );

/** MySQL hostname */
define( 'DB_HOST', 'DB_HOST_PLACEHOLDER' );

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
define('AUTH_KEY',         '*8XAb/pa([hJHpC+E]``]vyvE<(IZHm<aopj74b[MZxC%_-<Ws~f@*X%pfN,.^q-');
define('SECURE_AUTH_KEY',  '@+zVNR2-Qs<3;Ul}>n.Y97R>:RsOI|or|8#BjSNvArP:]{AdcZ|-)vn;t5k.83;P');
define('LOGGED_IN_KEY',    ':_PC8nq~J9/^AFv&i%.S]Jz+zz+U-x=8r&Go}j{.P)c4ZFy8H,|qL&=DzlIMOcPl');
define('NONCE_KEY',        'ZG0x~|GYYk.4uk@LE%7 ,M(+hU82:[Nrh4=Zo]Ju1-NzmzDNA^yq+W4b[yqATH&4');
define('AUTH_SALT',        '#UE~|gy9 (MwKih)_PgY[Yn-@kzbNO:]jTv#QSf8!EMW*|0lhknX=(|7-Mo=%C}*');
define('SECURE_AUTH_SALT', '-(46?E!Xb]s1f p5%ZRu~[*J<HZX ~|:uAleszoeNfcQe-|`NJx] oHM5|<0U+S5');
define('LOGGED_IN_SALT',   'wpv]7{x%,A3X{)Z:mlH2nT!Q],S_ypT>L-K<0a^5=9ZHgzNWm*H_SQ0D5)2q%!ia');
define('NONCE_SALT',       'n_&}1`&|D2d#V~+sbR:7aUM[nrynqQ5qnU!a9;BbST+pOu]`yeN!Y2;|[65c:ZSy');

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

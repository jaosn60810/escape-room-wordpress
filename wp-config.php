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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '0Cg3X:%wRHxAxHje-Jj6;j6bcOcirU 7XWq, J*wI~KK9sL35ba097vPVVl+UKx#' );
define( 'SECURE_AUTH_KEY',  'X/ 9Dpq=L:/LU%*HYsxu,b=[#Y!oyzC<HqNi3!#TKLw}=A48_5YR+>N,Pw/9-V}l' );
define( 'LOGGED_IN_KEY',    '_)(vo)WnzzS~Dv; QZ*)ik(/RF`mWm,:.<N~@{P>08bJ.zLxs-M9eqnS)H8W(3u3' );
define( 'NONCE_KEY',        '|>6F coER(3XW1fB,YX{Eu4Q44v$P2M{]k$[thG]y?`?%(`._0+y`Isatjf`CJ`m' );
define( 'AUTH_SALT',        'ZIJt)7nnI8,Ki>Hp60g!}6T^L/:KyFJc&Vvqt58+]yz>He 1C^lD)CRYJ4FK_je@' );
define( 'SECURE_AUTH_SALT', 'F7>V0a%M`xDm!4Me$9owXrBKp#_.]HS%)xoxo)gF_PAT.R#nNsC3`8%M]zj$klEp' );
define( 'LOGGED_IN_SALT',   '>F#*itp3}=lhQ#uaqxE}ef,Ny,*eZ)D{:s0D){;{ Q>nE6t[==SZrPLT#@lAzE~!' );
define( 'NONCE_SALT',       '5Wg-gm)s Lf{PK4?n:-RH^%^xzmWe{hxav$J7lwG07RvCtO%Cx=PnVm+<?MQZ&tO' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

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
define( 'DB_NAME', 'cmsbasicEindopdracht' );

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
define( 'AUTH_KEY',         'W?N-7Fo^G<v|iVC}btxh[N7piR*#{4F*9wxD,D|B%[b;j}7WQzxzXXsayP;Vn4IO' );
define( 'SECURE_AUTH_KEY',  'YU*_=hr<r[E[N_(:m0Mi$Nn4|q[O],hMSM2c Qr0lRJ2sVH}o!Lz:kFQD^4%*T=&' );
define( 'LOGGED_IN_KEY',    'ZD1dH/&_f/<Yz{r`EH1P(Y#3CsBN@Dax%p;9M;?fgQvLrrrJoStU4Zlz(9XP+is@' );
define( 'NONCE_KEY',        ':Nq`Ume6hoy<[-.(pg-wD;n}p2wo{7h8vjRtsN&Y3Q ZnN4:F<Tx+m.eL1dzWp>`' );
define( 'AUTH_SALT',        'P0CWm_-`0TNs$WHLohpFjxV,ZR6H{M|?D(tO[a^JewYD@HKm7<z_zaX:YNftEhJ0' );
define( 'SECURE_AUTH_SALT', '3GaX5f:C)K1/AZ8c^0Vdpi?)_zV:o~.wq/v]0c[ACZ347-=,~Jn;dKU$Ef=:1#<t' );
define( 'LOGGED_IN_SALT',   'es{0;E~shms&7*29z&X)DSi6bu;kM7r_U]#7bFYAQh<a-d(7~~c.p/{s4(e(NzP;' );
define( 'NONCE_SALT',       'PE)$>1M-.H/K[W6>+5Pe<VBb,DO#RvnZ,Bmh*0919<LdAAvF.N?j*&_(8yk~Paw$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ws1';

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

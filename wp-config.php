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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mzugelj1212');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R3I}P>!K[@|ojX.2++)r^_9>G%Yo>P0XLh>,k]ZLCMS5i/X/nddN|J4UOfQ^kx^@');
define('SECURE_AUTH_KEY',  'f`puAz]iy>$Ozy1OI&}OQeDqxp<H0[F>lZJVy_.B6Vr0F9+ZZuPin,7_;y. EDRE');
define('LOGGED_IN_KEY',    ']Fs{B0ku7gLo$D|L5;aXWr#{63P@F5|-Wibm<gvRV|D|9#M[P=8owY.;?@fxP)K$');
define('NONCE_KEY',        'I@4WYbcPR){X>(bt,fw=Euw9_G/KRZpBupd/h98462ka_P`QoRiyN_?`WT#y_<S6');
define('AUTH_SALT',        '0BAz6EG7%wROwX)y+n_K&!&=yMyPJ2cx&Cxp?IX-*c9<S;i%9?a%RAG-Kjd4QI/f');
define('SECURE_AUTH_SALT', '<EKNk#a|`v~+A}t`Bu}>-P (7dPnj2n5fp2Lpfw_?VN7JT;rG%K_x,Axj/)Bc;2[');
define('LOGGED_IN_SALT',   'HU! +n-O|YAq@|#vl?!&sSo+7;W<}E-H0q-`+;|f+gh;9PrJ-Vd 8@dxps)`[kB?');
define('NONCE_SALT',       '2$e,iW9JM9u;9wz6I(8zFl.|&r#=R&a1H(vZ#GpMp+S+sfTN/NG>skMkW%&C| g*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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
define('DB_NAME', 'wdpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't+l4W9Z2u>sV.QJso|/8#R(=ZC1|1=.-2~#:L!U;EZ2g!2km8PP1d1Zg/2P4j3c,');
define('SECURE_AUTH_KEY',  '*Kxc`h4Y~Y8;6%mh5j(<;?L!)XYlsP`:{ZLMzBkGZwSkt7!_B]?P5_UTqb9=DXFL');
define('LOGGED_IN_KEY',    'CWa6sS3z(1ZN(wMa^S}]&E<z&}2MgE/`,-4<^]d.3@na./jT^C8yL=q RC]XtVr`');
define('NONCE_KEY',        'UHAK<lxJUc{t,E^D~KFODoM#&pB{7A$$!K^u-n7C:GM:$BU&p-{9Ni-fJ0@|8*~Q');
define('AUTH_SALT',        '6(5ivGjh3bWB9,LhY)usx)`Nj%<q--G/&t1s_CgLOO}{ Z(gX:wxycFD;+W@A32;');
define('SECURE_AUTH_SALT', '.zc7-FhQ5@ErAJ2t/+!yq9#[,oe84}<x;VE~Nx||*pn/`q2=gaOmkNqo?h 7g6/N');
define('LOGGED_IN_SALT',   'W[$|}z?^>)cpoFg4qspyG;AhF(q`4/6h2D@Yc&Nmy68A;afu,Q#()j$oRUvp>MNO');
define('NONCE_SALT',       '4NG|J[wl1(VK:RO*>g75R)]`O;V=hd7/U)|<*j+C3gWRg5d/E{lA$3UL|p`RmOF>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test';

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
define('DB_NAME', 'wdpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't+l4W9Z2u>sV.QJso|/8#R(=ZC1|1=.-2~#:L!U;EZ2g!2km8PP1d1Zg/2P4j3c,');
define('SECURE_AUTH_KEY',  '*Kxc`h4Y~Y8;6%mh5j(<;?L!)XYlsP`:{ZLMzBkGZwSkt7!_B]?P5_UTqb9=DXFL');
define('LOGGED_IN_KEY',    'CWa6sS3z(1ZN(wMa^S}]&E<z&}2MgE/`,-4<^]d.3@na./jT^C8yL=q RC]XtVr`');
define('NONCE_KEY',        'UHAK<lxJUc{t,E^D~KFODoM#&pB{7A$$!K^u-n7C:GM:$BU&p-{9Ni-fJ0@|8*~Q');
define('AUTH_SALT',        '6(5ivGjh3bWB9,LhY)usx)`Nj%<q--G/&t1s_CgLOO}{ Z(gX:wxycFD;+W@A32;');
define('SECURE_AUTH_SALT', '.zc7-FhQ5@ErAJ2t/+!yq9#[,oe84}<x;VE~Nx||*pn/`q2=gaOmkNqo?h 7g6/N');
define('LOGGED_IN_SALT',   'W[$|}z?^>)cpoFg4qspyG;AhF(q`4/6h2D@Yc&Nmy68A;afu,Q#()j$oRUvp>MNO');
define('NONCE_SALT',       '4NG|J[wl1(VK:RO*>g75R)]`O;V=hd7/U)|<*j+C3gWRg5d/E{lA$3UL|p`RmOF>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test';

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
?>

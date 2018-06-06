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
define('DB_NAME', 'doctor');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'kRqET?JemgC,G^(@]*tE=t#::Pzj5)i5Izl&`Ugo3}N7joV&?t){Md9f d,GKrQ[');
define('SECURE_AUTH_KEY',  '6N;5tA&F5EtERb3-]R+{W3F*N;?-A:;U4|5c5l=sa<@58lg1lLs|GuQH]b9&opmm');
define('LOGGED_IN_KEY',    '^Ng2]O|V)8>**ZXyUL}c t>6&Ui#wq9+?y8=[6kYG|z!bp{mY1R2t**Z/^Q&9p:$');
define('NONCE_KEY',        ')]Sz|K@R5FmnELMT9yw+KU@bW|pD?WNm#%0m)qLeCfufGkbnh;2i)=%k:O>Xqwi+');
define('AUTH_SALT',        'Gbfr:4t;Nqj|2M=2u#~@MFgp<.V:pW{>*I,:?sd8{aTjL~SmPvmAA{zcfv__Nf6u');
define('SECURE_AUTH_SALT', 'K_RFr?]}i^f{mF9Bxbd%!cC:c-fkA#6y!N c5n:?DHn|y2i:e+.,zrn5_-RrB9fs');
define('LOGGED_IN_SALT',   'Lb[`lq#/6g(kn5+nF{!i7&j<H63a>?%gp[8[(&Ucatw,HeLD.~}m}rQ!3^03%a$V');
define('NONCE_SALT',       'r`x9tU|eiif-@<wpPreeb.Mzkw>Yc~YyWncG4<(DZz|(/>5f$rFDT^BDmkamO4g(');

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

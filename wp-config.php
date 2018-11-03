<?php
define('WP_AUTO_UPDATE_CORE', false);// This setting was defined by WordPress Toolkit to prevent WordPress auto-updates. Do not change it to avoid conflicts with the WordPress Toolkit auto-updates feature.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_3jw53' );

/** MySQL database username */
define( 'DB_USER', 'wp_18c4q' );

/** MySQL database password */
define('DB_PASSWORD', 'Z7IVr45ji$');

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '[a;A00&8T/TIR01400+_eH3Z0!6095Qz&6jw+*E(8h++47/!*~Te0tPOr&tp9%6e');
define('SECURE_AUTH_KEY', '25W@u1)M+:3%7w*K;EJ8[R4UB8#a*zE4XIX59+5mwX~;A%Jxb16XnC9a#7f&|m4T');
define('LOGGED_IN_KEY', '~zdo:|u4hGYr4hs*%R5;]u/5aW8I51!894mYXfD@D3@NQM_3b%eq88sfjFF&bf2B');
define('NONCE_KEY', 'Y9rQMH4aXN0JZc5j*t#~X5Plj|7X*C#x53YM8*])2650~6P77@(+E(~l|0fSWI;O');
define('AUTH_SALT', 'blLFf/;rW~1HpA~/c_|x+f_N+_h4y37L/H4#X5;:NR[3bfRvlY0M7:IYH%fvp2Ca');
define('SECURE_AUTH_SALT', 'zkzCC3jr5B5y%;7Y6pTnD/%&XH_|q;S4K]79fMHukX+-qs@*&~:bY[10Jg8[oUVB');
define('LOGGED_IN_SALT', ':s1Bm5AD;oTefkQl8a/8h//[O5Pgoo2h|t|MSSnAqW6x768m;!7@[)BLuYaw@lWQ');
define('NONCE_SALT', 'w77%53pp7h|43TS#fD24Y[C~c(!!WZEP)&pk3ih+S4E]|FS!IAzA]%IH5C)sJ(5P');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '6Hy0rha4N3_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

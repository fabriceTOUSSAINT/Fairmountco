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
define('WP_DEBUG', true);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'drink_fairmount');

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
define('AUTH_KEY',         '*psb>!Gs$FmE;8+OGiGKB}w{yj3`4bk+sFE<{;>$aisZ?;S)]2zpZcW0X~5CSv,!');
define('SECURE_AUTH_KEY',  '%KKZ5D):.lrlZ*;-8g|be2|dL.I)noI~c;/<R8y.Zw~2Sn$N[6pAr5Ctn]Z]Qo8y');
define('LOGGED_IN_KEY',    'r,%*HjFjd4#u/7Wm9M[Ph1o:6Uu0rh>6Uh gq4?o!I)t7t?-BWC-Tb[V*+LmpRXF');
define('NONCE_KEY',        '/CfaH,shY!)_H9kIK;s)w${?&LCy+xKkkw<$%gZfzK]*=t+$K#wp*ksd7YTY]+KH');
define('AUTH_SALT',        'Q%IL!4iu;8nu*.+0IIy{kJ4I(F>ns}^Rq #8QEms|#fCg5aqNP~A$=7iek,r>|PE');
define('SECURE_AUTH_SALT', 'U@o*Dq7!+:&`bMa7XabGeKFkLS~nN{o;w06mf)Ayr sI@E>_|?{,Pt%z]g+|^?o6');
define('LOGGED_IN_SALT',   'k*)%o^lh.5rk<5M=qMW{2%E6t14cc#B(SSvl_Vh%,PaP+vo_n_@Vx+`M^g}sIrwB');
define('NONCE_SALT',       '.LK]>wZ0rZaf Z1q,V~.#wh4of}sL+&D*^mA%jc)dMY5@JZ-ND.T!6xX{Y@hc6l3');

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
 define('WP_DEBUG', true);
 define('WP_DEBUG_LOG', true);
 define('WP_DEBUG_DISPLAY', false);
 @ini_set('display_errors', 0);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

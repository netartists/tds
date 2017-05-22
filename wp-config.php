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
define('DB_NAME', 'dbwordpresstds');

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
define('AUTH_KEY',         ']3$C#f@A>+)hD>QCBPbivT}5(RBL*SfX]2yBV$>16){h&d-0KD.xt~p,Zx/^r[g0');
define('SECURE_AUTH_KEY',  'pefSuhj0Z{? 6g<BezXgRv=OkZ(|x4[J?%r(n[[9,O@F,p[zw%&l1Y0f(|[^3|,%');
define('LOGGED_IN_KEY',    'XasjBs#8inWjm}%qPGKHd OSqOWpdQH!)BoS8bJ4DQ>yeU=pCeMlm0XY>l}:yP@a');
define('NONCE_KEY',        'AQji-aT%R9kQem,=B5l`R~hh+/2_*1.!gnx<d8 *6ndC|V[]MNv?y]Y~zbeY}80.');
define('AUTH_SALT',        '$ty_p[D]YT&un(V$w9L^aR#fTTRgW%$|]?Th0CFX2l<|A3g!<%Io@#KN~`14D4rR');
define('SECURE_AUTH_SALT', 'BwK=hL*e4oAL2E8ux1Q]`=9oLMVa=~#qC]ncIzoD%OfX8O(qAYqUd3tT}Uz7LG4%');
define('LOGGED_IN_SALT',   '0[Gp j4@G3x,dCCnemOyv};)(zl/!lCHUDs//Qi;ns$O4#]z?AMuG-G[H,O^>B^-');
define('NONCE_SALT',       'PBc%74?>[V`uI$Y1cm1o&|SXjA4G |zh>D`km:Q!x=Z%abk!Ncs>:T/YB*9pATZ<');

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

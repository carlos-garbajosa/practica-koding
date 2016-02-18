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

define('DB_USER', 'wordpress');


/** MySQL database password */

define('DB_PASSWORD', 'wordpress');


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

define('AUTH_KEY',         'dGq^vak,|b]N%H9U%69Vw-ZFk3ClI~m/_/ew_UUPvXtef6WInD!)E|^v>]7,{Y!3');

define('SECURE_AUTH_KEY',  'L-l2IGl8,rrOh{vFLkNNaQuZ5Tym*7U2GP=>i5I.tEaf^4UT`}5g/vk!_KR_`vIW');

define('LOGGED_IN_KEY',    'QD9hJUZt%u[_z,>+|$3V@%]]d~^.Wvz&jAw,dq@5|Xov+ !1Fsr6]k2#pP:xEF(v');

define('NONCE_KEY',        'rZKdF,*-7H<J=(/dV@&0p~7K|)#HUBJYwp++u+vX@y0A?W><Uu?S@ZZU+>w6Bm%]');

define('AUTH_SALT',        'e-}LTVx6E]bd*PrePqtbwY}jm7C_|^wWNU,w;iC6kQT8myT$W$g+-zxXHHqb)TAs');

define('SECURE_AUTH_SALT', '=zD)_kcZ`cff+:f5fOL.7 G|O_K =OOd228lo=Wmd_Tf)@}E2ELcWL3n?%~^Jnwz');

define('LOGGED_IN_SALT',   'aA5wP->-/@l}x+A@tJj*CpdB-[sucy>ntmc;RCwWFzBKT{Dx|+(Szb>8u=O!3*0i');

define('NONCE_SALT',       '4%qK6H-z_uVu%C.guf1}kCfV>Cu3R2LQhvC,#q{x0rw@ zB-9|taF6tg6g^sMk5l');


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


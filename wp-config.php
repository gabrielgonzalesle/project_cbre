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
define('DB_NAME', 'cbre');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'dNO0uQiM=Bopmx3[-Uya3>-*t$sZ,)Cz.{k =eB w4mb[AWegy?X;elSH[Ao%A3B');
define('SECURE_AUTH_KEY',  'D|O;FA4vDm5@#>6N=K[B^cSvLQvR5RX>hcIrgj|vV$-*,E{b<Lw:$HcMuu[nccO`');
define('LOGGED_IN_KEY',    '6tdG;7BVc6M{arsnOL=w+vJPA=yk{q5rf?mklGe;.W*I3)FPb#Ffus!.Td6a~/B;');
define('NONCE_KEY',        '4XQE-2:wL7>bJ8;#^*6^*%r} @$4t&3Wb|kU,0HgzM0f;{|zwesPf3:I7QV&z_R]');
define('AUTH_SALT',        ';]Nm&pA)Fr}r$/g2DT^_2B0:rXG}zoSw[/(6ijgmF0mokCma}ZgtD2~P.;ZI3/M}');
define('SECURE_AUTH_SALT', '_}zl?I+N80@xv,Yn0AxyAC-n/B2tgWVN,6)8PoHZ@<LMS0TcKoa_C`}7!+]&~W*Z');
define('LOGGED_IN_SALT',   '(&nz%LKG5Sq:YLS$HUklR/lPVoo-$(o6*{wrI @S@-:/;&?kK.!2)b}Bcji1)EK/');
define('NONCE_SALT',       '2;H-%q/joDI=-M>X5a]r8Pt6bl/@EVh<#ip^~_WX?,>;/H-1#SRu1%7YBmWF .AA');

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

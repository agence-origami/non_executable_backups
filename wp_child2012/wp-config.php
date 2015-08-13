<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_child2012');

/** MySQL database username */
define('DB_USER', 'jelashwordpress');

/** MySQL database password */
define('DB_PASSWORD', 'passion6141');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Ec$YkzCT?A)es3s]:t|k.)HPh&fTu^nB9O^T179suV >&n2.M?qaP|>%YOY6ANXo');
define('SECURE_AUTH_KEY',  'sN^d}t>-buHfD,K~g--XwyiqmwWhv{7+vnKQ1n NcnOuc{)  >Q4}0Mj@ut:TH6_');
define('LOGGED_IN_KEY',    'Ced^T^nrD[PCPwtK$-1EP oHUN1j!H,+A^F7<AY5658a2ZpomOK^[;q&D4(S>H3^');
define('NONCE_KEY',        'C:Bp$wCuor0PcGB~HCp/@?~pa.L%DTA6Cc3>qpBsAbU`#3-Uq(I2uA=- /utJaH@');
define('AUTH_SALT',        'rI~S*/ab!%5K{K43[=X~v18M/Kj>_t[fWJ!{8j_bNQKjg1yAg7^]GFV-8#6s+!QC');
define('SECURE_AUTH_SALT', '!7~<FppkT5NA=m:+W@]s(inwI7J`<vjr]{XxB+($[[k-J=#Wr}oYO,+vI!/eFBr*');
define('LOGGED_IN_SALT',   'e%mY,Wus[d_cA<{qw!y+?Y9:v`j3UU><P]^Il)3jjvC1^q!69Qaa@@95E)~a~c]-');
define('NONCE_SALT',       '@|40*%V)fvoA2:aW@5 tnY:]5}N#{%++h96>e(J:!V(IjmO)-Ai-#d*(bu|j@/R ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

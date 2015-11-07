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
define('DB_NAME', 'exampleDBnn83h');

/** MySQL database username */
define('DB_USER', 'exampleDBnn83h');

/** MySQL database password */
define('DB_PASSWORD', 'GdEvbVHys');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'u3fvgvBRJFV@}}Bn>!0YnZVk:CGV@:[[8gvz[RNcOZ|59Ow#_!1Zos_Odt_LaWPa#');
define('SECURE_AUTH_KEY',  '-4l-GRDS~:15h__1ZphwD9O9Px#*;m++#Shepl2D;P+{.2eqq*LaWPe]6<7u.y<Tj');
define('LOGGED_IN_KEY',    '9Ka#51:Cl#~]WSdt;amiam2TSea_5]Ltm#*m.*TfXbTf2MHAbT+2];A2qiunjuIE');
define('NONCE_KEY',        'vjgvBQ8NJv|@[Vkk|RcVkg}C[8w|~[VShgs8ZRdZ|4_1p~t_OKaVl1GKZ_1:*;ale');
define('AUTH_SALT',        '{7By>,3fbqf^MYJFQ@70Fn@zz>Ugcr7JZ-GRNCd!84}NFo|!!:[cogdpl1C5W_1:C');
define('SECURE_AUTH_SALT', 'hC4V!:}[8gwz|RNZKl:C9:D-[|51Z-s~KGSt_LHWLm2D99Lx1]52apmxEAXLEeX*A');
define('LOGGED_IN_SALT',   '2Am+{My.${XnjjyEPIjA}B7fvn$JYYn3UMY,3,4gvrkvBRcr3JBRNz,w0csk-GRR');
define('NONCE_SALT',       '6qbr7IMb,3Ay<${XnYUj}BFQ@}>>3f^z>UfRgc>80Fs@@}Ynr!NYKZV!0[4hw!0');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

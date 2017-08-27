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
define('DB_NAME', 'actividad_22');

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
define('AUTH_KEY',         'm7[jl,U%-yp7<:/9FNe4:<FWR&TGXeo2(Yk%RW,RPx<52q+[{qA4221Jpp7$D*1$');
define('SECURE_AUTH_KEY',  'pB`@xK}9v+7^!@W!se.6!_ZM}:`p1eb)<Yb9#I//.1sh&}}mqS=F5Q^eC6ToXBC_');
define('LOGGED_IN_KEY',    '2hED]5Yv-{Idx|Ewvn+l6!6GTC)0;{^|]}2?P)U!]wl(oPbAa9@dEPQ,xB;v xlA');
define('NONCE_KEY',        'b7.7xup,+ RF)l}]I_/{{=.e~K?jFwy3,z`~WxUIFu}~)0 FF|E@/jzqQL1K#.C<');
define('AUTH_SALT',        ')eKTlHcAniDBfZdV1;8{$Ftm4.- EM1cnQ>YgN8#yEG-SeI=nI<:7P!M;}w!N.&2');
define('SECURE_AUTH_SALT', 'sR`PeXB:j5_{,(2%H8Rwvrf=_Z}j[uW1~zT19=NUR@r2N+%2i.@3!r[5%)qC=&Ph');
define('LOGGED_IN_SALT',   'tDV&1]5/$*`:),Cx;12`ZvWJsb#Y:a@[:aT[xzjBP>;V*2}{i3BB-(i5abLb^$0i');
define('NONCE_SALT',       'S+coH/lK{xEy!+{]h%0qxclQ0AP6?Nk-6S!tIi2lv6*fVa0?(AH/RjbV<ly.2)P,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'a2_';

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

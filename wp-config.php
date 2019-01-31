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
define('DB_NAME', 'dine_and_ride');

/** MySQL database username */
define('DB_USER', 'adminMC');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'aQ0@`!bG3CT/zeB.|ncT9AVF*rw35JQe s>T|nI|Za#9ND73*,HHi%>aDT*{ aC ');
define('SECURE_AUTH_KEY',  '|l}XGl,FX{ItsIf6sgpdu2@ECoo6_BWL$4nP{wyQmYn|L.F=qCsv[IzOR[3<= XD');
define('LOGGED_IN_KEY',    'es4.8%M:nE>g4u{m[;#Q.!eMR_ |Yq[-^&tMjoqBd}xdktH`%Le[?r}Phpm^ZyOx');
define('NONCE_KEY',        '`5>z+-vgI&8:a!,opdWo6sW0?sw$;#~O}E#XA@U4#KF;(/b!;ej4Tx!l+J#bOsH9');
define('AUTH_SALT',        '-6{=Q1^>t!NpRca%=y.h*/_IG|B5[Xc/[+FVO8_$>IS&J#0.J<sU{Z[{K6eMBzeE');
define('SECURE_AUTH_SALT', '0;`/AC^$D4l;RS?.d8BcIYSUPKIMjk=qGN>0nmB`Q uz)&6v*BsJ X7.a6A#ONG4');
define('LOGGED_IN_SALT',   '~PI7q/*sHEcQZ-7,Py8n@Y=?gS4Skoi<SlR{{L{:L9{2 qk_;9`I&KW`5`VS@<d^');
define('NONCE_SALT',       'PyUJH VjB)J- TlRT?#jlt@O@]Mn(M}A)^W20I@4kF$zna`%HGHGrnKS#w{?VPhv');

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

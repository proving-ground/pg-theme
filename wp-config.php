<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('DB_NAME', 'povwp_uwTEST');
define('DB_NAME', 'provingg_wp');

/** MySQL database username */
define('DB_USER', 'provingg_wpdb');

/** MySQL database password */
define('DB_PASSWORD', 'wT(Jesp[?t-;');

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
define('AUTH_KEY',         '|Knrbe&g)6Z&;MR$)C=Fs~d6+?sZ$Fs)Ky^%ALF}^P;zbe|US5Xa-Ck) -0TP9%|');
define('SECURE_AUTH_KEY',  '|R@<agF?-uC]1$LWQ1[_V5$XH5#zCS{+U/h m]@[RWLK~ L4r]/3A:ihulhtc@G&');
define('LOGGED_IN_KEY',    'BB:sJ=@+7Q0-%z_1hAiJi7QdCephmoCqX+#B}suu4V)pw$]R9*-9w|-x6_|B|l;&');
define('NONCE_KEY',        'I~Sps~:v5O~C,yP;DQCQgrp|$ nH<j|5%@(XJU[wkPln*w3+Vo+lrNPg)SgJ/$=R');
define('AUTH_SALT',        'HQW}1N1@N_Z|P5)oR+6`$@+N@Yj(}6B$p12HNj<lO/|4N&-?.#KNea7||^4:!X%x');
define('SECURE_AUTH_SALT', 'z[!Vk1r#`Cqs?z+9@@+@ya2G)6P6YN:9I^w}|`C&zk|;Wy;@|1N={1Euv|6*[Ynd');
define('LOGGED_IN_SALT',   '-|{6jfiP$Gu}Lq--eM-f_Ga5-<3S`JL+88*YF^8Wm`!/g8aL{*+Tv$BtIK-syc9w');
define('NONCE_SALT',       '4rq-M]78$o[@N[%&GCo;.3Z)rORa-T>d|GNoVW$Fq-~ti@t>dcV8hL5Uj@-;yVvr');



/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pgwp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
define('WP_CACHE', true); 
require_once(ABSPATH . 'wp-settings.php');

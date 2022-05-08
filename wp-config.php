<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uIM*/|iawXU;jOgx9Pl4m,XT4{t0~p5VDOl~0 wvJq%n7B:Of%CVF+J)zr<{&{nn');
define('SECURE_AUTH_KEY',  'L#ntwrH>ZN9im]/n+(WdD3rk%>3+LG59KaDUx>D]7iV8#7z}<us,qz0AK8<v+F~a');
define('LOGGED_IN_KEY',    'b=JAB6z[|raf%N7i.AD9mnz8n)|RoXG:WA,c+^a [=86Tmi7P!5e=3!$ev3L5wFB');
define('NONCE_KEY',        '&`9S96c$XHIHhG/48b!4ll)j66S.dcs=W|OktqeX;6XQ>QS.p3}D9)>InxH)5Oj7');
define('AUTH_SALT',        'De6B8#gOiZtZlz!.I<I,PiI{|fqts3~|XlX0{.lYfXJ@eG<~^]zi3R&:bjj=l?)r');
define('SECURE_AUTH_SALT', 'E{0rF1wCnF1R+T`q/Cm&(F<19R5_GkutSp?J(kgZMqv9XX@#Kh92wucv@59[@?c.');
define('LOGGED_IN_SALT',   'dO-&6A5^K]t&4hn#hWS@2CNYWp;3,%k+)c z81rT 0qHz<L?Ig8{&[~u%|&]F}0`');
define('NONCE_SALT',       'x-!x[fI/1JJUbpbh@*T!14%@iFqU`jMaqAtX{#>q_d#{[zm[@lxypF/4;xrF#[fV');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('ALLOW_UNFILTERED_UPLOADS', true);

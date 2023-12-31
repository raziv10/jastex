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
define( 'DB_NAME', 'wp_jx' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '93/_NP;SoyIC E>~)@=8;MdamR;E5%vH{C-IYNWz8 >T(7(41+(;Tk{I|]*|5mW3' );
define( 'SECURE_AUTH_KEY',  'UNZsC^2.> UaJ@p`kmfRr|Wd+LS#-x0=A]2GBpg=&DVYAlMN()G34ltb@S4`W@vq' );
define( 'LOGGED_IN_KEY',    '{Dv .Xu54<%U#?CQIq=i K|.]@S@M|F>;Ptq!r#@7au%/ytE%EKK=  5{oZ,CuQ&' );
define( 'NONCE_KEY',        'm3]Ncw-SB9aYY47oGpreW)!kH3#/0~2AM{Q0kTOC&XV18e4SKD{IOouO8VR9Nj3X' );
define( 'AUTH_SALT',        '8oMc<@C4QHnF0)GOkgu&/x28W-Uxl-&,<rsYu~]FfPb]Q=N`ho{|1W@.poHMQQ_b' );
define( 'SECURE_AUTH_SALT', 'Bw G=_,b_=UYtEQpU]OjXB*ujMrjH^s(|&]Q`ml[jS>KD.@W.TnQ$c0;=_0lQ~+?' );
define( 'LOGGED_IN_SALT',   '=:&H_5$ze+cZH$8nWY?N9?EL?sv4_Ce|Z!JhhMeEFa&-zd-bo*hILoKyC)AuHllf' );
define( 'NONCE_SALT',       '!DX0=-!bX{D{me;h#8]p8^k&HA5>/z1$}1Ff)9fO$ZcqWRa4.bzzhY.>8nHtiSQ6' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

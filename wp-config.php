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
define( 'DB_NAME', 'tradedoubter-pvn' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'DH|o=g.RStKqFU_!e[n/|% `j:s2a`am}v%clI`0M&xZ?G!-!4;pf5kw&@f.qc#0' );
define( 'SECURE_AUTH_KEY',  'nZAU5##6Tu-%XY-C[v^qo7t1hvkwu<Wsdgi#|X< nK,U}XH:C)-5oV6bhmYGNY@Z' );
define( 'LOGGED_IN_KEY',    '(EE#BD%n=@ow#qm>=/zXTEtZ>f2cAF@&9-Q!9qV87;w49K56!)S|8f$[uhsD_zS1' );
define( 'NONCE_KEY',        '=w{C{%gIZ]($dEf9(,vuWj;X#gW*e:rX/Cxx$e!o;Jm-^-^zzU/cMN*A;gh9~sH$' );
define( 'AUTH_SALT',        'a??_#?6HC|eG%aL&d=cB0TT4I*/vX*QBTY651s/eJ~y:SlZ&N>xlmoQ9IML/rjOX' );
define( 'SECURE_AUTH_SALT', 'sL[%|*#T_tJ&>S:`Z>jErC9$lXz.<c.+PqZRK6~d*m9|J=J8{9D)[t#7&!3#mQk0' );
define( 'LOGGED_IN_SALT',   '(*<J!`byj$Cbwu9jA4Ok9uVek4Q{SD|/87`}d|@M(EHLPqV)-,+Bmi=ajDwSxC:)' );
define( 'NONCE_SALT',       'x3w<k*nTw2NsB_~5o^f]7:hQf]aiAG%w)6?=]`Zqlo&0b<+bbk#@Sq/>~V]fia W' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

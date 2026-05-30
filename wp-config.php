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

 * * MySQL settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "alvariumcc" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'Z*#h+5c2]7mKzBQx+h!4|_M1{xD_,*%HMnq:BI-[+Ln{WdLFyo$Xx;$1M2P{xX[d' );

define( 'SECURE_AUTH_KEY',  '%U=A45*!.NTpJ+02G@B*Z+S,8<}f+d1bPh PTjm/Z=1tLT4iOb}=0={Z ^#ql xx' );

define( 'LOGGED_IN_KEY',    '0@5&V7i-N/FGbi#9]>%+HZ;3s0HRHP?vNe/3Kcs{k)}X%kll.G(]4@hxOlvZ@38J' );

define( 'NONCE_KEY',        '|NL.I*Zv4o&]=z|}^`*bNh=3v(d.n2 =U?5V{!+7qCtbo6)LLpW08+K{$:Y8zg9W' );

define( 'AUTH_SALT',        'wz$]B`U65:DWpH4bB@D~J~&@YjS=Qc=@n:ReA%d,]uL]2XhKm4n*nPY37p)Q,5%Q' );

define( 'SECURE_AUTH_SALT', 't,gu;|`t`tqvIvx>C&h^Y`M{OH_]eiM<H6$Qs3-d/3K)4W|pA2-~aPI+P$d6A~a]' );

define( 'LOGGED_IN_SALT',   'U1T@^@nzlS@YVrwJ7Qid+um@0rv/OgB!3@v5OQNE a;7CnI/WHtl0 p,4J&lB  #' );

define( 'NONCE_SALT',       't]&`QhbJX*:]B`i&?yc(2V}~s]$p3)k?]pfc8[a_/[lExjFx!^WN(Ff3T|Nj=#3f' );


/**#@-*/


/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'LVM_';


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




define( 'DISALLOW_FILE_EDIT', true );
define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';


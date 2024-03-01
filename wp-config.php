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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'premteam' );

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
define( 'AUTH_KEY',         'j_|Bd(e.06 n!$Mp6ZW~uva%>3,pskzQN e2lE|J$/2*x?IHwZ2C[v6A:UW{TDl_' );
define( 'SECURE_AUTH_KEY',  'Gp@8L,e{B;Fyjn]tN:l[8sU1]6ZaMQ}@2I+xhE#!N[N?obF.v#/%Id)swXZ$pHa+' );
define( 'LOGGED_IN_KEY',    '`;#Cv2fx+MOp6x`;p*3Wd2P4y6=.X{~KY#5AVZF2zIv2B[Pk@9(k~FcY|s{JN;;#' );
define( 'NONCE_KEY',        'WjD*^M:ewMFA^P0ZEy6R!Li`V|@fX&9 O3TR`:OC(~q+c?7@cSn8UP;7@]YY;6X|' );
define( 'AUTH_SALT',        'MAY7b6:vmdtb(WiCO%!O0#s`M6^M*qS?;#N%mf0B1R=LkOs(>Z|_pzi<@rc=MkWb' );
define( 'SECURE_AUTH_SALT', '#z`K6i)]gY+kI]F1:TyT;VJs28DMEQU#A$1}M@gehk:fydmD0df}h8uDgPM;`SuU' );
define( 'LOGGED_IN_SALT',   '$7&~29G%mZ;lo1@X|&}q$WINnNrd*=W$_I<n2v[W# _Exs17hDH{bkoFp2/&^]6_' );
define( 'NONCE_SALT',       'UGW?hHgyMH]RqcY=x1{]opy4eI>w=poKte]sp5UZy0Zgdyn<7fT3eG+k|]c.8?QC' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

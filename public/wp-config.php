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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',          'LB9ka*}CL?|q`zO`t)O7[q]hg8X5ZgSSth?VLpxZkuMX*SKC$Hh[?~<WUsop#~Ke');
define('SECURE_AUTH_KEY',   '_7+=F]z;p$fyF|jSzag60c2E>=;j@c#{G?E ? }pnU-h9EdaR]e[I8ojN{6H^Y]_');
define('LOGGED_IN_KEY',     '(N P#WG=%p-IPd[&E&U#P8a-cwjcJ%M9r*?z^ZQ1I!L1Xd29X*h*}LaL|!O>qACU');
define('NONCE_KEY',         'Vj(gN,+9uq1L 3Za:KQfe]vF3[G`H (x}h[jh7Ni@M&lOaFyF*^b<Py,8pNy:OK+');
define('AUTH_SALT',         'QG*.IsgMSeJYAERx7%),(*iTtAkWK8L2GMCUC 02khL>)xU5(thi5wX^@I^zM>TX');
define('SECURE_AUTH_SALT',  'W|?Uj$PhzS9*uy#VQ{W>Jb}ebuvsimmSIM4V[YGNdD-joa`{?~d+S36*)-&FUM}W');
define('LOGGED_IN_SALT',    '2#B>kp.8;nE`BFSJe|0pVaHn|#,O~,GjrSCqS3Z$.fY-bf^cA*xt}{MTGVz8r1~1');
define('NONCE_SALT',        ',Fb+<+wk(gqJ 1[q_?8&8vr)*~Q2+GkM}}??,#ik~U1.*}2JRjCV#X4OW[x}U,>g');
define('WP_CACHE_KEY_SALT', 'pfQ6!vb/af{ $=*}c[IJVwRe/w^MEu>]99R?6B~?6S!i5}d~V1H/Zdv5}#a]cJwb');
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

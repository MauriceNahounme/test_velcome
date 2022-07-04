<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'test' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gbu6A=rw<<hqzj~.CtRpI[yzM~Qrq|_Uff$>$j`_B-.*X;iAPJ(dMx1R*v -v#y9' );
define( 'SECURE_AUTH_KEY',  'otzQDP8xI*;5^A)mDJ5Pg$?rOV@]UN1Y/=tx8cq*nDgJ]`-pi,`8ZEXx-q6q2944' );
define( 'LOGGED_IN_KEY',    '<=lyL{>kyrQMHv=j;b`Y%`KG.D[q)DETn?(_IHQ<u{Q=2gq@sjFd(zqN;[73-B[o' );
define( 'NONCE_KEY',        '[TXT&,~2<xkUrcrr=}uE8D$mr`.$!YzLdWp5htJ2_l)lhDU%1+$)@@2ZXJv!PD}/' );
define( 'AUTH_SALT',        'OC0*a&mb4-EC$TW|1h=Nw|},fWWg`ykM #rWkBcC~cyWTL$ay1RAh>~x{([m6,et' );
define( 'SECURE_AUTH_SALT', 'L!7$!U>Fc4mgObeu^<.CIzIx~A$PRxW?B)u>U>>O*M#f~3WE9V^M&~Dh1`ZFzo>Q' );
define( 'LOGGED_IN_SALT',   'DP8kO#E;-9%M4`!a&{Atjw87!X[,Tmrh-#XB3,ai)W|nzsABk|h.PJx4B(9>ZVYP' );
define( 'NONCE_SALT',       'B?2BE$Lp_3PklOBkftOtQMBji %Sl6$@A CmfRr=|d3|VJN|hi;>kf=BQy5|~V{k' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

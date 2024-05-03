<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '*co;yq?`Jk-=k]R2jon`&R@H2 |;Kl)9;v>sa_&oqcola>[Q$>>}jY/b^~mWl(fz' );
define( 'SECURE_AUTH_KEY',  '8Bln(sRVY5k][9d~RdNJd(.h*A>`t.1s7kt#:<H2F%5>_h5oI@MHp_NB*O% }AqW' );
define( 'LOGGED_IN_KEY',    '{b-58iK[VMw=Iy&IkU~JifcA_:|EaZrc27*S-z^d>WJ~F3WbCZ+No33+PH?emNhC' );
define( 'NONCE_KEY',        '(?m<D8UvbeEn ?~Bg7Yp#XCHi_Ow{9P?Rcm7thnLu24W 30#vc9M K`FuvYfH3QP' );
define( 'AUTH_SALT',        '/HbWKzA{$c+rEyZ0<vbQUB 0LXSl&gFSv{+|}bVhJv6}a!483OIZZ+j|vqFqphqk' );
define( 'SECURE_AUTH_SALT', 'W>=IN}twB6;|elBEj*jwV3,cE 1r$,X_x|3&Q;4XA/37ZpE<T*wdZ[s2ZC4p8v!h' );
define( 'LOGGED_IN_SALT',   '|%<mvRm5>etzK=c;r7O*#SL<A806l$_v|bJ<)? 1P8e] :JBh7xq/<A?tYf5i8 q' );
define( 'NONCE_SALT',       'F^~N?$SP)rC?515E:y-I)^>1uuGI=+OQ][i_C3ZuH[J>IuV+TIC}UH6Sk+MsR>iq' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

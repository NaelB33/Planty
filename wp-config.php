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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'IiS[!S|!Z+~ph$05}~rV6x|&=3UoSw&Ht{Z;+<2D<K/1k;jwL:0:Jh80)Q>Oc&Y`' );
define( 'SECURE_AUTH_KEY',  'Om|g]B?dB{XLGPgi{0NNb/W[-x;sYT:U9}<YLu-TuY&kAK<yjPma7^?&F[]BV#)$' );
define( 'LOGGED_IN_KEY',    'i$NuBErf+i8Q2fp/t]K[DQWK%0c4R^]s!O>H3QkDFRE1!fb*v9>W:WCN^[P: bI ' );
define( 'NONCE_KEY',        'Kf@lP<Z[Dh6j2Um^Mf*n<>@gLSOAPkq|AMr/^tn@jqO{I,O6&~:4msO+JTMd:1-R' );
define( 'AUTH_SALT',        'j5nT+.E:Qb^,K X*(Qn(nS[KSRp&E<*b3QrCCSsB00_}6Gd/fm-{KHhk7UnR{_@M' );
define( 'SECURE_AUTH_SALT', 'OZEPi@Ou$eQ%%f I>}{x5G>^Nb&u}38ZEebL;WHW+S+Y..mb.KV&316vyca):IQu' );
define( 'LOGGED_IN_SALT',   '6fuLw%z#E.+B^u5|=^{FrD>9y0!BYwPizVzHHp[|3% Kpw6g^HB.5)x.LDc$h@|x' );
define( 'NONCE_SALT',       'N7FiAyFSLF$^+#SMCY: 5FRLg*jB.F^cl eCOQ~U0K8/@dQynOA0dJP fjrk$O_U' );
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

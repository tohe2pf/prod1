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
define( 'DB_NAME', 'prod2' );

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
define( 'AUTH_KEY',         'ABDqZ&BQX*wzPQ@!I_a-jG7=`]tAX[;}`nEAbqw{p+wXy0S3eK@)Yv#/}Qx,W<*/' );
define( 'SECURE_AUTH_KEY',  ' |7cy)Z1s2? VP@F6qX~?!/PR89cT;~b22%_ZEv_wm7c:`,5q3W%=ltkB$ri+WF.' );
define( 'LOGGED_IN_KEY',    'Zy{tMk1U*12WrgnAYo |$IKAHl D;7_u:$Wz8h&ev:wI}_K$0;UkRZIib%^vly<?' );
define( 'NONCE_KEY',        '?<~79=patYN>l})uu/P/#C{bfHJXaMgg*{?(5oP_KB@YpVN2`@ja<Y.#T#Q~]ctA' );
define( 'AUTH_SALT',        '`5Z[zB2B&s5CQ3G@[sy)(5(@M>udyv{]/VTK!&3?2<LJDXdow2OE;5x~*P< *vZ%' );
define( 'SECURE_AUTH_SALT', '|CaFM<%/4o$Vg)JR_!kiR`s(Jt%A<l}w7jG])j[kuL~(M=n/l9|mDx-D_GxoDW|&' );
define( 'LOGGED_IN_SALT',   '_f?e!65:q|a&)t|~M8rbE;Y$HE5|[$_C?+ZHCzL>(B3:>a49#QnN[,>}`%{pR_#3' );
define( 'NONCE_SALT',       'Y9A[crg#4hUx4#x+4I.Px?^WYXLrxEFe)10+dtWx @e)Smi*B@qm{pRip4?F*>KF' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_prod2_';

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

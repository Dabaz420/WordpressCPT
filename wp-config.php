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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wpuser' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'bite' );

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
define( 'AUTH_KEY',         'a7XJ[wc5rJ2TI[!ZymQ!@;nRD;6(lo-d)>a{q@Di%^ijh=]GN*jBIzUQj)]}+bYL' );
define( 'SECURE_AUTH_KEY',  'W{Xm]JN/2rgCNSiwMK~b@}H*TTRY_# Gw/k0. piOdKY.61;a$E(tR5:xX_Cv64m' );
define( 'LOGGED_IN_KEY',    '&>vh 0wJO!3o8T,K/jsox6o#jDeO.tPMj #Wj/P,na;DbnQ[5]|7{*:#fs?Xv`Pp' );
define( 'NONCE_KEY',        'Nl:$NB$C+6n=KFF%=$`JppvsXm:(3Qugq.#kxf{Q#Iv1>xO{^~f(o7sUN:%u`PG=' );
define( 'AUTH_SALT',        ',/~y3OPKPbM2MtoVJAt[TSyzdbq-9?MvhM7XZ&eiav`#0Y~_60Ust*G 2.OBg)sb' );
define( 'SECURE_AUTH_SALT', ')<}j)RrJt4<I#=BW7hOs5klD$a4;:dyMG6u%#i}3(u&;H:J=Rl;vi~b1[Xj>XVLm' );
define( 'LOGGED_IN_SALT',   'Q(WaFq,c)bv5g}#7l7N6SU59*6`K(@miGy*tiqiA-t|n/>+/eI$gJeW15BlsM2A]' );
define( 'NONCE_SALT',       'x%Ko{>L&Z9|i`B7eL2e2FqV.PZ2U6O$^kx]a=IQkSA56/%UwS7} Gdb;hsfu`AxG' );
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

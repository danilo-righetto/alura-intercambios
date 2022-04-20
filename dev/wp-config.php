<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wordpress' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'wordpress' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'mysql' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&qwE6?eH#*U$X!9(yv}V3TDzQ(k:K]p]*M:`Q=h*qc`oU[S`,ua.qRH_#BIM%G.9' );
define( 'SECURE_AUTH_KEY',  'd$g}ZD-N>T`[a%Xx-5QD2pZ5y%VpBjltsXj-OY>Wy#j!LE^l3/Qwgw_0(3tUPYEn' );
define( 'LOGGED_IN_KEY',    'd#]xlmdE#NVf6H;v`0E}mzGLCbb_! v@;6(RN?Oj 8>[L9BaA.i?E7vQmUC(`~z2' );
define( 'NONCE_KEY',        'bfI1KZD0/X5B5Pt}is4NHEKypS.a`qqhyOYe%cClW~X>|.,(-0|Gt2WA,a2$+xsN' );
define( 'AUTH_SALT',        'p/YTT}!Ne-Q~59SznO5syaz yMY=6oB{JTWA<M;7!kFvcJ(2ae;HKcFA_GF{FB6T' );
define( 'SECURE_AUTH_SALT', ']8>_P-,VW?|QixL-DZRXnt` >3cb3}!cD+BLp1CI]UHm6Z9;RVv1X`6>g}FWYk8v' );
define( 'LOGGED_IN_SALT',   'Zt_iI;cch$.g<jw5|l).aZ+Yt8:N^/.RgxJRfoFmcb0D.3PFU`g.Ng.^s $.yShP' );
define( 'NONCE_SALT',       '2J8%By2;a&G]&|+(p(eS?l`/GKcXRR../;E(qDifkL}9Duv-kTyXc]%7G#[^<VBF' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

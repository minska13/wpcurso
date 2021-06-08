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
define( 'DB_NAME', 'wpbanco' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '#!&+>1>2F!J0GDj{AFob1_+1cW$$jon3v)L-o:1<tZ9YO{Iqf%=|rV-Qs~x!Z(X0' );
define( 'SECURE_AUTH_KEY',  'DWSF[)z*gvnJ;yE`*u6ZXOD*MI;c0wcVz,ukF7,$!}-Pml}#($:_TZ7^f{+n!j%f' );
define( 'LOGGED_IN_KEY',    'g5dCSj.5/8u|NJKU0$;-<B7vO0m`fa&4#V|c@<-)dVk`VE/G1&HLpP7 S,8Hw{%L' );
define( 'NONCE_KEY',        ']?q2? ~I^=v9Ea?BTq%<2BW<}VJ@3lKC,ziQ!OB#-UKJF&S{Eja|aM75 m+8&m@m' );
define( 'AUTH_SALT',        'HsT5A@kAtT~`zdj_#ou*TC0xc^bb9A]+LTDM:?l6iXTtB;~PFOb)|8rUuM,;$/Y=' );
define( 'SECURE_AUTH_SALT', '1uO|tYFMPV&`/?%(ky >WiapKCca81r##3),4byhnj.4vr:{=cm;A`*#0oAF$w@m' );
define( 'LOGGED_IN_SALT',   '$iXHXP{bZ-HsZ+MU:4(0CiN*4[OAN)s;<WQlS7/P+akHP&OS/2N~9|SneNj&YRnr' );
define( 'NONCE_SALT',       '@ $:0tQo%#[Z 1Ls(Ss77KAs~5lU#GOkcG{as/tfLZbkSzCQgj#GAOxW}v^wX1Fm' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpcrs_';

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

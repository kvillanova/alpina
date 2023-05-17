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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

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
define('AUTH_KEY',         'A*^$GD%2P1TqD$0arp+e`;CmG&?#G3+BB2bfhyU]}v&tYL1#%QJ|GI;}A.7&#WsW');
define('SECURE_AUTH_KEY',  'pm RT$Sm9lk,:;j>H&F_$PH{dxdFI!YmS:0ri|p1w7o<~><>u!K9Fn86JR[}:j#_');
define('LOGGED_IN_KEY',    'srdTDy+>/<CCxgD(&%xX;O9=fn`R%k%XD*S$%+Nm>$j21lwy((b|3YR{nX %+;ZJ');
define('NONCE_KEY',        'B~69q 4P}w+Tg/EVb(Hv|$ufOzk%xmf+j{w-PYmTkJ/SY0O!@9>l,zXCsW0@s`;N');
define('AUTH_SALT',        '[/})${v58?V}`kf@Q1gC)>@c*hpuely%$+4&9Bakz;5fnQjF:+ol5PSPZn7[@A-Y');
define('SECURE_AUTH_SALT', 'P,#U/n!qF|Nlgxb6y/um@~ik[1p2p4iM5E<Lr9jq8l[ X!hRr +V~szHS?HVxQ/U');
define('LOGGED_IN_SALT',   'Y{0Hos-3gQz3F@xqf.&|BCGGJY!nM+%ep,1RAp,+&$tYtQMH%!|mZUIOt9BRWMd5');
define('NONCE_SALT',       '4chVCiSdaC?5ExEB~Y Zo(hGE=G {Pa$I-Ms <y+c!P-$D<8a7uc&Y_][%sUQa z');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'alpina_';

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

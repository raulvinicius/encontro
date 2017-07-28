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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'encontro');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '1234');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'H5i?muV7eknO$L#$q-h:F:wG6%ud&<AJj)17tcly<IuL`0OI1 kC*}N5+ @}H(a}');
define('SECURE_AUTH_KEY',  'SpNV%#7//58*0O5Vr7KvtXn=<ZPkXgzl;IH;)?yi3A7F7G1Kq&zEqO>oITp(gheB');
define('LOGGED_IN_KEY',    '9E/@{,L%*aeMdD8X9YK1O9l4,|@Hd*e+e;$16ltwJ`QQ*N*~xA|g%s)qUjuU+h.(');
define('NONCE_KEY',        '8U&$c(OK8vF{~@FdgSYWA)__yS#xQt)}l dbM2^llrZFOF7Fd&<xyAjm;H[I,*z]');
define('AUTH_SALT',        'CI[J}?aT0*WP549X;RDUXDQ8WUMH+D:Nc-~>_=KJIeEOo/r_J[GRh2?4W* fK9;W');
define('SECURE_AUTH_SALT', '!(3+ lL.jBE]Mk8rIXO5P[%%W 8mAOD%IT3GuOy)d:zJr71I*>`F)oX/@Y,@fRCa');
define('LOGGED_IN_SALT',   'cf1LgFl:B%E|a-chG7-d0J8P+WnY55=pn<%4<7g{w^,*MHR@U;j E;Xe/|cb;y=B');
define('NONCE_SALT',       'Jd7=W]A7,-NcncBt3`58?0_wc_$i;&j5_,Q^9^|wwS0_;$o/RQWYUioJ/QvAbgQw');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

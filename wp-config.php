<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'mon-db');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'mondelic');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'senha@db');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Qj2W%,R%,Q5/E>cJlyU@+Vw(S}<g;_Y&v.#MHVoBu`<Qp#6Eu}*;> -|_uC2 m7(');
define('SECURE_AUTH_KEY',  '8qhMW)T?x2BxDs;G8Kd!+Pu-|Bs)6?&xJ7#J@ a2cFW^??6h$-p*S<Mi+KvvkfLN');
define('LOGGED_IN_KEY',    'lQKIW{|IA<0qm7a&S0?V:u5`(P6<a^tRI2qcFufZE?n=|F|UvK`ge0h]BQ6Y6[$;');
define('NONCE_KEY',        '2n|ut0y|%K,`f;BHaZA~zR%^rfhip;?T*~#Zqg0_IQqrd`B^|E%7]FULzG[/?U}B');
define('AUTH_SALT',        '%z,]jb7eu|P{Haaa-]kl5P9LsNS}F:yRnj#^BMQ pp7;P1Iww8ulQfWz,>Uy++-2');
define('SECURE_AUTH_SALT', 'R9^0|fiPd}M/(QuhQ(#Hy!eVOE28+ktdae?0ykyYZ,VT{oo/m|P[%OfG-b%6iH6+');
define('LOGGED_IN_SALT',   'n;gdV8_uXKb~KR>,9vDlf#B>ad$L_vS]53Fg[-b?8I!&t2T-9KSU%B+Ffy7X74=d');
define('NONCE_SALT',       't-?h=_mVdw;5Nl}SI<I-Cl[}y J9?%_Eae0zZGQ% L_W.{`xdWDu<Y]GGt3I,:-M');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'mon_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

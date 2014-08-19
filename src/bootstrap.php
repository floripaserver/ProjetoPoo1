<?php
/**
 * diretorio do autoload
 */
define('DEFAULT_LOADER', '../../../vendor/autoload.php');
define('COMPOSER_LOADER', __DIR__ . '/../vendor/autoload.php');
/**
 * Define o nome da pasta dos arquivos principais do software.
 */
define('SRC', 'src');
/**
 * Define o nome da pasta publica
 */
define('WEBROOT', 'WebRoot');
/**
 * Define o nome da pasta base dos aplicativos
 */
define('APP', 'App');

/**
 * carregando classes
 */
if (file_exists(COMPOSER_LOADER)) {
    $loader = require COMPOSER_LOADER;
} else {
    if (!file_exists(DEFAULT_LOADER)) {
        
        echo 'Autoload não encontrado';
    } else {
        
        $loader = require_once DEFAULT_LOADER;
    }
}

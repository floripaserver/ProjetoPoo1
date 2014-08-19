<?php
//ini_set('display_errors', 1);
//ini_set('log_errors', 1);
//ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
//error_reporting(E_ALL);


require __DIR__ . '/src/bootstrap.php';

use Core\Start;
use Core\Rotas;

Start::header();

$rota = new Rotas();

$teste = $rota->run();

Start::rodape();
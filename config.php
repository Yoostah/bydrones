<?php
require 'environment.php';

$config = array();
if (ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/bydrones/");
	$config['dbname'] = 'yoosta74_bydronesapp';
	$config['host'] = 'br954.hostgator.com.br';
	$config['dbuser'] = 'yoosta74_thulio';
	$config['dbpass'] = 'Padrao998';
} else {
	define("BASE_URL", "http://meusite.com.br/");
	$config['dbname'] = 'classificados';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}

global $db;
try {
	$db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['dbuser'], $config['dbpass']);
} catch (PDOException $e) {
	echo "ERRO: " . $e->getMessage();
	exit;
}
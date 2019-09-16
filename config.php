<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost:8080/bydrones/");
	$config['dbname'] = 'yoosta74_bydronesapp';
	$config['host'] = 'br954.hostgator.com.br';
	$config['dbuser'] = 'yoosta74_thulio';
	$config['dbpass'] = 'Padrao998';
} else {
	define("BASE_URL", "http://localhost:8080/bydrones/");
	$config['dbname'] = 'yoosta74_bydronesapp';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}
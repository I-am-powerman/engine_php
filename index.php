<?php
$url = $_SERVER['REQUEST_URI'];
require_once('workDB.php');
require_once('/home/sky/Документы/Proekti/config.php');
$connect = connectDB(
	$host, 
	$port,
	$dbname, 
	$user,
	$password
	);


$route = '^/page/(?<country>[A-Za-z0-9_-]+)/(?<city>[A-Za-z0-9_-]+)$'; 
if (preg_match("#$route#", $url, $params)) {
	$page = include 'view/page/showInfSity.php';
}

$route = '^/page/(?<country>[A-Za-z0-9_-]+)$';
if (preg_match("#$route#", $url, $params)) {
	$page = include 'view/page/showAllSityCountry.php';
}

$route = '^/$';
if (preg_match("#$route#", $url, $params)) {
	$page = include 'view/page/showAllCountry.php';
}

if (!empty($page) && is_array($page)){
	$layout = file_get_contents('layout.php');
	$layout = str_replace('{{ title }}', 
		$page['title'], 
		$layout);
	$layout = str_replace('{{ content }}', 
		$page['content'], 
		$layout);

	echo $layout;
} else {
	var_dump($page);
}


	

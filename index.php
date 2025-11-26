<?php
$url = $_SERVER['REQUEST_URI'];
require_once('workDB.php');
require_once('config.php');
$connect = connectDB(
	$host, 
	$port,
	$dbname, 
	$user,
	$password
	);


if (preg_match('#^/page/([a-z0-9_-]+)$#', $url, $params)) {
	$page = include 'view/page/show.php';
}

if (preg_match('#^/page/all$#', $url, $params)) {
	$page = include 'view/page/all.php';
}

if (preg_match('#^/page/new_user([a-z0-9_-]{0,})$#', $url, $params)) {
	include('./view/page/new_user.php');
	die;
}

if(preg_match('#^/page/new_user\?new_user\=([A-Za-z0-9_-]{0,})$#', 
		$url, $params)){
			$page = include('./view/page/getUserBD.php');
		}

if ($page != null && is_array($page)){
	$layout = file_get_contents('layout.php');
	$layout = str_replace('{{ title }}', 
		$page['users'], 
		$layout);
	$layout = str_replace('{{ content }}', 
		$page['users'], 
		$layout);

	echo $layout;
}


	

<?php
$new_user   = $_GET['new_user'];
$queryNew  = "INSERT INTO users (slug, users) VALUES ('$new_user', '$new_user')"; 

$res = queryDB($connect, $queryNew);

header('Location:/page/all');

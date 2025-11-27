<?php
$slug   = $params['slug'];
$query  = "SELECT * FROM users 
    WHERE slug='$slug'"; 

$res = queryDB($connect, $query); 
$page   = pg_fetch_assoc($res);

return $page;
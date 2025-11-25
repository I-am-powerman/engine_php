<?php
$slug   = $params[1];
$query  = "SELECT * FROM pages 
    WHERE slug='$slug'"; 

$res = queryDB($connect, $query); 
$page   = pg_fetch_assoc($res);

return $page;
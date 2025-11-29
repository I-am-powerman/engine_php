<?php
$country = $params['country'];
$city = $params['city'];

$query = "SELECT citys.city AS city,
 country.country AS country, 
 citys.description AS description
    FROM citys
LEFT JOIN
    country ON country.id=citys.id_country
WHERE
    citys.city='$city' AND country.country='$country'";

$res = queryDB($connect, $query); 
$ifCity   = pg_fetch_assoc($res);
$page = [
    'title' => $ifCity['city'], 
    'content' => $ifCity['city'] . ' - ' . $ifCity['description']
];

return $page;

<?php
$country = $params['country'];

$query = "SELECT citys.city 
    FROM citys 
LEFT JOIN
    country ON country.id=citys.id_country
WHERE
    country.country='$country'";

$res = queryDB($connect, $query); 

for ($data = []; $row 
    = pg_fetch_assoc($res); 
    $data[] = 
    $row); 

$content = '';
foreach ($data as $city) {
    $content .= '
        <div>
            <a href="/page/' . $country . '/'  . $city['city'] . '">' . $city['city'] . '</a>
        </div>
    ';
}

$page = [
    'title' => 'список 
        городов в стране 
        ' . $country, 
    'content' => $content
];

return $page;
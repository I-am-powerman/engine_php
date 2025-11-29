<?php
	$query = "SELECT * FROM country"; 
	$res = queryDB($connect, $query); 
	
	for ($data = []; 
        $row = pg_fetch_assoc($res); 
		$data[] = $row); 
	
	$content = '';
	foreach ($data as $page) {
		$content .= '
			<div>
				<a href="/page/'  
					. $page['country'] 
					. '">' . 
					$page['country'] . '</a> 
			</div>
		';
	}
	
	$page = [
		'title' => 'all country',
		'content' => $content
	];
	
	return $page;
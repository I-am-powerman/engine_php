<?php
	$query = "SELECT slug, users FROM 
		users"; 
	$res = queryDB($connect, $query); 
	
	for ($data = []; 
        $row = pg_fetch_assoc($res); 
		$data[] = $row); 
	
	$content = '';
	foreach ($data as $page) {
		$content .= '
			<div>
				<a href="/page/'  
					. $page['slug'] 
					. '">' . 
					$page['users'] . '</a> 
			</div>
		';
	}
	
	$page = [
		'title' => 'all pages',
		'users' => $content
	];
	
	return $page;
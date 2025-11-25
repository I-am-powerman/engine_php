<?php
	$query = "SELECT slug, title FROM 
		pages"; 
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
					$page['title'] . '</a> 
			</div>
		';
	}
	
	$page = [
		'title' => 'all pages',
		'content' => $content
	];
	
	return $page;
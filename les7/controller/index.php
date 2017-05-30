<?php

	$articles = articles_all();
	
	$inner = template('index', [
		'articles' => $articles
	]);
?>
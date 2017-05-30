
<?php

	$articles = articles_all();
	
	$inner = template('index-quest', [
		'articles' => $articles
	]);
?>
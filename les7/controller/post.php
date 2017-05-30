<?php 

  $error404 = false;

	if(isset( $params[1]) && $params[1] !== '' && is_numeric($params[1]) ) {
       
        $article = get_one_article($params[1]);
        if($article  === false) {
          $error404 = true;
   		  }
	} else {
    	$error404 = true;
	}

  $inner = $error404 ? template('404') : template('post', [
    'article' => $article
  ]);
?>

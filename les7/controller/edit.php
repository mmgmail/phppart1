<?php 
    
  	$error404 = false;

   	if( isset($params['2']) == 'delete' ) 
   	{
   		delete_article($params['2']);
   		header("Location:".ROOT);
   	} else 
   	{
	   	if( isset($params[1]) && $params[1] != '' && is_numeric($params[1]) ) 
		{
	        $id = $params[1];
	        $article = get_one_article($id);
	        if($article == false) {
	        	$error404 = true;
	        }
	       
				if( isset($_POST['title']) && isset($_POST['text']) )
				{		
						$title = trim(htmlspecialchars($_POST['title']));
						$text = trim(htmlspecialchars($_POST['text']));
						
						if( checkFname($title) && !empty($title) && !empty($_POST['text']) )
					  	{	
					  		update_article($title, $text, $id);
						    header("Location:".ROOT);
					  	}

					  	elseif( !checkFname($_POST['title']) && !empty($_POST['title']) ) 
					  	{
					  		$msg = "The Name of title must be only latin letter or numbers";
					  	} 

					  	elseif( empty($_POST['title']) && !empty($_POST['text']) ) 
					  	{
							$msg = "Enter name of title";
					  	} 

					  	elseif( !empty($_POST['title']) && empty($_POST['text']) ) 
					  	{
							$msg = "Enter text of article";
					  	} 

					  	else
					  	{
							$msg = "Enter title and text";
				  	    }
				} else 
				{
					$msg = 'Edit article';
					$title = $article['title'];
					$text = $article['text'];
					$articleId = (int) $article['id'];
				}
				
		} 	else 
			{
				$error404 = true;
			}

		$inner = $error404 ? template('404') : template('edit', [
			'msg' => $msg,
			'title' => $title,
			'text' => $text,
			'articleId' => $articleId,
			'article' => $article
		]);
	}

?>
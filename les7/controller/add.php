<?php 

	$msg = '';

	if( isset($_POST['title']) && isset($_POST['text']) ) 
	{
		$title = trim(htmlspecialchars($_POST['title']));
		$text = trim(htmlspecialchars($_POST['text']));

			if( checkFname($title) && !empty($title) )
		  	{	
		  		$uniqueTitle = unique_title($title);
		  		if($uniqueTitle['cnt'] == 0) {
		  			$title = trim(htmlspecialchars($_POST['title']));
			  		$text = trim(htmlspecialchars($_POST['text']));
			  		add_article($title, $text);
			    
				    unset($_POST['title']);
				    unset($_POST['text']);
				    header("Location:". ROOT);
		  		} else {
		  			$msg = "This title already exists!. Enter another title";
		  		}
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
	} else {
		$title = '';
		$text = '';
	}

	$inner = template('add', [
		'title' => $title,
		'text' => $text,
		'msg' => $msg
	]);

?>
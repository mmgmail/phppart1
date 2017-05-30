	<ul class="collection">
	    <?php 
	  	foreach ($articles as $article) 
	  	{?>

	 		<li class="collection-item">
	 			<a href="post/<?=$article['id']?>"><?=$article['title'];?></a>
				<a href="edit/delete/<?=$article['id']?>" class="secondary-content">Delete</a>
				<a href="#!" class="secondary-content">---</a>
				<a href="edit/<?=$article['id']?>" class="secondary-content">Edit</a>
	 		</li>

	 	<?php
	 	}?>
    </ul>
    <a href="add" class="waves-effect waves-light btn">Add new Post</a>
	<ul class="collection">
	    <?php 
	  	foreach ($articles as $article) 
	  	{?>

	 		<li class="collection-item">
	 			<a href="post/<?=$article['id']?>"><?=$article['title'];?></a>
	 		</li>

	 	<?php
	 	}?>
    </ul>

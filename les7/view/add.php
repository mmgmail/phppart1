
    
    <blockquote><?=$msg;?></blockquote>
    
	<form action="" method="post">
	    <div class="row">
	        <div class="input-field col s6">
	          <input id="title" name="title" type="text" class="validate" value="<?=$title;?>">
	          <label for="title">Add title</label>
	        </div>
	    </div>
	    <div class="row">
        	<div class="input-field col s12">
	          <textarea id="textarea1" name="text" class="materialize-textarea"><?=$text;?></textarea>
	          <label for="textarea1">Add Text</label>
	        </div>
	    </div>
	    <button type="submit" class="waves-effect waves-light btn">Submit</button>
	</form>


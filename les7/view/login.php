<?php 
	if( !empty($_SESSION['error']) ) {
    	echo "<h5>".$_SESSION['error']."</h5>";
  	}
?>
	<form action="index.php?c=login" method="POST">
		<blockquote>
	      <h3>Login</h3>
	    </blockquote>
	    <div class="row">
	        <div class="input-field col s12">
	          <input id="password" type="text" name="name" class="validate" required>
	          <label for="password">Name</label>
	        </div>
	    </div>
		<div class="row">
	        <div class="input-field col s12">
	          <input id="password" type="password" name="pass" class="validate" required>
	          <label for="password">Password</label>
	        </div>
	    </div>
	    <p>
	      <input type="checkbox" id="test5" name="remember"/>
	      <label for="test5">Remeber me</label>
	    </p>
		<button class="waves-effect waves-light btn" type="submit">LOGIN</button>
		<a href="register">Register</a>
	</form>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" />
</head>
<body>
    <nav>
	    <div class="nav-wrapper">
	      <div class="container">
	      		<a href="<?=ROOT?>" class="brand-logo">Hello, <?=get_session_user()?></a>
		      	<ul id="nav-mobile" class="right hide-on-med-and-down">
		      		<?php 
		      		    if(isset($_SESSION["auth"])) {
		        			echo '<li><a href="logout">Logout</a></li>';
		        		} else {
		        			echo '<li><a href="login">Login</a></li>';
		        			echo '<li><a href="register">Registration</a></li>';
		        		}
		        	?>
		      	</ul>
	      </div>
	    </div>
 	</nav>
  <div class="container">
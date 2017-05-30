<?php

    $login = "";
	$pass = "";
	$msg = "";

    if(!empty($_POST['name']) && !empty($_POST['pass']) ) {
		$login = trim(htmlspecialchars($_POST['name']));
		$pass = trim(htmlspecialchars(my_crypt($_POST['pass'])));
		$uniqueUser = unique_user($login);
		$msg ="";
	    if($uniqueUser['cnt'] == 0) {
		    registration($login, $pass);
			unset($_POST['name']);
		    unset($_POST['pass']);
		    if(isset($_SESSION['error'])) {
				unset($_SESSION['error']);
			}
		    header("Location:".ROOT);
		} else {
		  	$msg = "User with this login already exits!";
		  	unset($_POST['name']);
		    unset($_POST['pass']);
		}
	}
    
    $inner = template('register', [
    	'login' => $login,
		'pass' => $pass,
		'msg' => $msg
    ]);

?>
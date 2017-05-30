<?php 

	$login = '';
	$pass = '';

	if( isset($_POST['remember']) ) {
		$remember = $_POST['remember'];
	} else {
		$remember = null;
	}
	
    if( !empty($_POST['name']) && !empty($_POST['pass']) ) {
		$login = trim(htmlspecialchars($_POST['name']));
		$pass = trim(htmlspecialchars(my_crypt($_POST['pass'])));
	
		if ( get_user($login, $pass) == false ) {
			$_SESSION['error'] = 'Incorect login or password';
			header('Location: login');
	    	exit();

		} else {
			if( $remember != null ) {
				remember($login, $pass);
			} else {
				login($login, $pass);
			}
			if(isset($_SESSION['error'])) {
				unset($_SESSION['error']);
			}
			header('Location:'.ROOT);
			exit();
		}
	}

	$inner = template('login', [
    	'login' => $login,
		'pass' => $pass,
		'remember' => $remember
    ]);
?> 
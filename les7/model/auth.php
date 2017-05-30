<?php
	include_once 'db.php';
	function isAuth() {
		if( !isset($_SESSION['auth'] )) {
			if(isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
				if(get_user($_COOKIE['login'], $_COOKIE['password'])) {
					$_SESSION['auth'] = $_COOKIE['login'];
					return true;
				}
			}
			return false;
		}
		return true;
	}

  	function my_crypt($str){
  		return hash('sha256', $str . '943ythit43w');
	}

	function get_user($login, $password) {
		$sql = "SELECT * FROM users WHERE login = :login AND password = :password";
		$params = ['login'=>$login, 'password'=>$password];
		$query = db_query($sql, $params);
		return $query->fetch();
	}

	function registration($login, $password) {
        $sql = "INSERT INTO users (login, password) VALUES (:login, :password)";
        $params = ['login' => $login, 'password' => $password];
	    db_query($sql, $params);
        return true;
	}

  	function unique_user($login) {
		$sql = "SELECT count(*) as cnt FROM users WHERE login = :login";
		$params = ['login' => $login];
	    $query = db_query($sql, $params);
	    return $query->fetch();
	}

  	function get_session_user() {
  		$sayHello = '';
  		if( isset($_SESSION["auth"]) ) {
  			$sayHello = $_SESSION["auth"];
  		} else {
  			$sayHello = ' Guest!';
  		}

  		return $sayHello;
	}

	function login($login, $password) {
		if($user = get_user($login, $password)) {
			$_SESSION["auth"] = $user['login'];
			return true;
		} else {
			return false;
		}
	}

	function remember($login, $password) {
		setcookie('login', $login, time() + 3600 * 24 * 365);
		setcookie('password', $password, time() + 3600 *24 *365);
		login($login, $password);
	}

	function logout() {
		unset($_SESSION['auth']);
		setcookie('login', time() - 1);
		setcookie('password', time() - 1);
		unset($_COOKIE['login']);
		unset($_COOKIE['password']);
	}

?>
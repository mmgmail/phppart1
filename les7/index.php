<?php
	session_start();
	include_once './model/config.php';
	include_once './model/functions.php';
	include_once './model/auth.php';
	include_once './model/system.php';
	$ctrlName = '';
    $params = explode('/', $_GET['c']);
    $params_cnt = count($params);
    
    if($params[$params_cnt - 1] == '') {
    	unset($params[$params_cnt - 1]);
    }

	if( !isAuth() ) {
		$ctrlName = isset($params[0]) ? $params[0] : 'form';
	} else {
		if(isset($_SESSION['error'])) {
			unset($_SESSION['error']);
		}
		$ctrlName = isset($params[0]) ? $params[0] : 'index';
	}

    $currTpl = 'controller/'.$ctrlName.'.php';
	if(file_exists($currTpl) && checkFname($ctrlName)) {
		include_once($currTpl);
	} else {
        $inner = template('404');
    }

	$html = template('main',[
		'content' => $inner
	]);

	echo $html;
?>
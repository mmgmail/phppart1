<?php
	
	function includeTpl($index) {
		$ctrlName = isset($_GET['c']) ? $_GET['c'] : $index;
		$inc = 'controller/'.$ctrlName.'.php';
        return $inc;
	}
    
    function template($path, $vars = []){
        extract($vars);
        ob_start();
        include("./view/$path.php");
        return ob_get_clean();
    }

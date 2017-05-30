<?php

    include_once 'db.php';
    include_once 'articles.php';

	function checkFname($fname){
	    return preg_match("/^[A-Za-z0-9\s]+$/i", $fname) > 0;
	}
?>
<?php
	if($_SERVER['REQUEST_URI'] == "" || strpos($_SERVER['REQUEST_URI'], "index.php") > -1) {
		return false;
	} else {
		if (strpos($_SERVER['REQUEST_URI'], '.php') > -1) {
			$file = $_SERVER['REQUEST_URI'];
		  header("Location: /index.php?page=".substr($file, 1, strlen($file)-5));
		} else {
			return false;
		}
	}
?>

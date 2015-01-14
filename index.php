<?php 
	// load the config file.
	require_once($_SERVER["DOCUMENT_ROOT"] . "/resources/config.php");
	require_once(LIBRARY_PATH . "/php/templateFunctions.php");

	$pages = json_decode(file_get_contents($config["paths"]["pages"]), true);
	$pagetitle = "main";

	if(isset($_GET["page"])) {
		$setInIndexDotPhp = "page set;";
		$pagetitle = $_GET["page"];
	} else {
		$setInIndexDotPhp = "page not set.";
	}

	if(!isset($pages[$pagetitle])){
		$pagetitle = "main";
	}

	//$setInIndexDotPhp = "Hey! I was set in the index.php file.";

	// Must pass in variables (as an array) to use in template
	$variables = array(
		'setInIndexDotPhp' => $setInIndexDotPhp
	);

	renderLayoutWithContentFile($pages[$pagetitle], $variables);
?>

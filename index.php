<?php 
	// load the config file.
	require_once($_SERVER["DOCUMENT_ROOT"] . "/resources/config.php");
	require_once(LIBRARY_PATH . "/php/templateFunctions.php");

	$page = json_decode(file_get_contents($config["paths"]["pages"]), true)["main"];

	$setInIndexDotPhp = "Hey! I was set in the index.php file.";

	// Must pass in variables (as an array) to use in template
	$variables = array(
		'setInIndexDotPhp' => $setInIndexDotPhp
	);

	renderLayoutWithContentFile($page, $variables);
?>

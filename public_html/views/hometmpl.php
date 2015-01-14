<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/resources/library/php/pageTypes.php");
  // You can use any variables set in index.php here.
  // echo $setInIndexDotPhp;

	// Homepage content
	echo "<h1>Home Page</h1>";
	echo "<h2>$setInIndexDotPhp</h2>";
	block_menu($_SERVER["DOCUMENT_ROOT"]."/public_html/json/menu-files/main-menu.json", 6);
?>


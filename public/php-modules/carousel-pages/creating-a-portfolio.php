<?php 
	$banking101pages = json_decode(file_get_contents("/assets/json/pages/banking-101/banking-101-menu-pages.json"), true);

	for($i = 0; $i < count($banking101pages); $i++) {
		echo "<div class='page' name='page".($i+1)."'>\n";
		$carouselpage = $banking101pages[$i];
		include("/src/php-modules/pieces/six-block-menu.php");
		echo "</div>\n";
	}
?>


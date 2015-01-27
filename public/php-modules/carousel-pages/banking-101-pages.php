
<?php 
	$banking101pages = json_decode(file_get_contents("/assets/json/pages/banking-101/banking-101-menu-pages.json"), true);

	for($i = 0; $i < count($banking101pages); $i++) {
		echo "<div class='page' name='page".($i+1)."'>\n";
		$carouselpage = $banking101pages[$i];
		include("/src/php-modules/pieces/six-block-menu.php");
		echo "</div>\n";
	}
?>
<!--
<div class="page" name="page1">
	<?php 
		// $carouselpage = "/assets/json/pages/banking-101/menu_item_banking101_page1.json";
		// include("/src/php-modules/pieces/six-block-menu.php"); 
	?>
</div>
<div class="page" name="page2">
	<?php
		// $carouselpage = "../json/main-page/menu_item_page2.json";
		// include("/src/php-modules/pieces/six-block-menu.php");
	?>
</div>
-->

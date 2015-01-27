<?php
	$folderscan = scandir($_SERVER["DOCUMENT_ROOT"] . "/resources/templates");
	
	$directories = array();
	foreach($folderscan as $fscan) {
		if(is_dir($_SERVER["DOCUMENT_ROOT"]."/resources/templates/".$fscan) && $fscan != "." && $fscan != ".."){
			$directories[$fscan] = scandir($_SERVER["DOCUMENT_ROOT"] . "/resources/templates/" . $fscan);
		}
	}

	function normal_dir($path) {
		if(is_dir($_SERVER["DOCUMENT_ROOT"].$path) && 
				substr($path, -2) != "/." && substr($path, -3) != "/.."){
			return true;
		}
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Add a New Page</title>
		<link rel="stylesheet" href="/public_html/css/utilities/add-page.css">
		<script src="/resources/library/js/jquery-1.11.1.js"></script>
		<script src="/public_html/js/utilites/add-page.js"></script>
	</head>
	<body>
		<!--
		<header>
			<h2>Create a New Page</h2>
		</header>
		-->

		<nav>
			<h1>Create a New Page</h1>
			<div class="tab templates">
				<ul class='nav-list'>
					<div class='line-break'></div>
					<?php
						foreach($directories as $dirname => $dir) {
							if(normal_dir("/resources/templates/" . $dirname)) {
								echo "<li class='pagelink' data-href='?page=$dirname'>";
								echo " $dirname<br>";
								foreach($dir as $subdir) {
									if(normal_dir("/resources/templates/".$dirname."/".$subdir)){
										echo " - $subdir<br>";
									}
								}
								echo "</li><div class='line-break'></div>"; 
							}
						}
					?>
				</ul>
			</div>
		</nav>

		<content>
			<div style="margin: 16px;">More things.</div>
		</content>

		<!--
		<footer>
			More stuff
		</footer>
		-->
	</body>
</html>


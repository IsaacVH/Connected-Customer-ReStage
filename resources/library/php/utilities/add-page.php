<?php

	$navitems = [
		["url" => "add-page.php?page=first", "title" => "First"],
		["url" => "add-page.php?page=second", "title" => "Second"]
	];

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Add a New Page</title>
		<link rel="stylesheet" href="/public_html/css/utilities/add-page.css">
		<script src="/public_html/js/utilites/add-page.js"></script>
	</head>
	<body>
		<!--
		<header>
			<h2>Create a New Page</h2>
		</header>
		-->
		<nav>
			<div class="tab" data-title="Pages">
				<ul class='nav-list'>
					<hr>
					<?php 
						foreach($navitems as $navitem) { 
							echo "<li><a href='".$navitem["url"]."''>".$navitem["title"]."</a></li><hr>"; 
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


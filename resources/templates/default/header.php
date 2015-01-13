<?php
	$template = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"]."/resources/templates/".$pagesetup["template"]."/data.json"), true)
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo $pagesetup["title"]; ?></title>

		<link rel='stylesheet' href='/resources/templates/global.css'>
		<?php 
			// The CSS block.
			foreach ($template['css'] as $tmplcss){ echo "<link rel='stylesheet' href='/resources/templates/".$pagesetup['template']."/css/".$tmplcss."'>"; }
			foreach ($modules as $module) { foreach($module["css"] as $modcss) { echo "<link rel='stylesheet' href='/public_html/css/modules/".$modcss."'>"; } }
			foreach ($pagesetup['css'] as $pagecss) { echo "<link rel='stylesheet' href='/public_html/css/pages/".$pagecss."'>"; }
		?>

		<script src="/resources/library/js/jquery-1.11.1.js"></script>
		<?php
			// The JS block.
			foreach ($template['js'] as $tmpljs){ echo "<script src='/resources/templates/".$pagesetup['template']."/js/".$tmpljs."'></script>"; }
			foreach ($modules as $module) { foreach($module["js"] as $modjs) { echo "<script src='/public_html/js/modules/".$modjs."'></script>"; } }
			foreach ($pagesetup['js'] as $pagejs) { echo "<script src='/public_html/js/pages/".$pagejs."'></script>"; }
		?>
	</head>

	<body>
		<div id="header">
			<div class="clock">
				<span class="date"></span>
				<span class="time">
					<span class="hourmin">0:00</span>
					<span class="am_pm">am</span>
				</span>
				<span class="dayofweek"></span>
			</div>
			<div class="separator"></div>
		</div>

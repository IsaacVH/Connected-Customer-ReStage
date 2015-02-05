<!DOCTYPE html>
<html>
	<head>
		<title>Connected Customer • {{ $data['title'] }}</title>
		<link rel='stylesheet' href='css/global.css'>
		<link rel='stylesheet' href='font/font-awesome-4.1.0/css/font-awesome.min.css'>
	</head>
	<body>
		{{ $data['header'] }}

		<div id="content">
			@yield('content')
		</div>

		{{ $data['footer'] }}

		{{ HTML::script('https://code.jquery.com/jquery-2.1.3.min.js') }}
		<script src='js/global.js'></script>
	</body>
</html>



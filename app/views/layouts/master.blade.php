<!DOCTYPE html>
<html>
	<head>
		<title>Connected Customer • {{ $data['title'] }}</title>
		{{ HTML::style('css/global.css') }}
		{{ HTML::style('font/font-awesome-4.1.0/css/font-awesome.min.css') }}
	</head>
	<body>
		{{ $data['header'] }}

		<div id="content">
			@yield('content')
		</div>

		{{ $data['footer'] }}

		{{ HTML::script('https://code.jquery.com/jquery-2.1.3.min.js') }}
		{{ HTML::script('js/global.js') }}
	</body>
</html>



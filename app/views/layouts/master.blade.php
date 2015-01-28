<!DOCTYPE html>
<html>
	<head>
		<title>Connected Customer • {{ $data['title'] }}</title>
		{{ HTML::style('css/global.css') }}
	</head>
	<body>
		{{ $data['header'] }}

		<div class="container">
			@yield('content')
		</div>

		{{ $data['footer'] }}

		{{ HTML::script('https://code.jquery.com/jquery-2.1.3.min.js') }}
		{{ HTML::script('js/global.js') }}
	</body>
</html>



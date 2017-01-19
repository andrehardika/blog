<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">
	@yield('header')
</head>
<body>

	<div class="container" id="app">
		@yield('content')		
	</div>

	<script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/article.js') }}"></script>
	@yield('footer')
</body>
</html>
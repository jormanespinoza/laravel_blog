<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Home') | Blog</title>
	<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png"/>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/paper/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/general.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
</head>
<body>

<header>
	@include('front.template.partials.header')
</header>

<div class="container">
	@yield('content')

	<footer>
		<hr>
		Todos los derechos reservados &copy; {{ date('Y') }}
		<div class="pull-right">
			Espinoza Dev
		</div>
	</footer>
</div>

<script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js') }}"></script>

</body>
</html>

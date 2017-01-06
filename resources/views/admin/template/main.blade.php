<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Administración</title>
	<link rel="stylesheet" href=" {{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
	<div class="container">	
		<!-- Add the navbar -->		
		@include('admin.template.partials.nav')
		<div class="panel panel-default">
			<div class="panel-heading">
				<!-- Assign the title´s page -->
				<h3 class="panel-title">@yield('title', 'Título')</h3>
			</div>
			<div class="panel-body">
				<!-- Allow the flash messages in the view -->
				@include('flash::message')
				<!-- Include the content in the view -->
				@include('admin.template..partials.errors')
				@yield('content')
			</div>
		</div>
		<!-- Add the footer -->						
		@include('admin.template.partials.footer')
	</div>
	<script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
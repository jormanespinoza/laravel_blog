<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Laravel Blog | @yield('title', 'Home')</title>
	<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png"/>	
	<link rel="stylesheet" href=" {{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href=" {{ asset('plugins/chosen/chosen.css') }}">	
	<link rel="stylesheet" href=" {{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">	
	<link rel="stylesheet" href=" {{ asset('plugins/bootstrap-fileinput/css/fileinput.min.css') }}">
	
</head>
<body>
	<div class="container">	
		<!-- Add the navbar -->		
		@include('admin.template.partials.nav')
		<div class="panel panel-default">
			<div class="panel-heading">
				<!-- Assign the title´s page -->
				<h3 class="panel-title">@yield('title', 'Home')</h3>
			</div>
			<div class="panel-body">
				<!-- Allow the flash messages in the view -->
				@include('flash::message')
				<!-- Include the content in the view -->
				@include('admin.template..partials.errors')
				<!-- Content -->
				@yield('content')			
			</div>
		</div>
		<!-- Add the footer -->						
		@include('admin.template.partials.footer')
	</div>

	<script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>	
	<script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap-fileinput/js/plugins/sortable.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap-fileinput/js/plugins/purify.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap-fileinput/js/fileinput.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap-fileinput/js/<lang>.js') }}"></script>

	<!-- Chosen Plugin -->
	@yield('js')	
	
</body>
</html>
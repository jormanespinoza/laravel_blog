@extends('front.template.main')

@section('content')
	<div class="jumbotron">
	  <h1>Laravel <small>Blog</small></h1>
	  <p>Versión 5.3</p>
	</div>

	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			@include('front.partials.aside')
		</div>
	</div>

	@if (Auth::guest())
		<hr>
		<div class="form-group text-center">
			<a href="{{ url('/login') }}" class="btn btn-primary">Acceder</a>
			<a href="{{ url('/register') }}" class="btn btn-success">Registrarse</a>
		</div>
	@endif
@endsection

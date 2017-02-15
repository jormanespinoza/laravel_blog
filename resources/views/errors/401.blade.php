@extends('admin.template.main')

@section('title', 'Acceso Denegado - 	No tiene acceso a esta zona')

@section('content')
	<div class="content">
		<div class="jumbotron">
			<h1>Laravel <small>Blog</small></h1>
			<p>Versión 5.3</p>
			<p>
				<a class="btn btn-primary btn-lg" href="{{ route('front.index') }}" role="button" target="_blank">Página Principal</a>
				<a class="btn btn-primary btn-lg" href="#info" role="button">Información</a>
			</p>
		</div>
	</div>
@endsection





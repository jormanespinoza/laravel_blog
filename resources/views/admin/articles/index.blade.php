@extends('admin.template.main')

@section('title', 'Listado de Artículos')

@section('content')
	<div class="form-group">
		<a href="{{ route('articles.create') }}" class="btn btn-primary">Agregar nuevo artículo</a>
		
		{!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

		<div class="input-group">
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar artículo', 'aria-describedby' => 'search']) !!}
			 <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>		
		</div>
	</div>
	<hr>
@endsection
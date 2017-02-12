@extends('admin.template.main')

@section('title', 'Listado de Artículos')

@section('content')
	<div class="form-group">
		<a href="{{ route('articles.create') }}" class="btn btn-primary">Agregar nuevo artículo</a>
		
		{!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

		<div class="input-group">
			{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar artículo', 'aria-describedby' => 'search']) !!}
			 <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>		
		</div>
	</div>
	<hr>
	<!-- List -->
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Título</th>
			<th>Categoría</th>
			<th>Usuario</th>
			<th>Acción</th>		
		</thead>	
		<tbody>
			@foreach($articles as $article)
				<tr>
					<td>{{ $article->id }}</td>
					<td>{{ $article->title }}</td>
					<td>{{ $article->category->name }}</td>
					<td>{{ $article->user->name }}</td>					
					<td>
						<a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
						<a href=" {{ route('admin.articles.destroy', $article->id) }}" onclick="return confirm('¿Está seguro de que desea eliminar el artículo?')" class="btn btn-danger" title="Eliminar"><span class="glyphicon glyphicon-remove-sign"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<!-- Create the pagination-->
	<div class="text-center">
		{!! $articles->render() !!}	
	</div>
@endsection

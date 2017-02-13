@extends('admin.template.main')

@section('title', 'Listado de Etiquetas')

@section('content')
	<div class="form-group">
		<a href="{{ route('tags.create') }}" class="btn btn-primary">Registrar nueva etiqueta</a>
		
		{!! Form::open(['route' => 'tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

		<div class="input-group">
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar etíqueta', 'aria-describedby' => 'search']) !!}
			 <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>		
		</div>

		{!! Form::close() !!}
	</div>
	<hr>
	<!-- List -->
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acción</th>		
		</thead>	
		<tbody>
			@foreach($tags as $tag)
				<tr>
					<td>{{ $tag->id }}</td>
					<td>{{ $tag->name }}</td>
					<td>
						<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
						<a href=" {{ route('admin.tags.destroy', $tag->id) }}" onclick="return confirm('¿Está seguro de que desea eliminar la etiqueta?')" class="btn btn-danger" title="Eliminar"><span class="glyphicon glyphicon-remove-sign"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<!-- Create the pagination-->
	<div class="text-center">
		{!! $tags->render() !!}	
	</div>
@endsection

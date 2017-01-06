@extends('admin.template.main')

@section('title', 'Listado de CategorÍas')

@section('content')

	<a href="{{ route('categories.create') }}" class="btn btn-primary">Registrar nueva categoría</a><hr>
	<!-- List -->
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acción</th>		
		</thead>	
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{ $category->id }}</td>
					<td>{{ $category->name }}</td>
					<td>
						<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning" title="Actualizar"><span class="glyphicon glyphicon-edit"></span></a>
						<a href=" {{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('¿Está seguro de que desea eliminar la categoría?')" class="btn btn-danger" title="Eliminar"><span class="glyphicon glyphicon-remove-sign"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<!-- Create the pagination-->
	<div class="text-center">
		{!! $categories->render() !!}	
	</div>
	
@endsection
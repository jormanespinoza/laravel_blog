@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')

	<a href="{{ route('users.create') }}" class="btn btn-primary">Registrar nuevo usuario</a><hr>
	<!-- Table -->
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Tipo</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>				
					<td>
						@if($user->type == 'admin')
							<span class="label label-danger">{{ $user->type }}</span>
						@else
							<span class="label label-info">{{ $user->type }}</span>
						@endif						
					</td>
					<td>
					<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning" title="Actualizar"><span class="glyphicon glyphicon-edit"></span></a>
					<a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Está seguro de que desea eliminar el usuario?')" class="btn btn-danger" title="Eliminar"><span class="glyphicon glyphicon-remove-sign"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<!-- Create the pagination-->
	<div class="text-center">
		{!! $users->render() !!}	
	</div>

@endsection
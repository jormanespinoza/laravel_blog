@extends('admin.template.main')

@section('title','Editar categoría ' . $category->name)

@section('content')

	<!-- Form starts -->	
	{!! Form::open(['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}

	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name', $category->name, ['class' => 'form-control', 'required']) !!}
	</div>

	<div class="form-group">		
		{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}

@endsection
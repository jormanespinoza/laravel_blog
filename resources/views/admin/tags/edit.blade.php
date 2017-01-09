@extends('admin.template.main')

@section('title','Editar etíqueta ' . $tag->name)

@section('content')

	<!-- Form starts -->	
	{!! Form::open(['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}

	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name', $tag->name, ['class' => 'form-control', 'required']) !!}
	</div>

	<div class="form-group">		
		{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}

@endsection
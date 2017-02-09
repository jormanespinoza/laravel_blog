@extends('admin.template.main')

@section('title', 'Agregar de Artículos')

@section('content')
	{!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files' => true]) !!}
		<div class="form-group">
			{!! Form::label('title', 'Título') !!}
			{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título del artículo','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category_id', 'Categoría') !!}
			{!! Form::select('category_id', $categories, null, ['class' => 'form-control select-category', 'placeholder' => 'Seleccione una opción', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('content', 'Contenido') !!}
			{!! Form::textarea('content', null, ['class' => 'form-contro textarea-content']) !!}
		</div>	

		<div class="form-group">
			{!! Form::label('tags', 'Etíquetas') !!}
			{!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag', 'multiple' ,'required']) !!}
		</div>	

		<div class="form-group">
			{!! Form::label('iamge', 'Imagen') !!}
			{!! Form::file('image', ['class' => 'file-upload']) !!}
		</div>

		<div class="form-group">		
			{!! Form::submit('Generar Artículo', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
	
@endsection

@section('js')
	<script type="text/javascript">
		// tags
		$('.select-tag').chosen({
			placeholder_text_multiple: 'Seleccione un máximo de 3 etiquetas',
			max_selected_options: 3,
			search_contains: true,
			no_results_text: "No se encontraron estas etiquetas",		
		});
		// category
		$('.select-category').chosen({						
			placeholder_text_single: "Seleccione una categoría"			
		});
		// textarea
		$('.textarea-content').trumbowyg({
    	lang: 'es',
		});
		// file upload
		$(".file-upload").fileinput({
			'showUpload':false, 
			'previewFileType':'any'
		});

	</script>
@endsection
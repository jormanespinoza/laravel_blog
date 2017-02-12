@extends('admin.template.main')

@section('title','Editar artículo - ' . $article->title)

@section('content')
	{!! Form::open(['route' => ['articles.update', $article], 'method' => 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('title', 'Título') !!}
			{!! Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Título del artículo','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category_id', 'Categoría') !!}
			{!! Form::select('category_id', $categories, $article->category->id, ['class' => 'form-control select-category', 'placeholder' => 'Seleccione una opción', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('content', 'Contenido') !!}
			{!! Form::textarea('content', $article->content, ['class' => 'form-contro textarea-content']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tags', 'Etíquetas') !!}
			{!! Form::select('tags[]', $tags, $article_tags, ['class' => 'form-control select-tag', 'multiple' ,'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
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
    	lang: 'es'
		});
		// file upload
		$(".file-upload").fileinput({
			'showUpload':false,
			'previewFileType':'any'
		});
	</script>
@endsection

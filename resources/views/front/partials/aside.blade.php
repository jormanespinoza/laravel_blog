@if (Auth::guest())
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Opciones de Usuario</h3>
		</div>

		<div class="panel-body">
			<div class="form-group text-center">
				<a href="{{ url('/login') }}" class="btn btn-primary">Acceder</a>
				<a href="{{ url('/register') }}" class="btn btn-success">Registrarse</a>
			</div>
		</div>
	</div>
@endif

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Categorías</h3>
	</div>
	<div class="panel-body">
		<ul class="list-group">
			@foreach($categories as $category)
				<li class="list-group-item">
					<span class="badge">{{ $category->articles->count() }}</span>
					<a href="{{ route('front.search.category', $category->name) }}">{{ $category->name }}</a>
				</li>
			@endforeach
		</ul>
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Etiquetas</h3>
	</div>

	<div class="panel-body">
		@foreach($tags as $tag)
			<a href="{{ route('front.search.tag', $tag->name) }}" class="tag-link">
				<span class="label label-default">{{ $tag->name }}</span>
			</a>
		@endforeach
	</div>
</div>

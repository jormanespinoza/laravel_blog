<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Opciones de Usuario</h3>
	</div>

	<div class="panel-body">
		@if (Auth::guest())
		<div class="form-group text-center">
			<a href="{{ url('/login') }}" class="btn btn-primary">Acceder</a>
			<a href="{{ url('/register') }}" class="btn btn-success">Registrarse</a>
		</div>
	@endif
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Categorías</h3>
	</div>
	<div class="panel-body">
		<ul class="list-group">

		</ul>
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Etiquetas</h3>
	</div>

	<div class="panel-body">

	</div>
</div>

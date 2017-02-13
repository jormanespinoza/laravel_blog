@extends('admin.template.main')

@section('title', 'Home')

@section('content')
	<div class="jumbotron">
	  <h1>Laravel <small>Blog</small></h1>
	  <p>Versión 5.3</p>
	  <p>
			<a class="btn btn-primary btn-lg" href="{{ route('front.index') }}" role="button" target="_blank">Página Principal</a>
			<a class="btn btn-primary btn-lg" href="#info" role="button">Información</a>
	  </p>
	</div>
	<div class="panel-body">
	    <p id="info">Proyecto de prueba generado por Jorman Espinoza, Desarrollador Web, ubicado en Caracas, Venezuela.</p>
	    <p>El proyecto simula o emula el funcionamiento de un blog, con las siguientes funcionalidades:</p>
	    <ul>
	    	<li>Manejo de Usuarios</li>
	    	<li>Manejo de Categorías</li>
	    	<li>Manejo de Artículos</li>
	    	<li>Manejo de Etiquetas</li>
	    	<li>Manejo de Imágenes</li>
	    </ul>
	     <p>Proyecto Realizado conn el Framework Laravel Versión 5.3</p>
	    <ul>
    </div>

    @if (Auth::guest())
    	<hr>
	    <div class="form-group text-center">
	    	<a href="{{ url('/login') }}" class="btn btn-primary">Acceder</a>
	    	<a href="{{ url('/register') }}" class="btn btn-success">Registrarse</a>
	    </div>
    @endif
@endsection

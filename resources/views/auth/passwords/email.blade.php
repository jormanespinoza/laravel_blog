@extends('admin.template.main')

@section('title', 'Recuperación de Contraseña')
<!-- Main Content -->
@section('content')
    <div class="container">
        <div class="row">        
            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>                
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Enviar enlace de reinicio
                            </button>
                        </div>
                    </div>
                </form>
            </div>           
        </div>
    </div>
@endsection

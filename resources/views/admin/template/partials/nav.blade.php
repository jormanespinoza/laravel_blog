<nav class="navbar navbar-default">
    <div class="container-fluid">  
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                Laravel Blog
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav"> 
                @if (!(Auth::guest()))
                    <li><a href="{{ route('admin.index') }}">Inicio</a></li>
                    @if (Auth::user()->type == 'admin')
                    		<li><a href="{{ route('users.index') }}">Usuarios</a></li>
                    @endif
                    <li><a href="{{ route('categories.index') }}">Categorías</a></li>
                    <li><a href="{{ route('articles.index') }}">Artículos</a></li>
                    <li><a href="{{ route('admin.images.index') }}">Imágenes</a></li>
                    <li><a href="{{ route('tags.index') }}">Etiquetas</a></li>
                @endif      
            </ul>  
            <ul class="nav navbar-nav navbar-right"> 
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Ingresar</a></li>
                    <li><a href="{{ url('/register') }}">Registrarse</a></li>
                @else                   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                             <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Cerrar Sesión
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            </li>                           
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

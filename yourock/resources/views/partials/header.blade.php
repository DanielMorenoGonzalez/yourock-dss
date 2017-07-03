<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">YOU ROCK!</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ action('CategoriesController@index') }}">Categorías</a></li>
            <li><a href="{{ route('aboutus') }}">Sobre nosotros</a><li>
            <li><a href="{{ route('contact') }}">Contacto</a></li>
        </ul>
        <form class="navbar-form navbar-left">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
                <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Regístrate</a></li>
                <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>Iniciar sesión</a></li>
            @else
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

                <li class="dropdown">
                    <a id="menuusuario" href="#" class="dropdown-toggle" data-target="#" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                        <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%;">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu" aria-labelledby="menuusuario">
                        <li><a href="{{ action('UsersController@show') }}">Mi perfil</a></li>
                        <li><a href="{{ action('OrdersController@index') }}">Mis pedidos</a></li>
                                
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
                <li><a href="{{ action('OrderlinesController@index') }}"><span class="glyphicon glyphicon-shopping-cart"></span>Carrito<span class="badge">{{Session::has('order') ? Session::get('quantity') : ''}}</span></a></li>
        </ul>
    </div>
</nav>
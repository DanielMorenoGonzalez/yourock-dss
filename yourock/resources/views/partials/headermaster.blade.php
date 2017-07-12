<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">YOU ROCK!</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ action('UsersController@adminHome') }}">Dashboard</a></li>
        </ul>
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
                        <li><a href="{{ action('UsersController@showProfileAdmin') }}"><span class="glyphicon glyphicon-user"></span> Mi perfil</a></li>

                         <li class="divider">       
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</nav>
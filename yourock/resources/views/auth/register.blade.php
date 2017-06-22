<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Daniel Moreno González">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('logo.ico')}}" rel="shortcut icon" type="image/x-icon">
        <link href="{{asset('css/estilopaginaprincipal.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <title>YOU ROCK! - Home</title>
    </head>
    <body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ action('HomeController@index') }}">YOU ROCK!</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="#">Productos</a></li>
                    <li><a href="{{ action('ContactController@index') }}">Contacto</a></li>
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
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span>Regístrate</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Iniciar sesión</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Carrito</a></li>
                </ul>
            </div>
        </nav>
    </header> 

        <h1>Página registro</h1>
        <div class="container">
            <h2>Horizontal form</h2>
            <form class="form-horizontal" action="/action_page.php">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nif">NIF:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nif" placeholder="Introduce tu nif" name="nif">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Nombre:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Introduce tu nombre" name="name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="surname">Apellidos:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="surname" placeholder="Introduce tus apellidos" name="surname">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="phoneNumber">Teléfono:</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="phoneNumber" placeholder="Introduce tu teléfono" name="phoneNumber">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="nif">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Introduce tu email" name="email">
                    </div>
                </div>

                <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
                    <div class="col-sm-10">          
                        <input type="password" class="form-control" id="pwd" placeholder="Introduce tu contraseña" name="pwd">
                    </div>
                </div>

                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
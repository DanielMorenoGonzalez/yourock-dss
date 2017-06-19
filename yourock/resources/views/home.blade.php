<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Daniel Moreno González">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('favicon.ico')}}" rel="shortcut icon" type="image/x-icon">
        <link href="{{asset('css/estilopaginaprincipal.css')}}" rel="stylesheet">
        <title>YOU ROCK! - Home</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">YOU ROCK!</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('categories') }}">Home</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>Regístrate</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Iniciar sesión</a></li>
            </ul>
        </div>
        </nav> 

        <h2>Categoría <?php echo $category; ?></h2>
        @foreach ($instruments as $instrument)
            <p>Instrumento: {{ $instrument->name }}</p>
        @endforeach

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>


    </body>
</html>

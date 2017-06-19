<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Daniel Moreno González">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <title>YOU ROCK! - Home</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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

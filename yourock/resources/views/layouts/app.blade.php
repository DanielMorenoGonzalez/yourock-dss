<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Daniel Moreno González">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('style')

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('logo.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('css/estilopaginaprincipal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<body>

@include('partials.header')

<div class="container">
    @yield('content')
</div>

<div id="map">
    @yield('contentmap')
</div>

<!-- Footer -->
<footer id="footer">
    <ul class="icons">
        <li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
		<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
		<li><a href="https://plus.google.com/+DanyMorenoG94" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
		<li><a href="https://github.com/DanielMorenoGonzalez/" class="icon circle fa-github" target="_blank"><span class="label">Github</span></a></li>
	</ul>

	<ul class="copyright">
	    <li>&copy; YOU ROCK!</li><li>Play music wherever</li>
	</ul>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/ciudadesyprovincias.js') }}" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
@yield('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDo7Ilzab6ON5D9MNDGdxDAWbpZzZ3sQQg&callback=initMap" async defer></script>

</body>
</html>
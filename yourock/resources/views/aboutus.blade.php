@extends('layouts.app')
@section('title', 'YOU ROCK! - Sobre nosotros')
@section('style')
<style>
    /* Always set the map height explicitly to define the size of the div
    * element that contains the map. */
    #map {
        height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 70%;
        margin: 0;
        padding: 0;
    }
</style>
@endsection
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li class="active">Sobre nosotros</li>
</ol>
<h1>Página sobre nosotros</h1>
<p>El 21 de mayo de 2017 abrimos las puertas de YOU ROCK!</p><br/>
<p>Nuestro equipo se compone de:</p>
<p><strong>Javier</strong>: Responsable de las guitarras eléctricas.</p>
<p><strong>Lola</strong>: Responsable de los bajos acústicos.</p>
<p><strong>Dani</strong>: Responsable de las baterías acústicas y electrónicas.</p>
<p><strong>Adela</strong>: Responsable de los pianos de cola y teclados.</p><br/>
<p>Nos encontramos en <span class="glyphicon glyphicon-road"></span> <strong>Calle Ancha de Castelar nº 41, San Vicente del Raspeig (Alicante)</strong></p>
<script>
    var map;
    function initMap() {
        var myLatLng = {
            lat: 38.395910, 
            lng: -0.521512
        };

        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 15
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            animation: google.maps.Animation.DROP,
            title: 'YOU ROCK!'
        });
    }
</script>
@endsection
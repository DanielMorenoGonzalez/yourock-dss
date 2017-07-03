@extends('layouts.app')
@section('title', 'YOU ROCK! - Instrumentos de la categoría')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}">Home</a></li>
  <li><a href="{{ route('categories') }}">Categorías</a></li>
  <li class="active">{{ $category->name }}</li>
</ol>
<h2>Categoría {{ $category->name }}</h2>
<h4>{{ $category->description }}</h4>
<br/>

<p>Se han encontrado {{ $instruments->total() }} resultados en total</p>
<p>Mostrando {{ $instruments->count() }} instrumentos en esta página</p>
@foreach ($instruments as $instrument)
    <p><a href="{{ action('InstrumentsController@show', [$instrument->id]) }}">Instrumento: {{ $instrument->name }}</a></p>
@endforeach

{{ $instruments->links() }}

@endsection
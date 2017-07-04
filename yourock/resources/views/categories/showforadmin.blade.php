@extends('layouts.master')
@section('title', 'YOU ROCK! - Categoría')
@section('content')
<h2>Categoría {{ $category->name }}</h2>
<h4>{{ $category->description }}</h4>
<br/>

@if($instruments->total() != 0)
    @if($instruments->total() == 1)
        <p>Existe {{ $instruments->total() }} instrumento que pertenecen a esta categoría</p>
    @else
        <p>Existen {{ $instruments->total() }} instrumentos que pertenecen a esta categoría</p>
    @endif 
    @foreach ($instruments as $instrument)
        <p>Instrumento: {{ $instrument->name }}. <a href="{{ action('InstrumentsController@showDetails', [$instrument->id]) }}">Más detalles</a></p>
    @endforeach
    <p><a href="{{ action('CategoriesController@edit', [$category]) }}">Añadir instrumento a esta categoría</a></p>
@else
    <p>Todavía no existen instrumentos asociados a esta categoría. <a href="{{ action('CategoriesController@edit', [$category]) }}">Añadir ahora</a></p>
@endif

{{ $instruments->links() }}

@endsection
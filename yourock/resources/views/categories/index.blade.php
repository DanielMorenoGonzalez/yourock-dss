@extends('layouts.app')
@section('title', 'YOU ROCK! - Categorías')
@section('content')
@foreach ($categories as $category)
<div class="container">
    <p><a href="{{ action('CategoriesController@show', [$category->id]) }}">Categoría: {{ $category->name }}</a></p>
    @foreach($category->instruments->take(3) as $instrument)
        <p><a href="{{ action('InstrumentsController@show', [$instrument->id]) }}">{{ $instrument->name }}</a></p>
    @endforeach
    <p><a href="{{ action('CategoriesController@show', [$category->id]) }}">Ver más...</a></p>
</div>
<br/>
@endforeach
@endsection
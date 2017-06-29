@extends('layouts.app')
@section('title', 'YOU ROCK! - Categorías')
@section('content')
@foreach ($categories as $category)
<div class="container">
    <p><a href="{{ action('CategoriesController@show', [$category->id]) }}">Categoría: {{ $category->name }}</a></p>
    @foreach($category->instruments as $instrument)
        <p>Instrumento {{$instrument->name}}</p>
    @endforeach
</div>
@endforeach
@endsection
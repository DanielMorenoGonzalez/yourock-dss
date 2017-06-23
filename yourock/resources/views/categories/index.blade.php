@extends('layouts.app')
@section('title', 'YOU ROCK! - Categorías')
@section('content')
@foreach ($categories as $category)
    <p><a href="{{ action('CategoriesController@show', [$category->id]) }}">Categoría: {{ $category->name }}</a></p>
@endforeach
@endsection
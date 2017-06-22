@extends('layouts.app')

@section('content')
@foreach ($categories as $category)
    <p><a href="{{ action('CategoriesController@show', [$category->id]) }}">Categoría: {{ $category->name }}</a></p>
@endforeach
@endsection
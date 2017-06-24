@extends('layouts.app')
@section('title', 'YOU ROCK! - Descripción')
@section('content')
<h1>Instrumentos encontrados</h1>
@if($instruments->total() == 0)
    <p>No se han encontrado resultados</p>
@else
    @foreach ($instruments as $instrument)
        <p>Instrumento {{ $instrument->name }}</p>
    @endforeach
@endif
@endsection
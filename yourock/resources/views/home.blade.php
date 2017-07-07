@extends('layouts.app')
@section('title', 'YOU ROCK! - Home')
@section('content')
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session()->get('success') }}
    </div>
@endif
@if (session()->has('myuser'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session()->get('myuser') }}
    </div>
@endif
<h1>Página home</h1>
@endsection

@extends('layouts.app')
@section('title', 'YOU ROCK! - Home')
@section('content')
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('success') }}</strong>
    </div>
@endif
@if (session()->has('myuser'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('myuser') }}</strong>
    </div>
@endif
<h1>Página home</h1>
@endsection

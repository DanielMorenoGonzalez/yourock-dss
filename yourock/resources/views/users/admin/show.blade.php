@extends('layouts.master')
@section('title', 'YOU ROCK! - Perfil de usuario')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}">Home</a></li>
  <li class="active">Mi perfil</li>
</ol>
<div class="container">
@if (session()->has('message'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session()->get('message') }}
    </div>
@endif
<h1>Perfil de usuario</h1>
<img src="/uploads/avatars/{{$user->avatar}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
</div>
<p>NIF: {{ $user->nif }}</p>
<p>Nombre: {{ $user->name }}</p>
<p>Apellidos: {{ $user->surname }}</p>
<p>Título profesional: {{ $user->job_title }}</p>
<p>Teléfono: {{ $user->phoneNumber }}</p>
<p>Email: {{ $user->email }}</p>
<a href="{{ action('UsersController@edit') }}" class="btn btn-default" role="button">Editar perfil</a>
@endsection
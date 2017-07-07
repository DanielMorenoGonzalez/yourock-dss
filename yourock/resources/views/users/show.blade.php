@extends('layouts.master')
@section('title', 'YOU ROCK! - Usuario')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}">Home</a></li>
  <li><a href="{{ route('users.index') }}">Usuarios</a></li>
  <li class="active">"{{ $user->name }} {{ $user->surname }}"</li>
</ol>
<div class="container">
<h1>Perfil de usuario</h1>
<img src="/uploads/avatars/{{$user->avatar}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
</div>
<p>NIF: {{ $user->nif }}</p>
<p>Nombre: {{ $user->name }}</p>
<p>Apellidos: {{ $user->surname }}</p>
@if($user->address)
    <p>Dirección: {{ $user->address }}</p>
@endif
@if($user->province)
    <p>Provincia: {{ $user->province }}</p>
@endif
@if($user->city)
    <p>Ciudad: {{ $user->city }}</p>
@endif
@if($user->zipCode)
    <p>Código postal: {{ $user->zipCode }}</p>
@endif
@if($user->job_title)
    <p>Título profesional: {{ $user->job_title }}</p>
@endif
<p>Teléfono: {{ $user->phoneNumber }}</p>
<p>Email: {{ $user->email }}</p>
@endsection
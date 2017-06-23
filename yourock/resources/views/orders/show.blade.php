@extends('layouts.app')
@section('title', 'YOU ROCK! - Carrito de la compra')
@section('content')
<h1>Carrito de la compra</h1>
<p>{{ $user->name }}</p>
<p>{{ $user->surname }}</p>
<p>{{ $user->address }}</p>
<p>{{ $user->city }}</p>
<p>{{ $user->province }}</p>
<p>{{ $user->zipCode }}</p>
<p>{{ $user->phoneNumber }}</p>
<p>{{ $user->email }}</p>
<li><a href="{{ action('UsersController@edit') }}">Editar perfil</a></li>
<li><a href="{{ action('UsersController@destroy', [$user->id]) }}">Darse de baja</a></li>
</script>
@endsection
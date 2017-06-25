@extends('layouts.app')
@section('title', 'YOU ROCK! - Perfil de usuario')
@section('content')
<h1>Perfil de usuario</h1>
<p>{{ $user->name }}</p>
<p>{{ $user->surname }}</p>
<p>{{ $user->address }}</p>
<p>{{ $user->city }}</p>
<p>{{ $user->province }}</p>
<p>{{ $user->zipCode }}</p>
<p>{{ $user->phoneNumber }}</p>
<p>{{ $user->email }}</p>
<li><a href="{{ action('CustomersController@edit') }}">Editar perfil</a></li>
<li><a href="{{ action('CustomersController@destroy', [$user->id]) }}">Darse de baja</a></li>
</script>
@endsection
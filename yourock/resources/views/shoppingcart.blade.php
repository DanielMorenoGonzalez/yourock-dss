@extends('layouts.app')
@section('title', 'YOU ROCK! - Home')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}">Home</a></li>
  <li class="active">Carrito</li>
</ol>
@if (session()->has('nostock'))
    <div class="alert alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session()->get('nostock') }}
    </div>
@endif
@if (Session::has('order'))
@foreach(Session::get('order') as $order)
    <p>{{ $order[0] }}</p>
@endforeach
@else
    <p>El carrito de la compra está vacío :(</p>
@endif
<h1>Página carrito de la compra</h1>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Carrito de la compra</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="#">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <a href="{{ route('checkout') }} "type="submit" class="btn btn-primary">
                                    Comprar
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
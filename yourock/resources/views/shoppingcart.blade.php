@extends('layouts.app')
@section('title', 'YOU ROCK! - Home')
@section('content')
@if (session()->has('itemadded'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('itemadded') }}</strong>
    </div>
@endif
@if (Session::has('order'))
@foreach(Session::get('order') as $order)
    <p>{{ $order[0] }}</p>
@endforeach
@else
    <p>Hola</p>
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
                                <button type="submit" class="btn btn-primary">
                                    Comprar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
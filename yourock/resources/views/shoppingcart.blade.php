@extends('layouts.app')
@section('title', 'YOU ROCK! - Carrito')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li class="active">Carrito</li>
</ol>
@if (session()->has('nostock'))
    <div class="alert alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session()->get('nostock') }}
    </div>
@endif
<h1>Carrito de la compra</h1>
@if (Session::has('order'))
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Instrumentos en el carrito</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="#">
                        {{ csrf_field() }}
                        <div class="table-responsive">           
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>Instrumento</th>
                                    <th>Cantidad</th>
                                    <th>Precio total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(Session::get('order') as $order)
                                    <tr>
                                        <td><a href="{{ action('InstrumentsController@show', [$order[0]->instrument->id]) }}">{{ $order[0]->instrument->name }}</a></td>
                                        <td>{{ $order[0]->quantity }}</td>
                                        <td>{{ $order[0]->getSubtotal() }}€</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <label class="col-md-2 col-md-offset-9">Total: {{ $total }}€</label>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-9">
                                <a href="{{ route('checkout') }} "type="submit" class="btn btn-warning">
                                    Ir a caja
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@else
    <p>El carrito de la compra está vacío :(</p>
@endif

@endsection
@extends('layouts.app')
@section('title', 'YOU ROCK! - Home')
@section('content')
<h1>Página carrito de la compra</h1>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Carrito de la compra</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <a href="#" type="button" class="btn btn-success">
                                    Checkout
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')
@section('title', 'YOU ROCK! - Contacto')
@section('content')
@if (session()->has('message'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('message') }}</strong>
    </div>
@endif
<h1>Página de contacto</h1>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contacta con nosotros</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ action('ContactController@postContact') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Escribe tu email" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                            <label for="subject" class="col-md-4 control-label">Asunto:</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}" placeholder="Escribe el asunto" required>

                                @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  

                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="message" class="col-md-4 control-label">Mensaje:</label>

                            <div class="col-md-6">
                                <textarea id="message" type="text" class="form-control" name="message" value="{{ old('message') }}" placeholder="Escribe el mensaje" rows="5" required></textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>     

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

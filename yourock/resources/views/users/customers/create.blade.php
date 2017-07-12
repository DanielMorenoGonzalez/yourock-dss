@extends('layouts.master')
@section('title', 'YOU ROCK! - Añadir cliente')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a href="{{ route('users.index') }}">Usuarios</a></li>
  <li class="active">Añadir cliente</li>
</ol>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Añadir un nuevo cliente</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ action('UsersController@storeCustomer') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nif') ? ' has-error' : '' }}">
                            <label for="nif" class="col-md-4 control-label">NIF:</label>

                            <div class="col-md-6">
                                <input id="nif" type="text" class="form-control" name="nif" value="{{ old('nif') }}">

                                @if ($errors->has('nif'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nif') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label">Apellidos:</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}">

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Dirección:</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}">

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('province') ? ' has-error' : '' }}">
                            <label for="province" class="col-md-4 control-label">Provincia:</label>

                            <div class="col-md-6">
                                <select id="province" class="form-control" name="province" onchange="makeSubmenu(this.value)" required>
                                    <option></option>
                                    <option>Albacete</option>
                                    <option>Alicante</option>
                                    <option>Almería</option>
                                    <option>Álava</option>
                                    <option>Asturias</option>
                                    <option>Ávila</option>
                                    <option>Badajoz</option>
                                    <option>Barcelona</option>
                                    <option>Bizkaia</option>
                                    <option>Burgos</option>
                                    <option>Cáceres</option>
                                    <option>Cádiz</option>
                                    <option>Cantabria</option>
                                    <option>Castellón</option>
                                    <option>Ciudad Real</option>
                                    <option>Córdoba</option>
                                    <option>Coruña</option>
                                    <option>Cuenca</option>
                                    <option>Guipúzcoa</option>
                                    <option>Gerona</option>
                                    <option>Granada</option>
                                    <option>Guadalajara</option>
                                    <option>Huelva</option>
                                    <option>Islas Baleares</option>
                                    <option>Jaén</option>
                                    <option>La Rioja</option>
                                    <option>Las Palmas de Gran Canaria</option>
                                    <option>León</option>
                                    <option>Lérida</option>
                                    <option>Lugo</option>
                                    <option>Madrid</option>
                                    <option>Málaga</option>
                                    <option>Murcia</option>
                                    <option>Navarra</option>
                                    <option>Orense</option>
                                    <option>Palencia</option>
                                    <option>Pontevedra</option>
                                    <option>Salamanca</option>
                                    <option>Santa Cruz de Tenerife</option>
                                    <option>Segovia</option>
                                    <option>Sevilla</option>
                                    <option>Soria</option>
                                    <option>Tarragona</option>
                                    <option>Teruel</option>
                                    <option>Toledo</option>
                                    <option>Valencia</option>
                                    <option>Valladolid</option>
                                    <option>Zamora</option>
                                    <option>Zaragoza</option>
                                </select>

                                @if ($errors->has('province'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('province') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">Ciudad:</label>

                            <div class="col-md-6">
                                <select id="city" class="form-control" name="city">
                                    <option></option>
                                </select>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('zipCode') ? ' has-error' : '' }}">
                            <label for="zipCode" class="col-md-4 control-label">Código postal:</label>

                            <div class="col-md-6">
                                <input id="zipCode" type="text" class="form-control" name="zipCode" value="{{ old('zipCode') }}">

                                @if ($errors->has('zipCode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zipCode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phoneNumber') ? ' has-error' : '' }}">
                            <label for="phoneNumber" class="col-md-4 control-label">Teléfono:</label>

                            <div class="col-md-6">
                                <input id="phoneNumber" type="tel" class="form-control" name="phoneNumber" value="{{ old('phoneNumber') }}">

                                @if ($errors->has('phoneNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña:</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Añadir
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
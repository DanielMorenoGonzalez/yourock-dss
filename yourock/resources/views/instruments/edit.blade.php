@extends('layouts.master')
@section('title', 'YOU ROCK! - Editar instrumento')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a href="{{ route('instruments.index') }}">Instrumentos</a></li>
  <li class="active">Editar "{{$instrument->name}}"</li>
</ol>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar información del instrumento</div>
                <div class="panel-body">
                    <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ action('InstrumentsController@update', [$instrument]) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre:</label>

                            <div class="col-md-6">
                                <input id="nif" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="{{ $instrument->name }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Descripción:</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="{{ $instrument->description }}" rows="6"></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Categoría:</label>

                            <div class="col-md-6">
                                <select id="category" class="form-control" name="category">
                                @if(!$category)
                                    <option value="" disabled selected style="display: none;"></option>
                                @else
                                    <option value="" disabled selected style="display: none;">{{ $category->name }}</option>
                                @endif 
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Precio:</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="{{ $instrument->price }}">

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
                            <label for="stock" class="col-md-4 control-label">Stock:</label>

                            <div class="col-md-6">
                                <input id="stock" type="text" class="form-control" name="stock" value="{{ old('stock') }}" placeholder="{{ $instrument->stock }}">

                                @if ($errors->has('stock'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stock') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('urlPhoto') ? ' has-error' : '' }}">
                            <label for="urlPhoto" class="col-md-4 control-label">URL Foto:</label>

                            <div class="col-md-6">
                                <input id="urlPhoto" type="text" class="form-control" name="urlPhoto" value="{{ old('urlPhoto') }}" placeholder="{{ $instrument->urlPhoto }}">

                                @if ($errors->has('urlPhoto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('urlPhoto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('manufacturer') ? ' has-error' : '' }}">
                            <label for="manufacturer" class="col-md-4 control-label">Fabricante:</label>

                            <div class="col-md-6">
                                <input id="manufacturer" type="text" class="form-control" name="manufacturer" value="{{ old('manufacturer') }}" placeholder="{{ $instrument->manufacturer }}">

                                @if ($errors->has('manufacturer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('manufacturer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.master')
@section('title', 'YOU ROCK! - Editar categoría')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}">Home</a></li>
  <li><a href="{{ route('categoriesadmin') }}">Categorías</a></li>
  <li class="active">Editar "{{ $category->name }}"</li>
</ol>
<h1>Editar categoría</h1>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar información de la categoría</div>
                <div class="panel-body">
                    <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ action('CategoriesController@update', [$category]) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre:</label>

                            <div class="col-md-6">
                                <input id="nif" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="{{ $category->name }}">

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
                                <textarea id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="{{ $category->description }}" rows="6"></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('instrument') ? ' has-error' : '' }}">
                            <label for="instrument" class="col-md-4 control-label">Añadir instrumento a la categoría:</label>

                            <div class="col-md-6">
                                <select id="instrument" class="form-control" name="instrument">
                                    <option value=""></option>
                                    @foreach($instruments as $instrument)
                                        <option value="{{ $instrument->id }}">{{ $instrument->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('instrument'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('instrument') }}</strong>
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
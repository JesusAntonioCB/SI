@extends('layouts.admin')
@section('contenido')
    <div class="card">
      <div class="header">
        <h2>Registrar Nuevo Grupo</h2>
      </div>
    </div>
    {!!Form::model($grupos,[
      'method' => 'PATCH',
      'route' => ['Grupos.update',$grupos->id
      ]]) !!}
<div class="card">
  <div class="body card-body">
    <h2 class="card-inside-title">
      NUEVO GRUPO
    </h2>
    <div class="row clearfix">
      <div class="col-md-6">
        <div class="form-goup">
          <div class="form-line">
            <label>Nombre del Grupo</label>
            <input class="form-group" type="text" name="ngrupo" placeholder="Nombre del Grupo" value="{{$grupos->grupos}}">
          </div>
          <div class="form-line">
            <label>Turno</label>
            <select class="form-control"  name="turno">
              <option selected="selected" value="{{$grupos->turno}}">Turno {{$grupos->turno}}</option>
              <option value="Nocturno">Turno Nocturno</option>
              <option value="Matutino">Turno Matutino</option>
            </select>
          </div>
          <div class="form-line">
            <button type="submit" class="btn btn-primary">Crear</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



    {!! Form::close() !!}
@endsection

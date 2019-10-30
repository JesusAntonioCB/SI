@extends('layouts.admin')
@section('contenido')
    <div class="card">
      <div class="header">
        <h2>Registrar Nuevo Grupo</h2>
      </div>
    </div>
    {!!Form::open(array('url'=> 'Grupos',
    'method' => 'POST')) !!}
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
            <input id="nevaluador" class="form-group" type="text" name="Grupo" placeholder="Nombre del Grupo" value="">
          </div>
          <div class="form-line">
            <label>Turno</label>
            <select class="form-control" name="">
              <option value="-1">Turno Nocturno</option>
              <option value="">Turno Matutino</option>
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

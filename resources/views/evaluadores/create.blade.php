@extends('layouts.admin')
@section('contenido')
    <div class="card">
      <div class="header">
        <h2>Registrar Nuevo Evaluador</h2>
      </div>
    </div>
    {!!Form::open(array('url'=> 'Evaluadores',
    'method' => 'POST')) !!}
<div class="card">
  <div class="body card-body">
    <h2 class="card-inside-title">
      NUEVO EVALUADOR
    </h2>
    <div class="row clearfix">
      <div class="col-md-6">
        <div class="form-goup">
          <div class="form-line">
            <label>Nombre del Evaluador</label>
            <input id="nevaluador" class="form-group" type="text" name="Evaluador" placeholder="Nombre del Evaluador" value="">
          </div>
          <div class="form-line">
            <label>Apellido Paterno del Evaluador</label>
            <input id="nevaluador" class="form-group" type="text" name="Evaluador" placeholder="Apellido Paterno del Evaluador" value="">
          </div>
          <div class="form-line">
            <label>Apellido Materno del Evaluador</label>
            <input id="nevaluador" class="form-group" type="text" name="Evaluador" placeholder="Apellido Materno del Evaluador" value="">
          </div>
          <div class="form-line">
            <label>Especialidad del Evaluador</label>
            <input id="nevaluador" class="form-group" type="text" name="Evaluador" placeholder="Especialidad del Evaluador" value="">
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

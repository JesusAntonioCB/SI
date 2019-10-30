@extends('layouts.admin')
@section('contenido')
    <div class="card">
      <div class="header">
        <h2>Registrar Nuevo Proyecto</h2>
      </div>
    </div>
    {!!Form::open(array('url'=> 'Proyectos',
    'method' => 'POST')) !!}
<div class="card">
  <div class="body card-body">
    <h2 class="card-inside-title">
      NUEVO PROYECTO
    </h2>
    <div class="row clearfix">
      <div class="col-md-6">
        <div class="form-goup">
          <div class="form-line">
            <label>Nombre del Proyecto</label>
            <input id="nevaluador" class="form-group" type="text" name="Proyecto" placeholder="Nombre del Proyecto" value="">
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

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
            <input id="nevaluador" class="form-group" type="text" name="nproyecto" placeholder="Nombre del Proyecto">
          </div>
          <div class="form-line">
            <label>Memoria</label>
            <input class="form-group" type="file" name="memoria" placeholder="Memoria">
          </div>
          <div class="form-line">
            <label>Grupo</label>
            <select class="form-control"  name="grupo">
              @foreach($grupos as $grupo)
                <option value="{{$grupo->id}}">{{$grupo->grupos}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-line">
            <label>Salon</label>
            <select class="form-control"  name="salon">
              @foreach($salones as $salon)
                <option value="{{$salon->id}}">{{$salon->salon}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-line">
            <label>Evaluador</label>
            <select class="form-control"  name="evaluador">
              @foreach($evaluadores as $evaluador)
                <option value="{{$evaluador->id}}">{{$evaluador->nombres}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-line">
            <label>Fecha del Proyecto</label>
            <input class="form-group" type="date" name="fecha" placeholder="Fecha del Proyecto">
          </div>
          <div class="form-line">
            <label>Horario de Exposición</label>
            <input class="form-group" type="time" name="horario" placeholder="Horario de Exposición">
          </div>
          <div class="form-line">
            <label>Promedio</label>
            <input class="form-group" type="text" name="promedio" placeholder="Promedio">
          </div>
          <div class="form-line">
            <label>Descripcion</label>
            <input class="form-group" type="text" name="descripcion" placeholder="Descripcion">
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

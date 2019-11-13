@extends('layouts.admin')
@section('contenido')
    <div class="card">
      <div class="header">
        <h2>Registrar Nuevo Proyecto</h2>
      </div>
    </div>
    {!!Form::model($proyectos,[
      'method' => 'PATCH',
      'route' => ['Proyectos.update',$proyectos->id
      ]]) !!}
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
            <input id="nevaluador" class="form-group" type="text" name="nproyecto" placeholder="Nombre del Proyecto" value="{{$proyectos->nombre_proyecto}}" >
          </div>
          <div class="form-line">
            <label>Memoria</label>
            <input class="form-group" type="file" name="memoria" placeholder="Memoria" value="{{$proyectos->memoria}}">
          </div>
          <div class="form-line">
            <label>Grupo</label>
            <select class="form-control"  name="grupo">
              @foreach($grupos as $grupo)
              <?php if ($grupo->id == $proyectos->idgrupo): ?>
                  <option value="{{$grupo->id}}" selected="selected" >{{$grupo->grupos}}</option>
                <?php else: ?>
                  <option value="{{$grupo->id}}">{{$grupo->grupos}}</option>
              <?php endif; ?>
              @endforeach
            </select>
          </div>
          <div class="form-line">
            <label>Salon</label>
            <select class="form-control"  name="salon">
              @foreach($salones as $salon)
                <?php if ($salon->id == $proyectos->idsalones): ?>
                    <option value="{{$salon->id}}" selected="selected" >{{$salon->salon}}</option>
                  <?php else: ?>
                    <option value="{{$salon->id}}">{{$salon->salon}}</option>
                <?php endif; ?>
              @endforeach
            </select>
          </div>
          <div class="form-line">
            <label>Evaluador</label>
            <select class="form-control"  name="evaluador">
              @foreach($evaluadores as $evaluador)
                <?php if ($evaluador->id == $proyectos->idevaluador): ?>
                    <option value="{{$evaluador->id}}" selected="selected" >{{$evaluador->nombres}}</option>
                  <?php else: ?>
                    <option value="{{$evaluador->id}}">{{$evaluador->nombres}}</option>
                <?php endif; ?>
              @endforeach
            </select>
          </div>
          <div class="form-line">
            <label>Fecha del Proyecto</label>
            <input class="form-group" type="date" name="fecha" placeholder="Fecha del Proyecto" value="{{$proyectos->fecha}}">
          </div>
          <div class="form-line">
            <label>Horario de Exposición</label>
            <input class="form-group" type="time" name="horario" placeholder="Horario de Exposición" value="{{$proyectos->horario_expo}}">
          </div>
          <div class="form-line">
            <label>Promedio</label>
            <input class="form-group" type="text" name="promedio" placeholder="Promedio" value="{{$proyectos->promedio}}">
          </div>
          <div class="form-line">
            <label>Descripcion</label>
            <input class="form-group" type="text" name="descripcion" placeholder="Descripcion" value="{{$proyectos->descripcion}}">
          </div>
          <div class="form-line">
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



    {!! Form::close() !!}
@endsection

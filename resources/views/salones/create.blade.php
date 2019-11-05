@extends('layouts.admin')
@section('contenido')
    <div class="card">
      <div class="header">
        <h2>Registrar Nuevo Salon</h2>
      </div>
    </div>
    {!!Form::open(array('url'=> 'Salones',
    'method' => 'POST')) !!}
<div class="card">
  <div class="body card-body">
    <h2 class="card-inside-title">
      NUEVO SALON
    </h2>
    <div class="row clearfix">
      <div class="col-md-6">
        <div class="form-goup">
          <div class="form-line">
            <label>Nombre del Salon</label>
            <input id="nsalon" class="form-group" type="text" name="nsalon" placeholder="Nombre del Salon" value="">
          </div>
          <div class="form-line">
            <label>Nombre del Edificio</label>
            <input class="form-group" type="text" name="edificio" placeholder="Nombre del Edificio" value="">
          </div>
          <div class="form-line">
            <label>Grupo</label>
            <select class="form-control" name="grupo">
              @foreach($grupos as $grupo)
                <option value="{{$grupo->id}}">{{$grupo->grupos}}</option>
              @endforeach
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

@extends('layouts.admin')
@section('contenido')
    <div class="card">
      <div class="header">
        <h2>Registrar Nuevo Evaluador</h2>
      </div>
    </div>
    {!!Form::open(array('url'=> 'Evaluadores',
    'method' => 'POST')) !!}

    <div class="body">
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
              <label>Nombre del Evaluador</label>
              <select class="" name="">
                option
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>


    {!! Form::close() !!}
@endsection

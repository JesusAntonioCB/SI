@extends('layouts.admin')
@section('contenido')
    <div class="card">
      <div class="header">
        <h2>Listado de Evaluadores
          <button class="btn btn-success btn-circle">
            <a href="/Evaluadores/create"> <i class="material-icons">add</i></a>
          </button>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-ig-12 col-dm-12 col-sm-12 col-xs-12">
        <div class="card-body">
          <div class="table table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Evaluador</th>
                  <th>Especialidad</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($evaluadores as $evaluador)
                  <tr>
                    <td>{{$evaluador->nombres}} {{$evaluador->ap_paterno}} {{$evaluador->ap_materno}}</td>
                    <td>{{$evaluador->especialidad}}</td>
                    <td>
                      <a href="{{URL::action('EvaluadoresController@edit',$evaluador->id)}}"><button class="btn btn-primary btn-circle"> <i class="material-icons">create</i></button></a>
                      <button class="btn btn-danger btn-circle" data-toggle="modal" data-target="#exampleModal{{$evaluador->id}}"> <i class="material-icons">delete</i></button>
                    </td>
                  </tr>
                  @include('evaluadores.modal', ['evaluador' => $evaluador])
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
@endsection

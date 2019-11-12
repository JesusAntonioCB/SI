@extends('layouts.admin')
@section('contenido')
    <div class="card">
      <div class="header">
        <h2>Listado de Grupos
          <button class="btn btn-success btn-circle">
            <a href="/Grupos/create"> <i class="material-icons">add</i></a>
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
                  <th>Grupo</th>
                  <th>Turno</th>
                  <th>Estado</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($grupos as $grupo)
                <tr>
                  <td>{{$grupo->grupos}}</td>
                  <td>{{$grupo->turno}}</td>
                  <td>{{$grupo->estado}}</td>
                  <td>
                     <a href="{{URL::action('GruposController@edit',$grupo->id)}}"><button class="btn btn-primary btn-circle"> <i class="material-icons">create</i></button></a>
                  {{   Form::open([ 'method'  => 'POST', 'url' => [ 'grupos', $grupo->id ] ]) }}
                         {{method_field('DELETE')}}
                      <input type="submit" class="btn btn-danger" value="Delete"/>
                     {{ Form::close() }}
                     <button class="btn btn-danger btn-circle"> <i class="material-icons">delete</i></button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
@endsection

@extends('layouts.admin')
@section('contenido')
    <div class="card">
      <div class="header">
        <h2>Listado de Proyectos
          <button class="btn btn-success btn-circle">
            <a href="/Proyectos/create"> <i class="material-icons">add</i></a>
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
                  <th>ID</th>
                  <th>Proyecto</th>
                  <th>Descripcion</th>
                  <th>Promedio</th>
                  <th>Grupos</th>
                  <th>Salon</th>
                  <th>Evaluador</th>
                  <th>Fecha</th>
                  <th>horario</th>
                  <th>memoria</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>

                @foreach($proyectos as $proyecto)
                  <tr>
                    <td>{{$proyecto->id}}</td>
                    <td>{{$proyecto->nombre_proyecto}}</td>
                    <td>{{$proyecto->descripcion}}</td>
                    <td>{{$proyecto->promedio}}</td>
                    <td>{{$proyecto->grupos}}</td>
                    <td>{{$proyecto->salon}}</td>
                    <td>{{$proyecto->nombres}}</td>
                    <td>{{$proyecto->fecha}}</td>
                    <td>{{$proyecto->horario_expo}}</td>
                    <td>{{$proyecto->memoria}}</td>
                    <td>
                      <a href="{{URL::action('ProyectosController@edit',$proyecto->id)}}"><button class="btn btn-primary btn-circle"> <i class="material-icons">create</i></button></a>
                      <button class="btn btn-danger btn-circle" data-toggle="modal" data-target="#exampleModal{{$proyecto->id}}"> <i class="material-icons">delete</i></button>
                    </td>
                  </tr>
                  @include('proyectos.modal', ['proyecto' => $proyecto])
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
@endsection

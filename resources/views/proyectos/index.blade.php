@extends('layouts.admin')
@section('contenido')
    <div class="card">
      <div class="header">
        <h2>Listado de Proyectos</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-ig-12 col-dm-12 col-sm-12 col-xs-12">
        <div class="card-body">
          <div class="table table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Proyecto</th>
                  <th>Descripcion</th>
                  <th>Promedio</th>
                  <th>Fecha</th>
                  <th>horario</th>
                  <th>memoria</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($proyectos as $proyecto)
                <tr>
                  <td>{{$proyecto->nombre_proyecto}}</td>
                  <td>{{$proyecto->descripcion}}</td>
                  <td>{{$proyecto->promedio}}</td>
                  <td>{{$proyecto->fecha}}</td>
                  <td>{{$proyecto->horario_expo}}</td>
                  <td>{{$proyecto->memoria}}</td>
                  <td>
                    <button class="btn btn-primary btn-circle"> <i class="material-icons">Create</i></button>
                    <button class="btn btn-primary btn-circle"> <i class="material-icons">Delete</i></button>
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

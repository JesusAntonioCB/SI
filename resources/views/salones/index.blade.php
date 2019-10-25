@extends('layouts.admin')
@section('contenido')
    <div class="card">
      <div class="header">
        <h2>Listado de Salones<button class="btn btn-success btn-circle"> <i class="material-icons">add</i></button></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-ig-12 col-dm-12 col-sm-12 col-xs-12">
        <div class="card-body">
          <div class="table table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Salon</th>
                  <th>Edificio</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($salones as $salon)
                <tr>
                  <td>{{$salon->salon}}</td>
                  <td>{{$salon->edificio}}</td>
                  <td>
                     <button class="btn btn-primary btn-circle"> <i class="material-icons ">create</i></button>
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

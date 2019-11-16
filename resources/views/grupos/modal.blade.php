<div class="modal fade" id="exampleModal{{$grupo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  {{ Form::open(['action'=> [
      'GruposController@destroy',
      $grupo->id],'method'=>'delete']) }}
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Grupo: <span class="text-primary">{{$grupo->grupos}}</span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          El Grupo: <span class="text-primary">{{$grupo->grupos}}</span> Pasara a estar inactivo
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Si</button>
        </div>
      </div>
    </div>
  {{ Form::close() }}
</div>

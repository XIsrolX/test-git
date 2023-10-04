@extends('layouts.app')

@section('title', 'Calendario')

@section('content')
    <div class="container">
        <div id="calendario">

        </div>
    </div>
  
  <!-- Modal -->
  <div class="modal fade" id="agenda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Datos del Evento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> 
        <div class="modal-body">
          
            <form action="" id="formularioCalendario">

                {!! csrf_field() !!}

                <div class="form-group d-none">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="Nombre del evento">
                  </div>
                  <br>
                <div class="form-group">
                  <label for="title">Titulo</label>
                  <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Nombre del evento">
                </div>
                <br>
                <div class="form-group">
                  <label for="descripcion">Descripcion</label>
                  <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="start">Fecha de inicio</label>
                    <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="xx/xx/xxx">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="end">Fecha de termino</label>
                    <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="xx/xx/xxx">
                  </div>

            </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="btnSave">Guardar</button>
          <button type="button" class="btn btn-warning" id="btnEdit">Modificar</button>
          <button type="button" class="btn btn-danger" id="btnDelete">Eliminar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('footer')
    
@endsection
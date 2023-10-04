@extends('layouts.app')

@section('title', 'Eliminar')
    
@section('content')
    <div class="card">
        <h5 class="card-header">Eliminar Persona</h5>
        <div class="card-body">

            <p class="card-text">
                <div class="alert alert-danger" role="alert">
                    En verdad quieres eliminar esta persona?
                    <table class="table table-sm table-hover">
                        <thead>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Fecha de Nacimiento</th>
                        </thead>
                        <tbody>
                            <td>{{ $formulario->nombre }}</td>
                            <td>{{ $formulario->apellidoP }}</td>
                            <td>{{ $formulario->apellidoM }}</td>
                            <td>{{ $formulario->fecha_nacimiento }}</td>
                        </tbody>
                    </table>
                    <hr>
                    
                    <form action="{{ route('formulario.destroy', $formulario->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route("formulario.index") }}" class="btn btn-primary" style="BORDER: rgb(128,128,128) 1px solid; 
                        BACKGROUND-COLOR: rgb(31, 24, 24)"><span class="fas fa-undo"></span> Regresar</a>
                        <button class="btn btn-danger" style="BORDER: rgb(128,128,128) 1px solid; 
                        BACKGROUND-COLOR: rgb(31, 24, 24)"><span class="fas fa-user-times"></span> Eliminar</button>
                    </form>
                    
                </div>
            </p>

        </div>
    </div>
@endsection
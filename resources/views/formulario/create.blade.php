@extends('layouts.app')

@section('title', 'Agregar')
    
@section('content')
    <div class="card">
        <h5 class="card-header">Agregar Nueva Persona</h5>
        <div class="card-body">
            <p class="card-text">
                <form action="{{ route("formulario.store") }}" method="POST">
                    @csrf

                    <label for="">Nombre: </label>
                    <input type="text" name="nombre" class="form-control" required placeholder="Nombre">

                    <label for="">Apellido Paterno: </label>
                    <input type="text" name="apellidoP" class="form-control" required>

                    <label for="">Apellido Materno: </label> 
                    <input type="text" name="apellidoM" class="form-control" required>

                    <label for="">Fecha de Nacimiento: </label>
                    <input type="date" name="fecha_nacimiento" class="form-control" required>
                    <br>
                    <a href="{{ route("formulario.index") }}" class="btn btn-primary"><span class="fas fa-undo"></span> Regresar</a>
                    <button class="btn btn-primary"><span class="fas fa-user-plus"></span> Agregar</button>
                </form>
            </p>
        </div>
    </div>
@endsection
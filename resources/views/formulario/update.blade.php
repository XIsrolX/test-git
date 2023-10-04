@extends('layouts.app')

@section('title', 'Actualizar')
    
@section('content')
    <div class="card"> 
        <h5 class="card-header">Actualizar Persona</h5>
        <div class="card-body">
            <p class="card-text">
                <form action="{{ route('formulario.update', $formulario->id) }}" method="POST">
                    @csrf
                    @method("PUT")

                    <label for="">Nombre: </label>
                    <input type="text" name="nombre" class="form-control" required value="{{ $formulario->nombre }}">

                    <label for="">Apellido Paterno: </label>
                    <input type="text" name="apellidoP" class="form-control" required value="{{ $formulario->apellidoP }}">

                    <label for="">Apellido Materno: </label>
                    <input type="text" name="apellidoM" class="form-control" required value="{{ $formulario->apellidoM }}">

                    <label for="">Fecha de Nacimiento: </label>
                    <input type="date" name="fecha_nacimiento" class="form-control" required value="{{ $formulario->fecha_nacimiento }}">
                    <br>
                    <a href="{{ route("formulario.index") }}" class="btn btn-primary"><span class="fas fa-undo"></span> Regresar</a>
                    <button class="btn btn-primary"><span ></span>Actualizar</button>
                </form>
            </p>
        </div>
    </div>
@endsection
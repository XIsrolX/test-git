@extends('layouts.app')

@section('title', 'Agregar Contacto')
    
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Agregar nuevo contacto</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{ route('contactos.store') }}", method="POST">
                                @csrf
                                @method('POST')
                                <label for="categoria">Categoria</label>
                                <select name="categoria" id="categoria" class="form-select" required>
                                    <option value="">Selecciona una opcion</option>
                                    @foreach ($categorias as $item)
                                        <option value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" required id="nombre" required>

                                <label for="apellidoP">Apellido Paterno</label>
                                <input type="text" class="form-control" name="apellidoP" required id="apellidoP" required>

                                <label for="apellidoM">Apellido Materno</label>
                                <input type="text" class="form-control" name="apellidoM" required id="apellidoM" required>

                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control" name="telefono" required id="telefono" required>

                                <label for="email">Correo Electronico</label>
                                <input type="text" class="form-control" name="email" required id="email" required>
                                
                                <hr>
                                <a href="{{ route("contactos.index") }}" class="btn btn-primary"><span class="fas fa-undo"></span> Regresar</a>
                                <button class="btn btn-primary">Agregar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
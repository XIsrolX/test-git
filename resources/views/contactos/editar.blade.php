@extends('layouts.app')

@section('title', 'Editar Contacto')
    
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Editar contacto</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{ route('contactos.update', $contacto->id_contacto) }}", method="POST">
                                @csrf
                                @method('PUT')
                                <label for="categoria">Categoria</label>
                                <select name="categoria" id="categoria" class="form-select">
                                    @foreach ($categorias as $item)
                                        @if ($item->id_categoria == $contacto->id_categoria)
                                            <option selected value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                                        @else
                                        <option value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" required id="nombre" required value="{{ $contacto->nombre }}">

                                <label for="apellidoP">Apellido Paterno</label>
                                <input type="text" class="form-control" name="apellidoP" required id="apellidoP" required value="{{ $contacto->apellidoP }}">

                                <label for="apellidoM">Apellido Materno</label>
                                <input type="text" class="form-control" name="apellidoM" required id="apellidoM" required value="{{ $contacto->apellidoM }}">

                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control" name="telefono" required id="telefono" required value="{{ $contacto->telefono }}">

                                <label for="email">Correo Electronico</label>
                                <input type="text" class="form-control" name="email" required id="email" required value="{{ $contacto->email }}">
                                
                                <hr>
                                <a href="{{ route("contactos.index") }}" class="btn btn-primary"><span class="fas fa-undo"></span> Regresar</a>
                                <button class="btn btn-warning">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
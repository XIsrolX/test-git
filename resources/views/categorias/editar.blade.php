@extends('layouts.app')

@section('title', 'Editar Categoria')
    
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Editar categoria</h2>
                            <hr>
                            
                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{ route('categorias.update', $categorias->id_categoria) }}", method="POST">
                                @csrf
                                @method('PUT')
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" required id="nombre" required value="{{ $categorias->nombre }}">

                                <label for="descripcion">Descripcion</label>
                                <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control" class="form-control">{{ $categorias->descripcion }}</textarea>
                                <br>
                                <a href="{{ route("categorias.index") }}" class="btn btn-primary"><span class="fas fa-undo"></span> Regresar</a>
                                <button class="btn btn-warning">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
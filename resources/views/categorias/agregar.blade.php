@extends('layouts.app')

@section('title', 'Agregar Categoria')
    
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Agregar nueva categoria</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{ route('categorias.store') }}", method="POST">
                                @csrf
                                @method('POST')
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" required id="nombre">

                                <label for="descripcion">Descripcion</label>
                                <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control"></textarea>
                                <hr>
                                <a href="{{ route("categorias.index") }}" class="btn btn-primary"><span class="fas fa-undo"></span> Regresar</a>
                                <button class="btn btn-primary">Agregar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
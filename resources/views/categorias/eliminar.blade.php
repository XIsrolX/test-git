@extends('layouts.app')

@section('title', 'Eliminar Categoria')
    
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Eliminar categoria</h2> 
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                           <div class="alert alert-danger" role="alert"> 
                            Estas seguro de eliminar esta categoria?
                            <hr>
                            <table class="table table-sm">
                                <thead>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $categorias->nombre }}</td>
                                        <td>{{ $categorias->descripcion }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <form action="{{ route('categorias.destroy', $categorias->id_categoria) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route("categorias.index") }}" class="btn btn-primary" style="BORDER: rgb(128,128,128) 1px solid; 
                                BACKGROUND-COLOR: rgb(15, 15, 15)"><span class="fas fa-undo"></span> Regresar</a>
                                <button class="btn btn-danger" style="BORDER: rgb(128,128,128) 1px solid; 
                                BACKGROUND-COLOR: rgb(31, 24, 24)"><span class="fas fa-times"></span> Eliminar</button>
                            </form>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('title', 'Formulario')

@section('content')
    <div class="card">
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $mensaje }}
                </div>
                @endif
            </div>
        </div>
        <h5 class="card-header">Listado de personas en el sistema</h5>
        <div class="card-body">
            <p>
                <a href="{{ route("formulario.create") }}" class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar</a>               
            </p>
            <hr>
            <p class="card-text">
                <div class="table table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Fecha de Nacimiento</th> 
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>  
                        <tbody>
                            @foreach ($datos as $dato)
                            <tr>
                                <td>{{ $dato->nombre }}</td>
                                <td>{{ $dato->apellidoP }}</td>
                                <td>{{ $dato->apellidoM }}</td>
                                <td>{{ $dato->fecha_nacimiento }}</td>
                                <td>
                                    <form action="{{ route("formulario.edit", $dato->id) }}" method="GET">
                                        <button class="btn btn-warning btn-sm">
                                            <span class="fas fa-user-edit"></span>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route("formulario.destroy", $dato->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            <span class="fas fa-user-times"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        {{ $datos->links() }}
                    </div>
                </div>
            </p>
        </div>
    </div>
@endsection

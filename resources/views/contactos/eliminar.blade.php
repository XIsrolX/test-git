@extends('layouts.app')

@section('title', 'Eliminar Contactos')
    
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Eliminar Contactos</h2>
                            
                            
                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                           <div class="alert alert-danger" role="alert"> 
                            Estas seguro de eliminar este contacto?
                            <hr>
                            <table class="table table-sm table-bordered">
                                <thead>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th>Categoria</th>
                                </thead>
                                <tbody>                                                                        
                                    <tr>
                                        <td>{{ $contacto->nombre }}</td>
                                        <td>{{ $contacto->apellidoP }}</td>
                                        <td>{{ $contacto->apellidoM }}</td>
                                        <td>{{ $contacto->telefono }}</td>
                                        <td>{{ $contacto->email }}</td>
                                        <td>{{ $contacto->nombre_categoria }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <form action="{{ route('contactos.destroy', $contacto->id_contacto) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route("contactos.index") }}" class="btn btn-primary"><span class="fas fa-undo"></span> Regresar</a>
                                <button class="btn btn-danger" style="BORDER: rgb(128,128,128) 1px solid; 
                                BACKGROUND-COLOR: rgb(31, 24, 24)"><span class="fas fa-user-times"></span> Eliminar</button>
                            </form>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
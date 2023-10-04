@extends('layouts.app')

@section('title', 'Contactos')
    
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Contactos</h2>
                            <hr>
                            @if ($mensaje = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ $mensaje }}
                                </div>
                             @endif
                           <a href="{{ route('contactos.create') }}" class="btn btn-primary"><span class="fas fa-phone"></span> Agregar un nuevo contacto</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <hr>
                            <table class="table table-sm table-bordered" id="tablaContactos">
                                <thead>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th>Categoria</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </thead>
                                <tbody>
                                    @foreach ($listado as $list)                                                                            
                                    <tr>
                                        <td>{{ $list->nombre }}</td>
                                        <td>{{ $list->apellidoP }}</td>
                                        <td>{{ $list->apellidoM }}</td>
                                        <td>{{ $list->telefono }}</td>
                                        <td>{{ $list->email }}</td>
                                        <td>{{ $list->nombre_categoria }}</td>
                                        <td>
                                            <a href="{{ route('contactos.edit', $list->id_contacto ) }}" class="btn btn-warning btn-sm"><span class="fas fa-user-edit"></span></a>
                                        </td>
                                        <td>
                                            <a href="{{ route('contactos.show', $list->id_contacto ) }}" class="btn btn-danger btn-sm"><span class="fas fa-user-minus"></span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('datatable')
<script>
    $(document).ready(function(){
        $('#tablaContactos').DataTable();
    });
</script>
@endsection
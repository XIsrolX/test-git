@extends('layouts.app')

@section('title', 'Categoria')
    
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card"> 
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Categorias</h2>
                            <hr>
                            @if ($mensaje = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ $mensaje }}
                                </div>
                             @endif
                           <a href="{{ route('categorias.create') }}" class="btn btn-primary"><span class="fas fa-plus"></span> Agregar nueva categoria</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <hr>
                            <table class="table table-sm table-bordered" id="tablaCategorias">
                                <thead>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                    <tr>
                                        <td>{{ $categoria->nombre }}</td>
                                        <td>{{ $categoria->descripcion }}</td>
                                        <td>
                                            <a href="{{ route('categorias.edit', $categoria->id_categoria) }}" class="btn btn-warning btn-sm">
                                            <span class="fas fa-folder"></span></a>
                                        </td>
                                        <td>
                                            <a href="{{ route('categorias.show', $categoria->id_categoria) }}" class="btn btn-danger btn-sm">
                                            <span class="fas fa-trash-alt"></span></a>
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
        $('#tablaCategorias').DataTable();
    });
</script>
@endsection
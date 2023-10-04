<form action="{{ route('categorias.destroy', $categorias->id_categoria) }}" method="POST">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="ModalDelete{{$categorias->id_categoria}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> Borrar Categoria </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal body">Estas seguro que quieres borrar esta categoria?</div>
                <div class="modal-footer">
                    <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-outline-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Modal -->
<div class="modal fade" id="modalActualizarCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar una categoría</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="" id="frmAgregarCategoriaU">

        <input type="text" name="idCategoria" id="idCategoria" hidden="">

        <label for="nombreCategoriaU">Nombre de la categoría</label>
        <input type="text" id="nombreCategoriaU" name="nombreCategoriaU" class="form-control">

        <label for="descripcion">Descripción de la categoría</label>
        <textarea type="text" id="descripcionU" name="descripcionU" class="form-control"></textarea>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Actualizar</button>
      </div>

    </div>
  </div>

</div>
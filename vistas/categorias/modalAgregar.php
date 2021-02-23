<!-- Modal -->
<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar una categoría</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form id="frmAgregarCategoria">

        <label for="nombreCategoria">Nombre de la categoría</label>
        <input type="text" id="nombreCategoria" name="nombreCategoria" class="form-control">

        <label for="descripcion">Descripción de la categoría</label>
        <textarea type="text" id="descripcion" name="descripcion" class="form-control"></textarea>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" id="btnGuardarCategoria">Guardar</button>
      </div>

    </div>
  </div>

</div>
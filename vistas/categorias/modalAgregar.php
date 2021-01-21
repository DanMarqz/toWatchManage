<!-- Modal -->
<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar una categoría</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="" id="frmAgregarCategoria">
        
        <label for="nombreCategoria">Nombre de la categoría</label>
        <input type="text" id="nombreCategoria" name="nombreCategoria" class="form-control">

        <label for="descripcion">Descripción de la categoría</label>
        <textarea type="text" id="descripcion" name="descripcion" class="form-control"></textarea>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>

    </div>
  </div>

</div>
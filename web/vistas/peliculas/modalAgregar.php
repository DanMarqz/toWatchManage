<!-- Modal -->
<div class="modal fade" id="modalAgregarPelicula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Movie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form id="frmAgregarPelicula">

        <label for="nombrePelicula">Movie Name</label>
        <input type="text" id="nombrePelicula" name="nombrePelicula" class="form-control">

        <label for="url">Movie URL</label>
        <textarea type="text" id="url" name="url" class="form-control"></textarea>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-info" id="btnGuardarPelicula">Guardar</button>
      </div>

    </div>
  </div>

</div>
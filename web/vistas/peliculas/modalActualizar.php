<!-- Modal -->
<div class="modal fade" id="modalActualizarPelicula" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update movie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="" id="frmAgregarPeliculaU">

        <input type="text" name="idPelicula" id="idPelicula" hidden="">

        <label for="nombrePeliculaU">Movie Name</label>
        <input type="text" id="nombrePeliculaU" name="nombrePeliculaU" class="form-control">

        <label for="url">Movie URL</label>
        <textarea type="text" id="urlU" name="urlU" class="form-control"></textarea>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-info" id="btnActualizarPelicula">Update</button>
      </div>

    </div>
  </div>

</div>
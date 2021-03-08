<!-- Modal -->
<div class="modal fade" id="modalActualizarSerie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Series</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="" id="frmAgregarSerieU">

        <input type="text" name="idSerieU" id="idSerieU" hidden="">

        <!-- nombre del Serie -->
        <label for="nombreSerieU">Series name</label>
        <input type="text" id="nombreSerieU" name="nombreSerieU" class="form-control">

        <!-- temporada del Serie -->
        <label for="temporadaSerieU">Series season</label>
        <input type="text" id="temporadaSerieU" name="temporadaSerieU" class="form-control">

        <!-- episodio del Serie -->
        <label for="episodioSerieU">Series episode</label>
        <input type="text" id="episodioSerieU" name="episodioSerieU" class="form-control">

        <!-- url del Serie -->
        <label for="urlSerieU">Series URL</label>
        <input type="text" id="urlSerieU" name="urlSerieU" class="form-control">

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-info" id="btnActualizarSerie">Update</button>
      </div>

    </div>
  </div>

</div>